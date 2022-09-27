<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mdmdesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-wrapper">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="header-wrapper">
					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<div class="nav-inner-wrapper">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
							<div class="menu-address-wrapper"><?php 
								if(get_field('address_details_line_1','option') || get_field('contact_number','option') || get_field('address_details_line_2','option')) { ?>
									<address>
										<?php echo get_field('address_details_line_1','option').'</br>'.get_field('address_details_line_2','option'); ?>
									</address>
									<span class="contact-number"><a href="tel:<?php echo str_replace(" ", "", get_field('contact_number','option')); ?>" title="Call us"><?php echo get_field('contact_number','option'); ?></a></span><?php
								} 
								if(get_field('email_adress','option')) { ?>
									<span class="mail-detail"><a href="mailto:<?php echo get_field('email_adress','option'); ?>" title="Mail us"><?php echo get_field('email_adress','option'); ?></a></span><?php
								} 
								if(have_rows('hedaer_social_details','option')) { ?>
									<ul  class="social-links-wrapper"><?php 
										while(have_rows('hedaer_social_details','option')) { 
										the_row();
										$headersocialIcon = get_sub_field('header_social_icon','option');
										$headersocialURL = get_sub_field('header_social_url','option'); ?>
										<li><a target="_blank" href="<?php echo $headersocialURL; ?>" title="<?php echo $headersocialIcon['title']; ?>"><img src="<?php echo $headersocialIcon['url']; ?>" alt="<?php echo $headersocialIcon['alt']; ?>"></a></li><?php
									} ?>
									</ul><?php 
								} ?>
							</div>
						</div>
					</nav><!-- #site-navigation --><?php
					if(get_field('contact_link','option') && get_field('contact_label','option')) { 
						$current_url = home_url(add_query_arg(array(), $wp->request)).'/';
						if($current_url == get_field('contact_link','option')) { 
							$activeContactLink = "active"; 
						} else { 
							$activeContactLink = ""; 
						} ?>
						<ul class="contact-wrapper">
							<li class="<?php echo $activeContactLink; ?>"><a href="<?php echo get_field('contact_link','option'); ?>" title="<?php echo get_field('contact_label','option'); ?>"><?php echo get_field('contact_label','option'); ?></a></li>
						</ul><?php 
					} ?>
					<div class="hamburger">
						<span class="bar1"></span>
						<span class="bar2"></span>
					</div>
				</div>			
			</div>		
		</header><!-- #masthead -->
<script> 
	var sitepath = '<?php echo get_template_directory_uri(); ?>';
</script>
