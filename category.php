<?php get_header(); ?>

	<body>
		<!-- Page Content -->
	    <div id="principal" class="container hero-spacer">
			
			<!-- Banner -->
			<?php include 'banner.php' ?>
	        <!-- /.Banner -->
			
			<!-- Barra de navegación -->
			<?php include 'navbar.php'; ?>
			<!-- /.Barra de navegación -->			
			
			<br>
			
			<section>
				<div class="row">
					<div class="col-sm-8" style="text-align: justify;">
						<?php while (have_posts()) : the_post(); ?>	
							<div class="panel panel-default">
						  		<div class="panel-heading" <?php post_class() ?> id="post-<?php the_ID(); ?>">
						    		<h1 class="panel-title">
						    			<?php echo the_title(); ?>
						    		</h1>
						    	</div>								
					          	<div class="panel-body">
					          		<p><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>
						    		<p><?php the_content('Leer el resto de esta noticia &raquo;'); ?></p>
								</div>
					  		</div>		
						<?php endwhile; ?>
					</div>
					<div class="col-sm-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>			

			<!--Misceláneos -->
			<?php include 'miscelanea.php'; ?>
			<!-- /.Misceláneos -->		

		</div>
	    <!-- /.Page Content -->
		<?php get_footer(); ?>
	</body>
</html>