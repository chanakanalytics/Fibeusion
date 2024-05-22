<?php 

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    global $wp;
    wp_enqueue_style( 'style1', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.5', 'all');
    wp_enqueue_style('style2',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '1.5','all');
    wp_enqueue_style( 'style3', get_template_directory_uri() . 'assets/css/style.css', array(),'1.5','all');
    wp_enqueue_style( 'style4', get_template_directory_uri() . '/assets/css/form.css', array(), '1.5', 'all');

    wp_enqueue_style( 'style5', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.5', 'all');

    wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.5', 'all');

    wp_enqueue_style( 'style7', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.5', 'all');

    wp_enqueue_style( 'style8', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.5', 'all');

    // wp_enqueue_style( 'style8', get_template_directory_uri() . '/assets/css/case-studies.css', array(), '1.1', 'all');

    if( get_home_url() ==  home_url($wp->request)){
        wp_enqueue_style( 'style7', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    }
    if( is_page('about-us') ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/about.css', array(), '1.1', 'all');
    }
    if( is_page('contact-us')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.1', 'all');
    }
    if( is_page('privacy-policy')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/policy.css', array(), '1.1', 'all');
    }
    if( is_page('quote')) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/quote.css', array(), '1.1', 'all');
    }
    if( is_page('career') ||  is_singular('career') || is_post_type_archive( 'career' )) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/career.css', array(), '1.1', 'all');
        wp_enqueue_style( 'style7', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.1', 'all');
    }
    if( is_page('services') ||  is_singular('service') || is_post_type_archive( 'service' ) ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/services.css', array(), '1.1', 'all');
    }
    if( is_page('blogs') ||  is_singular('blog') || is_category() || is_post_type_archive( 'blog' ) ) {
        wp_enqueue_style( 'style6', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.1', 'all');
    }

    wp_enqueue_script();

    wp_enqueue_script( 'scrpit1', get_template_directory_uri() . "/template/js/jquery-3.4.1.min.js", array(),'1.5', true);

    wp_enqueue_script( 'scrpit2','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(),'5.3.3', true);

    wp_enqueue_script( 'scrpit3', get_template_directory_uri() . "/template/js/aos.js", array(),'1.5', true);

    wp_enqueue_script( 'scrpit4','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(),'', true);


    wp_enqueue_script( 'scrpit5',get_template_directory_uri()."/template/js/bootstrap-better-nav.js", array(),'1.5', true);


    wp_enqueue_script( 'scrpit6', get_template_directory_uri() . "/template/js/custom.js", array(),'1.5', true);

    wp_enqueue_script( 'script7', 'https://kit.fontawesome.com/e5c874c64c.js', array(), '1.5', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    if( is_page('quote')) {
        wp_enqueue_script( 'scrpit7', get_template_directory_uri() . '/assets/js/quote.js', array ( 'jquery'), 1.1, true);

    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );