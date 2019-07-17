<?php get_header(); ?>

<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                 	<!-- <h2><?php the_title(); ?></h2> -->
			    <?php endwhile; else: ?>
				  <h4><?php _e('Записей нет') ?></h4>
			    <?php endif; ?>

			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>