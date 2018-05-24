<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class AppAdminController extends AppController
{

    public $paginate = [
        'limit' => 10,
        'order' => ['id' => 'DESC']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        if ($this->Auth->user('role') === 'admin') {
            // Allow all actions
            $this->Auth->allow();
        }
        $this->viewBuilder()->layout('admin');
        
        $this->redirect_for_database_upgrade();
        
        $this->checkDefaultCampaigns();
        
    }

    public function isAuthorized($user = null)
    {
        // Admin can access every action
        if ($user['role'] === 'admin') {
            return true;
        }
        // Default deny
        return false;
    }
    
    protected function redirect_for_database_upgrade()
    {
        if(!require_database_upgrade()) {
            return true;
        }
        
        if( $this->request->params['controller'] != 'Upgrade' ) {
            return $this->redirect(['controller' => 'Upgrade', 'action' => 'index'], 307);
        }
        
    }
    

    
    protected function checkDefaultCampaigns()
    {
        if(require_database_upgrade()) {
            return true;
        }
        
        $Campaigns = TableRegistry::get('Campaigns');
        $interstitial_campaigns = $Campaigns->find()
                ->where([
                    'default_campaign' => 1,
                    'ad_type' => 1,
                    'status' => 1
                ])
                ->count();
        
        if( $interstitial_campaigns == 0 ) {
            $this->Flash->error(__('You must have at least one interstitial campaign marked as default.'));
        }
        
        $banner_campaigns = $Campaigns->find()
                ->where([
                    'default_campaign' => 1,
                    'ad_type' => 2,
                    'status' => 1
                ])
                ->count();
        
        if( $banner_campaigns == 0 ) {
            $this->Flash->error(__('You must have at least one banner campaign marked as default.'));
        }
    }
    
}
