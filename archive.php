<?php get_header(); ?>

<section class="archive">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<?php if(have_posts()) : while(have_posts()) : the_post();  ?>
					<div><?php the_post_thumbnail('medium'); ?></div>
					<h2><?php the_title(); ?></h2>
                 	<h4><?php the_content(); ?></h4>
                    <hr>
			    <?php endwhile; ?>
                <?php else: ?>
				  <h4><?php _e('Записей нет') ?></h4>
			    <?php endif; ?>
			
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>