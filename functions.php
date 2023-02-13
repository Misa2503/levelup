<?php 
    add_theme_support('post-thumbnails');

    function enqueue_style_script() {
        $ver = '1.0.0';


        wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
        wp_enqueue_style('maincss');

        wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $ver, 1, 1);
        wp_enqueue_script('mainjs');

        wp_register_script('test_ajax', get_template_directory_uri() . '/assets/js/test-ajax.js', array('jquery'), $ver, 1, 1);
        wp_enqueue_script('test_ajax');

        wp_localize_script('test_ajax', 'ajax', array('url' => admin_url('admin-ajax.php')));
    }

    add_action('wp_enqueue_scripts', 'enqueue_style_script');

    function twenty_twenty_one_widgets_init() {

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
                'id'            => 'sidebar-1',
                'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
    add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

    function receive_ajax_values() {
        $input_value = $_POST['inputValue'];
        if($input_value > 10) {
            echo '1';
        }
        else{
            echo '0';
        }

        wp_die();
    }
    add_action('wp_ajax_receive_ajax_values', 'receive_ajax_values');
    add_action('wp_ajax_nopriv_ajax_values', 'receive_ajax_values');
?>  