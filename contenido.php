<section>
	<div class="row">
	    <?php 
			$args = array(
				'posts_per_page' => 4, 
			);

			$entradas = new WP_Query($args); 
			while($entradas->have_posts()): $entradas->the_post();
		?>
			<div class="col-sm-6 col-md-3">
		    	<div class="thumbnail">		    	
		    		<?php the_post_thumbnail('entradas'); ?>
			        <div class="caption" style="text-align: justify;">
			            <?php the_title('<h4 class="text-center">','</h4>'); ?>
			            <small>
				            <p>Publicado el: <?php the_time(get_option('date_format')); ?></p>
				            <p>Por: 
				            	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename'));?>" style="text-decoration: none;">
				            		<?php the_author(); ?>
				            	</a>
				            </p>
			            </small>
			            <center><a href="<?php the_permalink(); ?>" class="btn btn-success">Leer más</a></center>
			        </div>
		 		</div>
		 	</div>
	    <?php
			endwhile;
			wp_reset_postdata();
		?>	
	</div>
</section>

<section>	
	<div class="row">	
		<?php $categorias = get_categories(); ?>

		<?php foreach ($categorias as $categoria): ?>	
			<div class="col-sm-6 col-md-3">
			<a href="<?php echo get_category_link($categoria->cat_ID); ?>" style="text-decoration: none;">
				<div class="panel panel-default">
					<div class="panel-body text-center">  											
						<i class="<?php echo $categoria->description; ?>" style="color: #58ACFA"></i>
						<p style="text-transform: uppercase;"><strong><?php echo $categoria->name; ?></strong></p>			
					</div>	
				</div>
						</a>					
			</div>

		<?php endforeach; ?>
	</div>
</section>