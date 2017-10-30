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
			</div>
		</div>
	</div>
</div>
<div class="container">
	<?php amp_author_box(); ?>
	<?php amp_content(); ?>
	<?php amp_comments();?>
	<?php amp_related_posts(); ?>
	<?php amp_footer()?>
</div>