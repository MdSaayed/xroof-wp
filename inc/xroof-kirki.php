<?php

// Xroof Panel
new \Kirki\Panel(
    'xroof_panel',
    [
        'priority' => 10,
        'title' => esc_html__('Xroof Options', 'xroof'),
        'description' => esc_html__('My Panel Description.', 'xroof'),
    ]
);

function xroof_header_info_section()
{
    new \Kirki\Section(
        'xroof_header_section',
        [
            'title' => esc_html__('Header Info', 'xroof'),
            'description' => esc_html__('My Section Description.', 'xroof'),
            'panel' => 'xroof_panel',
            'priority' => 10,
        ]
    );

    // Options
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_topbar_switch',
            'label' => esc_html__('Enable Header Topbar', 'xroof'),
            'description' => esc_html__('Toggle the header topbar on or off', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'xroof'),
                'off' => esc_html__('Disable', 'xroof'),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'header_right_switch',
            'label' => esc_html__('Enable Header Right', 'xroof'),
            'description' => esc_html__('Toggle the header right on or off', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'xroof'),
                'off' => esc_html__('Disable', 'xroof'),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_top_hours',
            'label' => esc_html__('Header Top Hours', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => esc_html__('Mon - Fri : 8.00 AM - 7.00 PM', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_top_address',
            'label' => esc_html__('Header Top Address', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => esc_html__('678 Washington DC, USA', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'address_top_url',
            'label' => esc_html__('Header Top Address URL', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label' => esc_html__('Header Button Text', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => esc_html__('Get Started', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_link',
            'label' => esc_html__('Header Button Link', 'xroof'),
            'section' => 'xroof_header_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 10,
        ]
    );
}
xroof_header_info_section();

function xroof_header_social_section()
{
    new \Kirki\Section(
        'xroof_header_social_section',
        [
            'title' => esc_html__('Header Social Links', 'xroof'),
            'description' => esc_html__('My Section Description.', 'xroof'),
            'panel' => 'xroof_panel',
            'priority' => 20,
        ]
    );

    // Options
    new \Kirki\Field\Text(
        [
            'settings' => 'header_fb_url',
            'label' => esc_html__('Facebook URL', 'xroof'),
            'section' => 'xroof_header_social_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_x_url',
            'label' => esc_html__('X (Twitter) URL', 'xroof'),
            'section' => 'xroof_header_social_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 11,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_instagram_url',
            'label' => esc_html__('Instagram URL', 'xroof'),
            'section' => 'xroof_header_social_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 12,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_dribbble_url',
            'label' => esc_html__('Dribbble URL', 'xroof'),
            'section' => 'xroof_header_social_section',
            'default' => esc_html__('#', 'xroof'),
            'priority' => 13,
        ]
    );
}
xroof_header_social_section();

function xroof_header_logo_section()
{
    new \Kirki\Section(
        'xroof_header_logo_section',
        [
            'title' => esc_html__('Header Logo', 'xroof'),
            'description' => esc_html__('Upload your site logo that will appear in the header.', 'xroof'),
            'panel' => 'xroof_panel',
            'priority' => 30,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'header_logo',
            'label' => esc_html__('Upload Header Logo', 'xroof'),
            'description' => esc_html__('Select or upload an image to use as your header logo.', 'xroof'),
            'section' => 'xroof_header_logo_section',
            'default' => get_template_directory_uri() . '/assets/img/global/logo.png',
            'input_attrs' => [
                'id' => 'header_logo',
            ],
        ]
    );
}
xroof_header_logo_section();

function xroof_offcanvas_section()
{
    new \Kirki\Section(
        'xroof_offcanvas_section',
        [
            'title' => esc_html__('Offcanvas Settings', 'xroof'),
            'description' => esc_html__('Manage the offcanvas logo, button text, and button URL here.', 'xroof'),
            'panel' => 'xroof_panel',
            'priority' => 40,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'xroof_offcanvas_logo',
            'label' => esc_html__('Offcanvas Logo', 'xroof'),
            'description' => esc_html__('Upload or select an image to display as the offcanvas logo.', 'xroof'),
            'section' => 'xroof_offcanvas_section',
            'default' => get_template_directory_uri() . '/assets/img/global/logo-black.png',
            'input_attrs' => [
                'id' => 'xroof_offcanvas_logo_id',
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'xroof_offcanvas_button_toggle',
            'label' => esc_html__('Show Offcanvas Button', 'xroof'),
            'description' => esc_html__('Enable or disable the offcanvas button display.', 'xroof'),
            'section' => 'xroof_offcanvas_section',
            'default' => 'on',
            'choices' => [
                'on' => esc_html__('Enable', 'xroof'),
                'off' => esc_html__('Disable', 'xroof'),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'xroof_offcanvas_button_text',
            'label' => esc_html__('Offcanvas Button Text', 'xroof'),
            'section' => 'xroof_offcanvas_section',
            'default' => esc_html__('Get Started', 'xroof'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'xroof_offcanvas_button_url',
            'label' => esc_html__('Offcanvas Button URL', 'xroof'),
            'section' => 'xroof_offcanvas_section',
            'default' => '#',
            'priority' => 10,
        ]
    );
}
xroof_offcanvas_section();

function xroof_footer_sections()
{
    new \Kirki\Section(
        'xroof_footer_section',
        [
            'title' => esc_html__('Footer', 'xroof'),
            'panel' => 'xroof_panel',
            'priority' => 999,
            'description' => esc_html__('All Footer settings', 'xroof'),
        ]
    );

    // Footer 1 Text
    new \Kirki\Field\Text(
        [
            'settings' => 'footer1_copyright_text1',
            'label' => esc_html__('Footer 1 (Home 1) Copyright Text', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => esc_html__('XRooF Theme 2025. All Rights Reserved (Home 1).', 'xroof'),
            'priority' => 10,
        ]
    );

    // Footer 2 Text
    new \Kirki\Field\Text(
        [
            'settings' => 'footer2_copyright_text2',
            'label' => esc_html__('Footer 2 (Home 2) Copyright Text', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => esc_html__('XRooF Theme 2025. All Rights Reserved (Home 2).', 'xroof'),
            'priority' => 20,
        ]
    );

    // Footer 3 Text
    new \Kirki\Field\Text(
        [
            'settings' => 'footer3_copyright_text3',
            'label' => esc_html__('Footer 3 (Home 3) Copyright Text', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => esc_html__('XRooF Theme 2025. All Rights Reserved (Home 3).', 'xroof'),
            'priority' => 30,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_privacy_text',
            'label' => esc_html__('Privacy Policy Text', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => 'Privacy Policy',
            'priority' => 40,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_privacy_url',
            'label' => esc_html__('Privacy Policy URL', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => '#',
            'priority' => 41,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_terms_text',
            'label' => esc_html__('Terms & Conditions Text', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => 'Terms & Conditions',
            'priority' => 42,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_terms_url',
            'label' => esc_html__('Terms & Conditions URL', 'xroof'),
            'section' => 'xroof_footer_section',
            'default' => '#',
            'priority' => 43,
        ]
    );
}
xroof_footer_sections();


