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
            'priority' => 160,
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
            'priority' => 160,
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
            'priority' => 160,
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
