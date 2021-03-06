<?php
$this->assign('title', $page->title);
$this->assign('description', '');
$this->assign('content_title', $page->title);

?>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"><?= h($page->title) ?></div>
        </div>
    </div>
</header>

<section id="services">
    <div class="container">
        <?= $page->content ?>
    </div>
</section>
