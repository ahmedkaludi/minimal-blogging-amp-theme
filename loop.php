<?php while(amp_loop('start')): ?>
	
	<?php $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'large', 'responsive'=> false); ?>
	<div class="loop-post-list">
		<div class="featured-image">
			<?php amp_loop_image($args); ?>
		</div>
		<div class="loop-post">
		    <div class="container">
			    <?php amp_loop_category(); ?>
			    <?php amp_loop_title(); ?>
			    <?php amp_loop_excerpt(); ?>
			</div>
		</div>
	</div>
	<?php endwhile; amp_loop('end');  ?>
	<?php amp_pagination(); ?>
	