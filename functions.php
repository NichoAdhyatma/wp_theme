<?php
function theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', 'menu-domain'),
        )
    );
}

function theme_scripts_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function home_theme_customize_setup($wp_customize)
{

    $wp_customize->add_section(
        'home_section',
        array(
            'title' => __('Home Content', 'theme_domain'),
            'priority' => 20,
        )
    );

    $wp_customize->add_setting(
        'home_title',
        array(
            'default' => 'Default Title',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'home_title',
        array(
            'label' => __('Home Title', 'theme_domain'),
            'section' => 'home_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'home_desc',
        array(
            'default' => 'Description About home Section',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'home_desc',
        array(
            'label' => __('Home Description', 'theme_domain'),
            'section' => 'home_section',
            'type' => 'text',
        )
    );

}

function theme_customizer_setup($wp_customize)
{
    $wp_customize->add_section(
        'hero_section',
        array(
            'title' => __('Hero Content', 'theme_domain'),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'hero_title',
        array(
            'default' => 'Default Title',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_title',
        array(
            'label' => __('Hero Title', 'theme_domain'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hero_desc',
        array(
            'default' => 'Description About Hero Section',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_desc',
        array(
            'label' => __('Hero Description', 'theme_domain'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'hero_btn',
        array(
            'default' => 'Button Label',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_btn',
        array(
            'label' => __('Hero Button Label', 'theme_domain'),
            'section' => 'hero_section',
            'type' => 'text',
        )
    );
}

function add_additional_class_on_li($atts, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link text-primary';
    }
    return $atts;
}

function custom_theme_customizer_setup($wp_customize)
{

    $wp_customize->add_section('carousel_content', [
        'title' => __('Carousel Content', 'Carousel Content'),
        'priority' => 40,
    ]);


    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("carousel_image_$i", [
            'default' => '',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "carousel_image_{$i}_control", [
            'label' => "Carousel Image $i",
            'section' => 'carousel_content',
            'settings' => "carousel_image_$i",
        ]));
    }
}

add_action('wp_enqueue_scripts', 'theme_scripts_styles');
add_action('after_setup_theme', 'theme_setup');
add_action('customize_register', 'custom_theme_customizer_setup');
add_action('customize_register', 'theme_customizer_setup');
add_action('customize_register', 'home_theme_customize_setup');
add_filter('nav_menu_link_attributes', 'add_additional_class_on_li', 1, 3);

