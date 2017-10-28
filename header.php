<?php amp_header_core() ?>
 <header class="header">
    <div class="header-section container">
        <div class="left">
            <?php amp_logo(); ?>
        </div>
        <div class="right">
            <?php amp_sidebar(['action'=>'open-button']); ?>         
        </div>

        <div class="clearfix"></div>
    </div><!-- /.header-section -->
</header>


<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<div class="amp-close-btn">
    <?php amp_sidebar(['action'=>'close-button']); ?>
</div>
<?php amp_menu(); ?>
<?php amp_search();?>
<?php amp_sidebar(['action'=>'end']); ?>

<div class="content-wrapper">