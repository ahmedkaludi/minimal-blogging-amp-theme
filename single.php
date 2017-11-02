<?php amp_header(); ?>
	<?php $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'large', 'responsive'=> false); ?>
<div class="single-page-amp">
	<div class="featured-image">
		<?php amp_featured_image($args);?>
	</div>
	<div class="featured-overlay">
		<div class="loop-post">
		    <div class="container">
			    <?php amp_loop_category(); ?>
			    <?php amp_loop_title(); ?>
			    <?php amp_date(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php 
		$args = $arrayName = array('avatar' => true, 
									'author_prefix' =>'by',
									'avatar_size' => 80);
		amp_author_box($args); ?>
	<div class="amp-single-postcontent">
		<?php amp_content(); ?>
	</div>
	<div class="amp-single-related-posts">
		<?php amp_related_posts(); ?>
	</div>
	<?php amp_footer()?>
</div>