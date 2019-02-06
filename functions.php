<?php
// Theme Constants
define('TEXT_DOMAIN', 'avani');

// Theme Support
add_theme_support('menus'); // Add Menu Support
add_theme_support('custom-logo'); // Add Logo Support
add_theme_support('post-thumbnails'); // Add Thumbnail Theme Support
add_theme_support('automatic-feed-links'); // Enables post and comment RSS feed links to head

// Theme Functions
function av_setup_scripts()
{
    // Load jQuery
    wp_enqueue_script('jquery');

    // Load Fonts
    wp_register_style('font_awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_register_style('signika_font','https://fonts.googleapis.com/css?family=Signika:300,400,600,700',false);
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('signika_font');

    // Load Bootstrap
    wp_register_style('bootstrap_css',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap_css');
    wp_register_script('bootstrap_js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('bootstrap_js');

    // Load Global Scripts
    wp_register_style('global_css',get_template_directory_uri().'/assets/css/global.css');
    wp_enqueue_style('global_css');
    wp_register_script('global_js',get_template_directory_uri().'/assets/js/global.js',array(),false,true);
    wp_enqueue_script('global_js');

    // Load style.css
    wp_register_style('avani',get_template_directory_uri().'/style.css');
    wp_enqueue_style('avani');
}
function av_setup_nav_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', TEXT_DOMAIN),
        'footer-menu' => __('Footer Menu', TEXT_DOMAIN)
    ));
}
function av_setup_sidebar()
{
    register_sidebar(array(
        'name'          => __('What We Do Header 1',TEXT_DOMAIN),
        'description'   => __('What We Do Section Widgets',TEXT_DOMAIN),
        'id'            => 'whatwedo',
        'class'         => 'whatwedo',
        'before_widget' => '<div id="%1$s" class="%2$s col-md-6 w-w-title">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __('What We Do 1',TEXT_DOMAIN),
        'description'   => __('What We Do 1 Section Widgets',TEXT_DOMAIN),
        'id'            => 'whatwedo1',
        'class'         => 'whatwedo1',
        'before_widget' => '<div id="%1$s" class="%2$s col-md-4 mdl_bx text-center">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name'          => __('What We Do Header 2',TEXT_DOMAIN),
        'description'   => __('What We Do 2 Section Widgets',TEXT_DOMAIN),
        'id'            => 'whatwedo2',
        'class'         => 'whatwedo2',
        'before_widget' => '<div id="%1$s" class="%2$s col-md-4 col-md-offset-4 text-center btm-title">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __('What We Do 2',TEXT_DOMAIN),
        'description'   => __('What We Do 2 Section Widgets',TEXT_DOMAIN),
        'id'            => 'whatwedo3',
        'class'         => 'whatwedo3',
        'before_widget' => '<div id="%1$s" class="%2$s col-md-4 p_list">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name'          => __('Our Clients Header',TEXT_DOMAIN),
        'description'   => __('Our Clients Section Widgets',TEXT_DOMAIN),
        'id'            => 'clients',
        'class'         => 'clients',
        'before_widget' => '<div id="%1$s" class="%2$s col-md-6 w-w-title">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name'          => __('Our Clients',TEXT_DOMAIN),
        'description'   => __('Our Clients Section Widgets',TEXT_DOMAIN),
        'id'            => 'clients1',
        'class'         => 'clients1',
        'before_widget' => '<div id="%1$s" class="%2$s btm-title text-center">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name'          => __('Contact Us',TEXT_DOMAIN),
        'description'   => __('Contact Us Section Widgets',TEXT_DOMAIN),
        'id'            => 'contact',
        'class'         => 'contact',
        'before_widget' => '<div id="%1$s" class="%2$s col-xs-12">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
function av_setup_customize($wp_customize){
    // Remove Controls
    $wp_customize->remove_control('display_header_text');
    $wp_customize->remove_control('blogdescription');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');

    // Add Site Identity
    $wp_customize->add_setting( 'site_address', array(
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( 'site_address', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Site Address Line 1' )
    ));
    $wp_customize->add_setting( 'site_address2', array(
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( 'site_address2', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Site Address Line 2' )
    ));
    $wp_customize->add_setting( 'site_email', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'site_email', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Site Email' )
    ));
    $wp_customize->add_setting( 'site_phone', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'site_phone', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Site Phone' )
    ));
    $wp_customize->add_setting( 'site_fax', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'site_fax', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Site Fax' )
    ));

    $wp_customize->add_setting( 'facebook_url', array(
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( 'facebook_url', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Facebook Url' )
    ));
    $wp_customize->add_setting( 'twitter_url', array(
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( 'twitter_url', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Twitter Url' )
    ));
    $wp_customize->add_setting( 'linkedin_url', array(
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control( 'linkedin_url', array(
        'type' => 'text',
        'section' => 'title_tagline',
        'label' => __( 'Linkedin Url' )
    ));

    // Footer Logo Settings
    $wp_customize->add_setting( 'footer_logo', array(
        'capability' => 'edit_theme_options',
        'section' => 'title_tagline'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
                'label'         => __( 'Footer Logo', TEXT_DOMAIN),
                'section'       => 'title_tagline',
                'priority'      => 8,
                'button_labels' => array(
                    'select'       => __( 'Select Footer logo', TEXT_DOMAIN ),
                    'change'       => __( 'Change Footer logo', TEXT_DOMAIN ),
                    'remove'       => __( 'Remove', TEXT_DOMAIN ),
                    'default'      => __( 'Default', TEXT_DOMAIN ),
                    'placeholder'  => __( 'No Footer logo selected', TEXT_DOMAIN ),
                    'frame_title'  => __( 'Select Footer logo', TEXT_DOMAIN ),
                    'frame_button' => __( 'Choose Footer logo', TEXT_DOMAIN ),
                ),
            )
        )
    );

    // Banner Section and Settings
    $wp_customize->add_section('banner_info', array(
        'title'      => __( 'Banner Info', TEXT_DOMAIN ),
        'priority'   => 30,
    ));
    $wp_customize->add_setting('banner_image', array(
        'sanitize_callback'	=> 'esc_url_raw',
        'transport'		=> 'postMessage'
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'banner_image',
            array(
                'settings'		=> 'banner_image',
                'section'		=> 'banner_info',
                'label'			=> __( 'Image', TEXT_DOMAIN ),
                'description'	=> __( 'Select the image to be used for Home Top Background.', TEXT_DOMAIN )
            )
        )
    );
    $wp_customize->add_setting( 'banner_title', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'Banner Title'
    ));
    $wp_customize->add_control( 'banner_title', array(
        'type' => 'text',
        'section' => 'banner_info',
        'label' => __( 'Title' )
    ));
}
function av_customizer_live_preview() {
    wp_enqueue_script(
        'theme-customizer',
        get_stylesheet_directory_uri() . '/assets/js/theme-customizer.js',
        array( 'customize-preview' ),
        '0.1.0',
        true
    );
}
function av_customizer_css() {
    $home_top_background_image_url = get_template_directory_uri().'/assets/img/header-image.jpg';
    if (get_theme_mod('banner_image')) {
        $home_top_background_image_url = get_theme_mod('banner_image');
    }
    $page_background_image_url = get_template_directory_uri().'/assets/img/map_img.jpg';
    if(get_the_post_thumbnail_url(get_the_ID())) {
        $page_background_image_url = get_the_post_thumbnail_url(get_the_ID());
    }

    $css_template = get_template_directory_uri().'/assets/css/dynamic.css';
    $file_content = file_get_contents($css_template);
    $new_content = str_replace('$home_top_background_image_url',$home_top_background_image_url,$file_content);
    $new_content = str_replace('$page_background_image_url',$page_background_image_url,$new_content);

    file_put_contents(get_template_directory().'/assets/dynamic.css',$new_content);
    wp_register_style('theme_css',get_template_directory_uri().'/assets/dynamic.css');
    wp_enqueue_style('theme_css');
}
function av_register_custom_post_type()
{
    register_post_type('av_clients',
        array(
            'labels'      => array(
                'name'          => __('Clients'),
                'singular_name' => __('Client'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor',  'thumbnail' ),
            'taxonomies'  => array( 'post_tag'),
            'rewrite'     => array( 'slug' => 'clients' ), // my custom slug
        )
    );
}
function av_clients_display_data($attr)
{
    $query = array();
    $query['post_type'] = 'av_clients';
    $query['posts_per_page'] = -1;
    $query['orderby'] = 'ID';
    $query['order'] = 'ASC';
    if(isset($attr['tag']) && !empty($attr['tag'])) {
        $query['tag'] = $attr['tag'];

        $term = get_term_by( 'slug', $attr['tag'], 'post_tag');
        if(isset($term->description) && !empty($term->description))
        {
            if($attr['tag'] == "brands") {
                echo '<div class="col-md-4 col-md-offset-4 text-center btm-title">
                        <h3 class="txt_up">'.$term->description.'</h3>
                    </div>';
            } else {
                echo '<div class="col-md-6 col-md-offset-3 text-center nw-title">
                        <p>'.$term->description.'</p>
                    </div>';
            }
        }
    }
	echo '<div class="clearfix"></div>';
    $loop = new WP_Query($query);
    $i = 1;
	$j = 1;
    while ( $loop->have_posts() ) : $loop->the_post();
		$class = ($j == 2) ? "col-sm-6" : "col-sm-3";
        echo '<div class="'.$class.' brnd_lg text-center">
                <a><img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" class="img-responsive" alt=""></a>
            </div>';
		$j++;
        if ($i % 3 == 0) {
            echo '<div class="clearfix"></div>';
			$j = 1;
        }
        $i++;
    endwhile;
    echo '<div class="clearfix"></div>';
    wp_reset_postdata();
}

// Theme Hooks
add_action('wp_enqueue_scripts', 'av_setup_scripts'); // Add Theme Stylesheet & Scripts
add_action('init', 'av_setup_nav_menus'); // Add Menu
add_action('widgets_init','av_setup_sidebar'); // Add Sidebar
add_action('customize_register','av_setup_customize' ); // Add Customizer
add_action('customize_preview_init', 'av_customizer_live_preview' );
add_action('wp_head', 'av_customizer_css'); // Customizer CSS
add_action('init', 'av_register_custom_post_type'); // Register CPT

add_shortcode('clients_display','av_clients_display_data');

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/inc/acf/';
    // return
    return $path;
}
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    // return
    return $dir;
}
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/acf/acf.php' );

?>
