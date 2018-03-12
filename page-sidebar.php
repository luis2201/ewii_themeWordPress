<?php 
	/*
	* Template Name: Página con sidebar
	*/
	get_header(); ?>

	<body>
		<!-- Page Content -->
	    <div id="principal" class="container hero-spacer">
			
			<!-- Banner -->
			<?php include 'banner.php' ?>
	        <!-- /.Banner -->
			
			<!-- Barra de navegación -->
			<?php include 'navbar.php'; ?>
			<!-- /.Barra de navegación -->

			<section>			
				<?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
				<?php $destacada = $destacada[0]; ?>
				<img class="img-responsive center-block" src="<?php echo $destacada; ?>" alt="">
				<div class="row">					
					<?php while (have_posts()): the_post(); ?>				
						<div class="col-sm-8" style="text-align: justify;">						
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
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