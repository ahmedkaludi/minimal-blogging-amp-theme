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
</div>
<?php
	$my_query = related_post_loop_query();
  if( $my_query->have_posts() ) { ?>
    <div class="amp-related-posts">
      <ul class="clearfix">
        <div class="container"><?php ampforwp_related_post(); ?></div>
        <?php
          while( $my_query->have_posts() ) {
            $my_query->the_post();
        ?>
        <li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
            <div class="rlp-image">     
                 <?php ampforwp_get_relatedpost_image('full');?>
			</div>
			<div class="featured-overlay">
				<div class="rlp-cnt">
					<div class="container">
						<?php ampforwp_get_relatedpost_content($argsdata); ?> 
		            </div>
		        </div>
	    	</div>
        </li><?php
        }

      } ?>
      </ul>
    </div>
<?php wp_reset_postdata(); ?>
<?php amp_footer()?>
