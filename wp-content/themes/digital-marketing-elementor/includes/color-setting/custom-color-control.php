<?php

  $digital_marketing_elementor_theme_custom_setting_css = '';

	// Global Color
	$digital_marketing_elementor_theme_color = get_theme_mod('digital_marketing_elementor_theme_color', '#ff3c34');

	$digital_marketing_elementor_theme_custom_setting_css .=':root {';
		$digital_marketing_elementor_theme_custom_setting_css .='--primary-color: '.esc_attr($digital_marketing_elementor_theme_color ).'!important;';
	$digital_marketing_elementor_theme_custom_setting_css .='}';