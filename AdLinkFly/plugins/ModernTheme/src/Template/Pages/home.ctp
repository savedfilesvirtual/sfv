<?php
$this->assign('title', get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));

?>

<!-- Header -->
<header class="shorten">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in wow zoomIn" data-wow-delay="0.3s"><?= __('Shorten URLs and') ?></div>
            <div class="intro-heading wow pulse" data-wow-delay="2.0s"><?= __('earn money') ?></div>
            <div class="row wow rotateInUpLeft" data-wow-delay="0.3s">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php if (get_option('home_shortening') == 'yes') : ?>
                        <?= $this->element('shorten'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container text-center">
        <div class="section-title wow bounceIn">
            <h3 class="section-subheading"><?= __("It's just three steps") ?></h3>
            <h2 class="section-heading"><?= __('How You <b>Start</b>?') ?></h2>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-sm-4">
                <div class="step step1">
                    <div class="step-img"><?= $this->Html->image('step1.png'); ?></div>
                    <h4 class="step-heading"><?= __('Create an account') ?></h4>
                    <div class="step-content"></div>
                    <div class="step-num"><span>1</span></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="step step2">
                    <div class="step-img"><?= $this->Html->image('step2.png'); ?></div>
                    <h4 class="step-heading"><?= __('Shorten your link') ?></h4>
                    <div class="step-content"></div>
                    <div class="step-num"><span>2</span></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="step step3">
                    <div class="step-img"><?= $this->Html->image('step3.png'); ?></div>
                    <h4 class="step-heading"><?= __('Earn Money') ?></h4>
                    <div class="step-content"></div>
                    <div class="step-num"><span>3</span></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-light-gray">
    <div class="container text-center">
        <div class="section-title wow bounceIn">
            <h3 class="section-subheading"><?= __('Earn extra money') ?></h3>
            <h2 class="section-heading"><?= __('Why <b>join us?</b>') ?></h2>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f1.png'); ?></div>
                    <h4 class="feature-heading"><?= __('What is {0}?', h(get_option('site_name'))) ?></h4>
                    <div class="feature-content"><?= __('{0} is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home, when managing and protecting your links.', h(get_option('site_name'))) ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f2.png'); ?></div>
                    <h4 class="feature-heading"><?= __('How and how much do I earn?') ?></h4>
                    <div class="feature-content"><?= __("How can you start making money with {0}? It's just 3 steps: create an account, create a link and post it - for every visit, you earn money. It's just that easy!", h(get_option('site_name'))) ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f3.png'); ?></div>
                    <h4 class="feature-heading"><?= __('{0}% Refferal Bonus', h(get_option('referral_percentage'))) ?></h4>
                    <div class="feature-content"><?= __('The {0} referral program is a great way to spread the word of this great service and to earn even more money with your short links! Refer friends and receive {1}% of their earnings for life!', [h(get_option('site_name')), h(get_option('referral_percentage'))]) ?></div>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f4.png'); ?></div>
                    <h4 class="feature-heading"><?= __('Featured Administration Panel') ?></h4>
                    <div class="feature-content"><?= __('Control all of the features from the administration panel with a click of a button.') ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f5.png'); ?></div>
                    <h4 class="feature-heading"><?= __('Detailed Stats') ?></h4>
                    <div class="feature-content"><?= __('Know your audience. Analyse in detail what brings you the most income and what strategies you should adapt.') ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature">
                    <div class="feature-img"><?= $this->Html->image('f6.png'); ?></div>
                    <h4 class="feature-heading"><?= __('Low Minimum Payout') ?></h4>
                    <div class="feature-content"><?= __('You are required to earn only {0} before you will be paid. We can pay all users via their PayPal.', display_price_currency(get_option('minimum_withdrawal_amount'))) ?></div>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-sm-4">
                <div class="feature last">
                    <div class="feature-img"><?= $this->Html->image('f7.png'); ?></div>
                    <h4 class="feature-heading"><?= __('Highest Rates') ?></h4>
                    <div class="feature-content"><?= __('Make the most out of your traffic with our always increasing rates.') ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature last">
                    <div class="feature-img"><?= $this->Html->image('f8.png'); ?></div>
                    <h4 class="feature-heading"><?= __('API') ?></h4>
                    <div class="feature-content"><?= __('Shorten <a>links</a> more quickly with easy to use API and bring your creative and advanced ideas to life.') ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="feature last">
                    <div class="feature-img"><?= $this->Html->image('f9.png'); ?></div>
                    <h4 class="feature-heading"><?= __('Support') ?></h4>
                    <div class="feature-content"><?= __('A dedicated support team is ready to help with any questions you may have.') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="stat wow flipInY">
                    <?= $this->Html->image('Mouse-Icon.png'); ?>
                    <div class="stat-num">
                        <?= $totalClicks ?>
                    </div>
                    <div class="stat-text">
                        <?= __("Total Clicks") ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="stat wow flipInY">
                    <?= $this->Html->image('Web-Icon.png'); ?>
                    <div class="stat-num">
                        <?= $totalLinks ?>
                    </div>
                    <div class="stat-text">
                        <?= __("Total URLs") ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="stat wow flipInY">
                    <?= $this->Html->image('User-Icon.png'); ?>
                    <div class="stat-num">
                        <?= $totalUsers ?>
                    </div>
                    <div class="stat-text">
                        <?= __("Registered users") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <div class="section-title text-center wow bounceIn">
            <h3 class="section-subheading"><?= __("Client's Testimonials") ?></h3>
            <h2 class="section-heading"><?= __('What <b>People Say</b>?') ?></h2>
        </div>

        <?=
        $this->cell('Testimonial', [], ['cache' => [
                'config' => '1day',
                'key' => 'home_testimonials_' . locale_get_default()
        ]])

        ?>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-light-gray">
    <div class="container">
        <div class="section-title wow bounceIn">
            <h3 class="section-subheading"><?= __("Contact Us") ?></h3>
            <h2 class="section-heading"><?= __("Let's <b>Make it Happen</b>?") ?></h2>
        </div>

        <?= $this->element('contact'); ?>

    </div>
</section>
