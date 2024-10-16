<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital Marketing Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('digital_marketing_elementor_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
	    <div class="diamond">
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
		</div>
	</div>
<?php } ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'digital-marketing-elementor' ); ?></a>

	<div class="upperheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7">
					<?php if ( get_theme_mod('digital_marketing_elementor_header_advertisement_text') ) : ?>
						<p class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_advertisement_text' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 text-md-end text-center">
					<?php if ( get_theme_mod('digital_marketing_elementor_header_timing') ) : ?>
						<p class="mb-0"><i class="fas fa-clock me-2"></i><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_timing' ) ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="topheader py-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 align-self-center">
					<div class="logo text-center text-lg-start mb-3 mb-lg-0">
			    		<div class="logo-image">
			    			<?php  the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content">
							<?php
								if ( get_theme_mod('digital_marketing_elementor_display_header_title', true) == true ) :
									echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
									echo esc_attr(get_bloginfo('name'));
									echo '</a>';
								endif;
								if ( get_theme_mod('digital_marketing_elementor_display_header_text', false) == true ) :
									echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
								endif;
							?>
						</div>
					</div>
			   	</div>
			   	<div class="col-lg-8 col-md-12 col-sm-12 align-self-center">
			   		<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
							<?php if ( get_theme_mod('digital_marketing_elementor_header_email') || get_theme_mod('digital_marketing_elementor_header_email_text') ) : ?>
								<div class="row header-icon">
									<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
										<i class="fas fa-paper-plane"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_email' ) ); ?></h6>
										<p class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_email_text' ) ); ?></p>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
							<?php if ( get_theme_mod('digital_marketing_elementor_header_location') || get_theme_mod('digital_marketing_elementor_header_location_text') ) : ?>
								<div class="row header-icon">
									<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_location' ) ); ?></h6>
										<p class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_location_text' ) ); ?></p>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
							<?php if ( get_theme_mod('digital_marketing_elementor_header_phone_number') || get_theme_mod('digital_marketing_elementor_header_phone_number_text') ) : ?>
								<div class="row header-icon">
									<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
										<h6 class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_phone_number' ) ); ?></h6>
										<p class="mb-0"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_phone_number_text' ) ); ?></p>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="site-navigation" class="header text-center text-md-start <?php if( get_theme_mod( 'digital_marketing_elementor_sticky_header',false) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?> ">
	<div class="container">
		<div class="center-header-box">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-6 align-self-center">
					<button class="menu-toggle my-3 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'digital-marketing-elementor' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
					<?php $digital_marketing_elementor_settings = get_theme_mod( 'digital_marketing_elementor_social_links_settings' ); ?>
					<div class="social-links text-center text-md-end">
						<?php if ( is_array($digital_marketing_elementor_settings) || is_object($digital_marketing_elementor_settings) ){ ?>
					    	<?php foreach( $digital_marketing_elementor_settings as $digital_marketing_elementor_setting ) { ?>
						        <a href="<?php echo esc_url( $digital_marketing_elementor_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $digital_marketing_elementor_setting['link_text'] ); ?> me-2"></i>
						        </a>
					    	<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 align-self-center head-btn text-center text-md-end">
					<?php if ( get_theme_mod('digital_marketing_elementor_header_button_text') ) : ?>
						<a href="<?php echo esc_url( get_theme_mod('digital_marketing_elementor_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('digital_marketing_elementor_header_button_text' ) ); ?></a>
					<?php endif; ?>
				</div>
		   	</div>
		</div>
	</div>
</header>
