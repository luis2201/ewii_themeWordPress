<nav class="navbar navbar-default" role="navigation" style="margin-bottom: -15px;">
    <!-- Logotipo en la barra de navegación -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" style="width: 100px;"></a>
    </div>
 
    <!-- Barra de navegación -->    
    <div class="collapse navbar-collapse navbar-ex1-collapse">         
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu_principal', 
                'menu_class' => 'nav navbar-nav navbar-right'
            ));
        ?>               
    </div>
</nav>