<div id="page-modal">
    <div class="<?php echo str_replace(' ', '_', strtolower($title_for_layout)); ?> index">
        <div class="row">
            <div class="col-lg-12"><h1 class="page-header"><?php echo $title_for_layout; ?></h1></div>
        </div>
        <div class="row vertical-align-bottom">
            <div class="col-xs-8 text-center">
                <?php echo $this->Session->flash(); ?>
            </div>
            <div class="col-xs-4">
                <?php echo $this->fetch('toolbar'); ?>
            </div>
        </div>
        <?php echo $this->fetch('content'); ?>
    </div>
</div>