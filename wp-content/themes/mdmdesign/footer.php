<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mdmdesign
 */
?>
</div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-top-wrapper">
				<div class="footer-top-left">
					<div class="logo-block">
						<?php 
						if(has_custom_logo()) {
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
							<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $image[0]; ?>" alt="logo"></a><?php 
						} else { ?>
							<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/public/images/mdm-logo.png" alt="logo"></a>
						<?php } ?>
					</div>
					<div class="nav-menu"><?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'primary-menu',
							)
						); ?>
					</div>
				</div><?php 
				if(get_field('address_details_line_1','option') || get_field('contact_number','option') || get_field('address_details_line_2','option')) { ?>
					<div class="footer-top-right">
						<div><p><?php echo get_field('address_details_line_1','option').' '.get_field('address_details_line_2','option'); ?></p></div>
						<a href="tel:<?php echo str_replace(" ", "", get_field('contact_number','option')); ?>" title="Call us"><?php echo get_field('contact_number','option'); ?></a>
						<a title = "Mail us" href="mailto:<?php echo get_field('email_adress','option'); ?>" class="mail-link"><?php echo get_field('email_adress','option'); ?></a>
					</div><?php 
				} ?>
			</div>
			<div class="footer-bottom-wrapper">
				<div class="footer-bottom-left">
					<p>© 1991–<?php echo date('Y')." "; ?><?php echo get_field('copyright_text','option'); ?></p>
				</div><?php
				if(have_rows('social_details','option')) { ?>
				<div class="footer-social-media">
					<ul><?php 
					while(have_rows('social_details','option')) { 
						the_row();
						$socialIcon = get_sub_field('social_icon','option');
						$socialURL = get_sub_field('social_url','option'); ?>
						<li><a target="_blank" href="<?php echo $socialURL; ?>" title="<?php echo $socialIcon['title']; ?>"><img src="<?php echo $socialIcon['url']; ?>" alt="<?php echo $socialIcon['alt']; ?>"></a></li><?php
					} ?>
					</ul>
				</div><?php 
				} ?>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<div class="custom-modal" data-target="banner-video-modal">
    <div class="modal-backdrop"></div>
    <div class="modal-content-wrapper">
        <div class="modal-inner-content">
            <div class="modal-header">
                <span class="modal-close" title="close"><img src="<?php echo get_template_directory_uri(); ?>/public/images/close-button.svg" alt="Close"></span>
            </div>
            <div class="modal-body">
                <iframe src="" id="video" class="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="custom-modal" data-target="iframe-video">
    <div class="modal-backdrop"></div>
    <div class="modal-content-wrapper">
        <div class="modal-inner-content">
            <div class="modal-header">
                <span class="modal-close" title="close"><img src="<?php echo get_template_directory_uri(); ?>/public/images/close-button.svg" alt="Close"></span>
            </div>
            <div class="modal-body">
                <iframe src="" id="video" class="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

</body>
</html>
