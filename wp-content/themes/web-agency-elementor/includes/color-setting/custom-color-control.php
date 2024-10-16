<?php

  $web_agency_elementor_theme_custom_setting_css = '';

	// Global Color
	$web_agency_elementor_theme_color = get_theme_mod('web_agency_elementor_theme_color', '#ffb424');
	$web_agency_elementor_theme_second_color = get_theme_mod('web_agency_elementor_theme_second_color', '#ff8751');

	$web_agency_elementor_theme_custom_setting_css .=':root {';
		$web_agency_elementor_theme_custom_setting_css .='--primary-color: '.esc_attr($web_agency_elementor_theme_color ).'!important;';
		$web_agency_elementor_theme_custom_setting_css .='--secondary-color: '.esc_attr($web_agency_elementor_theme_second_color ).'!important;';
	$web_agency_elementor_theme_custom_setting_css .='}';