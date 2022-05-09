<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : class-susantokun-customize.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 31st December 2020 10:20:10 pm
 * | Last Modified   : Thursday, 31st December 2020 10:20:15 pm
 * |==============================================================|
 */

if (!class_exists('Susantokun_Customize')) {
    class Susantokun_Customize
    {
        public static function register($wp_customize)
        {
            // theme option
            $wp_customize->add_section(
                'options',
                [
                    'title'       => __('Theme Options', 'susantokun'),
                    'priority'    => 29,
                ]
            );
            // ads
            $wp_customize->add_setting(
                'enable_ads_header',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_header',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 10,
                    'label'    => __('Show ads in header', 'susantokun'),
                ]
            );
            $wp_customize->add_setting(
                'enable_ads_content_home',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_content_home',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 11,
                    'label'    => __('Show ads in content home', 'susantokun'),
                ]
            );
            $wp_customize->add_setting(
                'enable_ads_footer',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_footer',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 12,
                    'label'    => __('Show ads in footer', 'susantokun'),
                ]
            );
            $wp_customize->add_setting(
                'enable_ads_content_top',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_content_top',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 13,
                    'label'    => __('Show ads in content top', 'susantokun'),
                ]
            );
            $wp_customize->add_setting(
                'enable_ads_content_bottom',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_content_bottom',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 14,
                    'label'    => __('Show ads in content bottom', 'susantokun'),
                ]
            );
            $wp_customize->add_setting(
                'enable_ads_content_paragraph',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_ads_content_paragraph',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 15,
                    'label'    => __('Show ads in content paragraph', 'susantokun'),
                ]
            );
            // adblock
            $wp_customize->add_setting(
                'enable_adblock',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_adblock',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 16,
                    'label'    => __('Enable ads blocker from google adsense', 'susantokun'),
                ]
            );
            // loader
            $wp_customize->add_setting(
                'enable_loader',
                [
                    'default'           => false,
                    'sanitize_callback' => [__CLASS__, 'sanitize_checkbox'],
                ]
            );
            $wp_customize->add_control(
                'enable_loader',
                [
                    'type'     => 'checkbox',
                    'section'  => 'options',
                    'priority' => 17,
                    'label'    => __('Enable loader', 'susantokun'),
                ]
            );

            // header_brand
            $wp_customize->add_section(
                'header_brand',
                [
                    'title'       => __('Header Brand', 'susantokun'),
                    'priority'    => 30,
                ]
            );
            // header_brand_title
            $wp_customize->add_setting(
                'header_brand_title',
                [
                    'default' => 'Hai ... Salam Kenal &#128513',
                ]
            );
            $wp_customize->add_control(
                'header_brand_title',
                [
                    'section'  => 'header_brand',
                    'priority' => 10,
                    'label'    => __('Title', 'susantokun'),
                ]
            );
            // header_brand_description
            $wp_customize->add_setting(
                'header_brand_description',
                [
                    'default' => '<p>Susantokun adalah situs edukasi dan tutorial pemrograman, <span class="inline md:block">banyak tutorial untuk pemula dan tentunya gratis.</span></p>',
                ]
            );
            $wp_customize->add_control(
                'header_brand_description',
                [
                    'type'     => 'textarea',
                    'section'  => 'header_brand',
                    'priority' => 11,
                    'label'    => __('Description', 'susantokun'),
                ]
            );
            // header_brand_message
            $wp_customize->add_setting(
                'header_brand_message',
                [
                    'default' => '<div class="flex items-center font-mono leading-relaxed text-center select-none mt-0.5">Terima kasih telah berkunjung<div class="ml-1 select-none animate-bounce">🥰</div></div>',
                ]
            );
            $wp_customize->add_control(
                'header_brand_message',
                [
                    'type'     => 'textarea',
                    'section'  => 'header_brand',
                    'priority' => 12,
                    'label'    => __('Message', 'susantokun'),
                ]
            );
            // header_brand_link_1_name
            $wp_customize->add_setting(
                'header_brand_link_1_name',
                [
                    'default' => 'YOUTUBE',
                ]
            );
            $wp_customize->add_control(
                'header_brand_link_1_name',
                [
                    'type'     => 'text',
                    'section'  => 'header_brand',
                    'priority' => 13,
                    'label'    => __('Link 1 Name', 'susantokun'),
                ]
            );
            // header_brand_link_1
            $wp_customize->add_setting(
                'header_brand_link_1',
                [
                    'default' => 'https://www.youtube.com/susantokun?sub_confirmation=1',
                ]
            );
            $wp_customize->add_control(
                'header_brand_link_1',
                [
                    'type'     => 'text',
                    'section'  => 'header_brand',
                    'priority' => 14,
                    'label'    => __('Link 1 (http:// or https://)', 'susantokun'),
                ]
            );
            // header_brand_link_2_name
            $wp_customize->add_setting(
                'header_brand_link_2_name',
                [
                    'default' => 'GITHUB',
                ]
            );
            $wp_customize->add_control(
                'header_brand_link_2_name',
                [
                    'type'     => 'text',
                    'section'  => 'header_brand',
                    'priority' => 15,
                    'label'    => __('Link 2 Name', 'susantokun'),
                ]
            );
            // header_brand_link_2
            $wp_customize->add_setting(
                'header_brand_link_2',
                [
                    'default' => 'https://github.com/susantokun',
                ]
            );
            $wp_customize->add_control(
                'header_brand_link_2',
                [
                    'type'     => 'text',
                    'section'  => 'header_brand',
                    'priority' => 16,
                    'label'    => __('Link 2 (http:// or https://)', 'susantokun'),
                ]
            );

            // ads
            $wp_customize->add_section(
                'ads',
                [
                    'title'       => __('Adsense', 'susantokun'),
                    'priority'    => 31,
                ]
            );
            // ads_header
            $wp_customize->add_setting(
                'ads_header',
                [
                    'default' => 'Ads Header Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_header',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 10,
                    'label'    => __('Ads Header', 'susantokun'),
                ]
            );
            // ads_content_home
            $wp_customize->add_setting(
                'ads_content_home',
                [
                    'default' => 'Ads Content Home Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_content_home',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 11,
                    'label'    => __('Ads Content Home', 'susantokun'),
                ]
            );
            // ads_footer
            $wp_customize->add_setting(
                'ads_footer',
                [
                    'default' => 'Ads Footer Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_footer',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 12,
                    'label'    => __('Ads Footer', 'susantokun'),
                ]
            );
            // ads_content_top
            $wp_customize->add_setting(
                'ads_content_top',
                [
                    'default' => 'Ads Content Top Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_content_top',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 13,
                    'label'    => __('Ads Content Top', 'susantokun'),
                ]
            );
            // ads_content_bottom
            $wp_customize->add_setting(
                'ads_content_bottom',
                [
                    'default' => 'Ads Content Bottom Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_content_bottom',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 14,
                    'label'    => __('Ads Content Bottom', 'susantokun'),
                ]
            );

            // ads_content_paragraph
            $wp_customize->add_setting(
                'ads_content_paragraph',
                [
                    'default' => 'Ads Content Paragraph Here!',
                ]
            );
            $wp_customize->add_control(
                'ads_content_paragraph',
                [
                    'type'     => 'textarea',
                    'section'  => 'ads',
                    'priority' => 15,
                    'label'    => __('Ads Content Paragraph', 'susantokun'),
                ]
            );

            // comment_policy
            $wp_customize->add_section(
                'comment_policy',
                [
                    'title'       => __('Comment Policy', 'susantokun'),
                    'priority'    => 32,
                ]
            );
            // comment_policy_title
            $wp_customize->add_setting(
                'comment_policy_title',
                [
                    'default' => 'Kebijakan Berkomentar :',
                ]
            );
            $wp_customize->add_control(
                'comment_policy_title',
                [
                    'section'  => 'comment_policy',
                    'priority' => 10,
                    'label'    => __('Title', 'susantokun'),
                ]
            );
            // comment_policy_description
            $wp_customize->add_setting(
                'comment_policy_description',
                [
                    'default' => '<div class="text-xs"><div class="flex flex-col leading-normal"><span><span class="mr-1 font-bold">1.</span> Dilarang berkomentar yang mengandung SPAM, SARA, HOAX, PORNO.</span><span><span class="mr-1 font-bold">2.</span> Mohon sertakan informasi detail saat terjadi error (pesan error, sreenshoot, code, logs, dsb.).</span></div></div>',
                ]
            );
            $wp_customize->add_control(
                'comment_policy_description',
                [
                    'type'     => 'textarea',
                    'section'  => 'comment_policy',
                    'priority' => 20,
                    'label'    => __('Description', 'susantokun'),
                ]
            );

            // social_information
            $wp_customize->add_section(
                'social_information',
                [
                    'title'       => __('Social Information Link', 'susantokun'),
                    'priority'    => 33,
                ]
            );
            // social_information_youtube
            $wp_customize->add_setting(
                'social_information_youtube',
                [
                    'default'       => 'susantokun',
                ]
            );
            $wp_customize->add_control(
                'social_information_youtube',
                [
                    'section'     => 'social_information',
                    'priority'    => 10,
                    'label'       => __('Youtube:', 'susantokun'),
                    'description' => __('Write your ID or username.', 'susantokun'),
                ]
            );
            // social_information_instagram
            $wp_customize->add_setting(
                'social_information_instagram',
                [
                    'default' => 'susantokun',
                ]
            );
            $wp_customize->add_control(
                'social_information_instagram',
                [
                    'section'     => 'social_information',
                    'priority'    => 10,
                    'label'       => __('Instagram:', 'susantokun'),
                    'description' => __('Write your ID or username.', 'susantokun'),
                ]
            );
            // social_information_more
            $wp_customize->add_setting(
                'social_information_more',
                [
                    'default' => 'https://info.susantokun.com',
                ]
            );
            $wp_customize->add_control(
                'social_information_more',
                [
                    'section'     => 'social_information',
                    'priority'    => 10,
                    'label'       => __('More Link :', 'susantokun'),
                    'description' => __('Write your other link (http:// or https://).', 'susantokun'),
                ]
            );
        }

        public static function sanitize_checkbox($checked)
        {
            return ((isset($checked) && true === $checked) ? true : false);
        }
    }
    add_action('customize_register', ['Susantokun_Customize', 'register']);
}

// if (!function_exists('susantokun_customize_partial_blogname')) {
//     function susantokun_customize_partial_blogname()
//     {
//         bloginfo('name');
//     }
// }

// if (!function_exists('susantokun_customize_partial_blogdescription')) {
//     function susantokun_customize_partial_blogdescription()
//     {
//         bloginfo('description');
//     }
// }

// if (!function_exists('susantokun_customize_partial_site_logo')) {
//     function susantokun_customize_partial_site_logo()
//     {
//         susantokun_site_logo();
//     }
// }
