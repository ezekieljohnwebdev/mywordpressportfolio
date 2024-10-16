<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'digital_marketing_elementor_logo_resizer',
        'label'       => __( 'Logo Size', 'digital-marketing-elementor' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 200,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_marketing_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'digital-marketing-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-marketing-elementor' ),
			'off' => esc_html__( 'Disable', 'digital-marketing-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_marketing_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'digital-marketing-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-marketing-elementor' ),
			'off' => esc_html__( 'Disable', 'digital-marketing-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'digital_marketing_elementor_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'none',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'digital-marketing-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'digital-marketing-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'digital-marketing-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'digital-marketing-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'digital-marketing-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'digital-marketing-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'digital-marketing-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/marketing-agency-wordpress-theme', 'digital-marketing-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'digital-marketing-elementor' ) .'</a></div>',
	) );

	// Theme color

	Kirki::add_section( 'digital_marketing_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'digital-marketing-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_theme_color',
		'label'       => __( 'Theme color', 'digital-marketing-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#ff3c34',
	) );

	// TYPOGRAPHY SETTINGS
	
	Kirki::add_panel( 'digital_marketing_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'digital-marketing-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'digital_marketing_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h1_typography_heading',
		'section'     => 'digital_marketing_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h1_typography_font',
		'section'   =>  'digital_marketing_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'digital_marketing_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h2_typography_heading',
		'section'     => 'digital_marketing_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h2_typography_font',
		'section'   =>  'digital_marketing_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'digital_marketing_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h3_typography_heading',
		'section'     => 'digital_marketing_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h3_typography_font',
		'section'   =>  'digital_marketing_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'digital_marketing_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h4_typography_heading',
		'section'     => 'digital_marketing_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h4_typography_font',
		'section'   =>  'digital_marketing_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'digital_marketing_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h5_typography_heading',
		'section'     => 'digital_marketing_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h5_typography_font',
		'section'   =>  'digital_marketing_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'digital_marketing_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_h6_typography_heading',
		'section'     => 'digital_marketing_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_h6_typography_font',
		'section'   =>  'digital_marketing_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'digital_marketing_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_body_typography_heading',
		'section'     => 'digital_marketing_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'digital_marketing_elementor_body_typography_font',
		'section'   =>  'digital_marketing_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Josefin Sans',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );


	// Theme Options Panel
	Kirki::add_panel( 'digital_marketing_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'digital-marketing-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'digital_marketing_elementor_section_header',array(
		'title' => esc_html__( 'Header Settings', 'digital-marketing-elementor' ),
		'description'    => esc_html__( 'Here you can add header information.', 'digital-marketing-elementor' ),
		'panel' => 'digital_marketing_elementor_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'digital-marketing-elementor' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'digital-marketing-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      	=> 'header',
		'settings'    => 'digital_marketing_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => 0,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-marketing-elementor' ),
			'off' => esc_html__( 'Disable', 'digital-marketing-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'digital_marketing_elementor_menu_size_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'digital-marketing-elementor' ),
		'type'        => 'text',
		'tab'      => 'menu',
		'section'     => 'digital_marketing_elementor_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'digital_marketing_elementor_menu_text_transform_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'digital_marketing_elementor_menu_text_transform',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => 'Uppercase',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'digital-marketing-elementor' ),
			'uppercase' => esc_html__( 'Uppercase', 'digital-marketing-elementor' ),
			'lowercase' => esc_html__( 'Lowercase', 'digital-marketing-elementor' ),
			'capitalize' => esc_html__( 'Capitalize', 'digital-marketing-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_menu_color',
		'label'       => __( 'Menu Color', 'digital-marketing-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'digital_marketing_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'digital-marketing-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'digital_marketing_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#ff3c34',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_submenu_color',
		'label'       => __( 'Submenu Color', 'digital-marketing-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'digital_marketing_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'digital-marketing-elementor' ),
		'type'        => 'color',
		'tab'      => 'menu',
		'section'     => 'digital_marketing_elementor_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_advertisement_text_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement Text', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'digital_marketing_elementor_header_advertisement_text',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_enable_timing_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Timing', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'digital_marketing_elementor_header_timing',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_enable_email_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Email ID', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_email',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Text', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_email_text',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_enable_location_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Location Address', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_location',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Text', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_location_text',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_header_phone_number_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Phone Number', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_phone_number',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'digital_marketing_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Text', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_phone_number_text',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_enable_button_heading',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Text', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_button_text',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button URL', 'digital-marketing-elementor' ),
		'settings' => 'digital_marketing_elementor_header_button_url',
		'section'  => 'digital_marketing_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_enable_socail_link',
		'section'     => 'digital_marketing_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'tab'      => 'header',
		'section'     => 'digital_marketing_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'digital-marketing-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'digital-marketing-elementor' ),
		'settings'     => 'digital_marketing_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'digital-marketing-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'digital-marketing-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'digital-marketing-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'digital-marketing-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'digital-marketing-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'digital_marketing_elementor_logo_settings_premium_features_header',
		'section'     => 'digital_marketing_elementor_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'digital-marketing-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'digital-marketing-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'digital-marketing-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/marketing-agency-wordpress-theme', 'digital-marketing-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'digital-marketing-elementor' ) .'</a></div>',
	) );

	//ADDITIONAL SETTINGS

	Kirki::add_section( 'digital_marketing_elementor_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'digital-marketing-elementor' ),
		'panel' => 'digital_marketing_elementor_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'digital-marketing-elementor' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'digital-marketing-elementor' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_marketing_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'digital_marketing_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'digital_marketing_elementor_single_page_layout_heading',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'digital_marketing_elementor_single_page_layout',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'digital-marketing-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'digital-marketing-elementor' ),
			'One Column' => esc_html__( 'One Column', 'digital-marketing-elementor' ),
		],
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_background_attachment_heading',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_background_attachment',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'digital-marketing-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'digital-marketing-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_image_height_heading',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_header_image_height',
		'label'       => __( 'Image Height', 'digital-marketing-elementor' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'digital-marketing-elementor' ),
		'type'        => 'text',
		'tab'      => 'header-image',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'digital_marketing_elementor_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_overlay_heading',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'digital-marketing-elementor' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'digital_marketing_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#ffc5c3',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'digital_marketing_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );
	
    // POST SECTION

	Kirki::add_section( 'digital_marketing_elementor_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'digital-marketing-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'digital-marketing-elementor' ),
		'panel' => 'digital_marketing_elementor_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'digital-marketing-elementor' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'digital-marketing-elementor' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_post_layout_heading',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_post_layout',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'digital-marketing-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'digital-marketing-elementor' ),
			'One Column' => esc_html__( 'One Column', 'digital-marketing-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'digital-marketing-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'digital-marketing-elementor' ),
		],
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_length_setting_heading',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'digital_marketing_elementor_length_setting',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_single_post_tag',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_single_post_category',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'digital_marketing_elementor_single_post_radius',
		'section'     => 'digital_marketing_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'digital-marketing-elementor' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'digital_marketing_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'digital_marketing_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'digital-marketing-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'digital-marketing-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_marketing_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_shop_page_layout',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'digital-marketing-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'digital-marketing-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'digital_marketing_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_products_per_row',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_products_per_page',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_marketing_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'digital-marketing-elementor' ),
		'settings'    => 'digital_marketing_elementor_single_product_sidebar_layout',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'digital-marketing-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'digital-marketing-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'digital_marketing_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_products_button_border_radius_heading',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'digital_marketing_elementor_products_button_border_radius',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_sale_badge_position_heading',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'digital_marketing_elementor_sale_badge_position',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'digital-marketing-elementor' ),
			'left' => esc_html__( 'Left', 'digital-marketing-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_products_sale_font_size_heading',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'digital_marketing_elementor_products_sale_font_size',
		'section'     => 'digital_marketing_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );

	// No Results Page Settings

	Kirki::add_section( 'digital_marketing_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_page_not_found_title_heading',
		'section'     => 'digital_marketing_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_marketing_elementor_page_not_found_title',
		'section'  => 'digital_marketing_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'digital-marketing-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_page_not_found_text_heading',
		'section'     => 'digital_marketing_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_marketing_elementor_page_not_found_text',
		'section'  => 'digital_marketing_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'digital-marketing-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_no_results_title_heading',
		'section'     => 'digital_marketing_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_marketing_elementor_no_results_title',
		'section'  => 'digital_marketing_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'digital-marketing-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_no_results_content_heading',
		'section'     => 'digital_marketing_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_marketing_elementor_no_results_content',
		'section'  => 'digital_marketing_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'digital-marketing-elementor'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'digital_marketing_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'digital-marketing-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'digital-marketing-elementor' ),
        'panel'    => 'digital_marketing_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_text_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'digital_marketing_elementor_footer_text',
		'section'  => 'digital_marketing_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_enable_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'digital_marketing_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'digital-marketing-elementor' ),
			'off' => esc_html__( 'Disable', 'digital-marketing-elementor' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_background_widget_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'digital_marketing_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'digital_marketing_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer__widget_alignment_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'digital_marketing_elementor_footer__widget_alignment',
		'section'     => 'digital_marketing_elementor_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'digital-marketing-elementor' ),
			'right' => esc_html__( 'right', 'digital-marketing-elementor' ),
			'left' => esc_html__( 'left', 'digital-marketing-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_copright_color_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_copright_text_color_heading',
		'section'     => 'digital_marketing_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_logo_settings_premium_features_footer',
		'section'     => 'digital_marketing_elementor_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'digital-marketing-elementor' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'digital-marketing-elementor' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'digital-marketing-elementor' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'digital-marketing-elementor' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/marketing-agency-wordpress-theme', 'digital-marketing-elementor' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'digital-marketing-elementor' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'digital_marketing_elementor_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'digital-marketing-elementor' ),
		'panel'    => 'digital_marketing_elementor_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_footer_social_icon_hide_heading',
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'digital_marketing_elementor_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'digital_marketing_elementor_enable_footer_socail_link_align_heading',
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'digital-marketing-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'digital_marketing_elementor_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'digital-marketing-elementor' ),
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'digital-marketing-elementor' ),
			'right' => esc_html__( 'right', 'digital-marketing-elementor' ),
			'left' => esc_html__( 'left', 'digital-marketing-elementor' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'digital_marketing_elementor_enable_footer_socail_link',
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'digital-marketing-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'digital_marketing_elementor_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'digital-marketing-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'digital-marketing-elementor' ),
		'settings'     => 'digital_marketing_elementor_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'digital-marketing-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'digital-marketing-elementor' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'digital-marketing-elementor' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'digital-marketing-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'digital-marketing-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
}
