<?php

function rijon_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widgets Area' , 'rijon'),
        'id' => 'sidebar-1',
        'description' => __('Set Your Widgets Here', 'rijon'),
        'before_widgets' => '<div class="child_sidebar">',
        'after_widgets' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1' , 'rijon'),
        'id' => 'footer-1',
        'description' => __('Set Your Widgets Here', 'rijon'),
        'before_widgets' => '<div class="child_sidebar">',
        'after_widgets' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2' , 'rijon'),
        'id' => 'footer-2',
        'description' => __('Set Your Widgets Here', 'rijon'),
        'before_widgets' => '<div class="child_sidebar">',
        'after_widgets' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3' , 'rijon'),
        'id' => 'footer-3',
        'description' => __('Set Your Widgets Here', 'rijon'),
        'before_widgets' => '<div class="child_sidebar">',
        'after_widgets' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
   
}
add_action('widgets_init' , 'rijon_widgets_register');





function intern_exam_widget_footer (){
    ?>
<footer id="footer_area">
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <?php 
                        if(is_active_sidebar('footer-1')){
                            dynamic_sidebar('footer-1');
                        }
                        ?>
                    </div>
                    <div class="col-xl-4">
                    <?php 
                        if(is_active_sidebar('footer-2')){
                            dynamic_sidebar('footer-2');
                        }
                        ?>
                    </div>
                    <div class="col-xl-4">
                        <?php 
                        if(is_active_sidebar('footer-3')){
                            dynamic_sidebar('footer-3');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <?php echo get_theme_mod('rijon_copyright_section'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
     
      



    <?php
}

add_action('genesis_after_footer', 'intern_exam_widget_footer');