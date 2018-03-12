<section class="miscelanea">    
    <div class="row">
        <div class="col-sm-8">
            <?php dynamic_sidebar('footer_widget'); ?>
        </div>
        <div class="col-sm4">
            <h3>Siguenos en:</h3>
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'menu_redes-sociales',    
                    'container' => 'div'                         ,
                    'container_id' => 'menu-social',
                    'container_class' => 'menu',
                    'menu_id' => 'social',
                    'menu_class' => 'menu_items',
                    'depth' => 1,
                    'link_before' => '<span class="sr-only">',
                    'link_after' => '</span>',
                    'fallback_cb' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
            ?>      
        </div>
    </div>    
</section>    
        




