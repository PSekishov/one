<?php get_header(); ?>

<section class="frontPage">
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<?php get_template_part('sidebar'); ?>
			</div>

            <div class="col-sm-7">
            	<?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                 	
			    <?php endwhile; else: ?>
				  <h4><?php _e('Записей нет') ?></h4>
			    <?php endif; ?>
            </div>

            <div class="col-sm-2">
            	
            </div>

		</div>
	</div>
</section>



<?php get_footer(); ?>