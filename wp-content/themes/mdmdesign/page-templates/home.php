<?php
/*
Template Name:Home Page
*/
get_header();
?>
<div class="page-wrapper has-banner">
	<section class="home-banner-section"><?php
		if(get_field('banner_image_video_url')) { ?>
			<video class="home-bg-video" autoplay muted playsinline loop>
				<source src="<?php echo get_field('banner_image_video_url'); ?>" type='video/mp4'></source>
				<source src="<?php echo get_field('banner_image_webm_video_url'); ?>" type='video/webm'></source>
				<source src="<?php echo get_field('banner_image_ogg_video_url'); ?>" type='video/ogg'></source>
			</video><?php
		} ?>
		<div class="container">
			<div class="banner-inner-wrapper">
				<div class="banner-content-wrapper">
					<?php echo get_field('banner_content');?><?php
					if(get_field('banner_video_url') && get_field('banner_video_label')) { ?>
						<div class="icon-link-wrapper">
							<a href="javascript:void(0)" title="Banner Video" class="video-link" data-link="banner-video-modal" data-src="<?php echo get_field('banner_video_url'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/public/images/video-banner-icon.svg" alt="video-banner-icon"><span class="video-label"><?php echo get_field('banner_video_label'); ?></span>
							</a>
						</div><?php
					} ?>
					<ul class="banner-links-wrapper"><?php
						$tax_terms = get_terms('projects-category', array('hide_empty' => false));
						foreach($tax_terms as $cat) { ?>
							<li>
								<a title="<?php echo $cat->name; ?>" href="<?php echo get_field('home_page_banner_category_link','projects-category_' . $cat->term_id); ?>">
									<?php echo $cat->name; ?>
								</a>
							</li><?php
						} ?>
					</ul>
				</div>
			</div>
		</div>
	</section><?php 
	
	if(have_rows('number_with_text_detail')) { ?>
		<section class="information-section counter-wrap">
			<div class="container">
				<div class="information-block"><?php
					while(have_rows('number_with_text_detail')) {
						the_row();
						if(get_sub_field('please_check_this_checkbox')){
							$addExtraClass = "percentage-structure";
						} else {
							$addExtraClass = "";
						} ?>
						<div class="information-inner <?php echo $addExtraClass; ?>">
							<span class="blue-gradiant-text counter-text"  data-aos="fade-up"><?php echo get_sub_field('numbers'); ?></span>
							<?php echo get_sub_field('content_under_numbers'); ?>
						</div><?php 
					} ?>
				</div>
			</div>
		</section><?php 
	}

	if(have_rows('logos_slider')) { ?>
		<section class="brand-logo-slider-section">
			<div class="container">
				<div class="brand-logo-slider"><?php
				while(have_rows('logos_slider')) {
					the_row();
					$logoImage = get_sub_field('logo_images'); ?>
					<div class="slide-item">
						<div class="slide-item-inner">
							<img src="<?php echo  $logoImage['url']; ?>" alt="<?php echo  $logoImage['alt']; ?>">
						</div>
					</div><?php
				} ?>
				</div>
			</div>
		</section><?php
	}

	include 'map-section.php';

	if(have_rows('person_details')) { ?>
		<section class="homepage-interview-section">
			<img src="<?php echo get_template_directory_uri(); ?>/public/images/home-interview-banner.jpg" alt="Interview Banner">
			<div class="container">
				<div class="interview-grid-outer"><?php 
					while(have_rows('person_details')) { 
					the_row();?>
						<div class="interview-grid-wrapper">
							<div class="interview-grid-inner">
								<a href="javascript:void(0)" title="YouTube Video" class="video-link" data-link="iframe-video" data-src="<?php echo get_sub_field('person_video_url'); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/public/images/video-icon.png" alt="video icon">
								</a>
								<div class="image-wrapper">
									<img src="<?php echo get_sub_field('person_image'); ?>" alt="<?php echo get_sub_field('person_name'); ?>">
								</div>
								<div class="content-wrapper">
									<span class="title"><?php echo get_sub_field('person_name'); ?></span>
									<span class="description"><?php echo get_sub_field('person_detail'); ?></span>
									<p><?php echo get_sub_field('person_designation'); ?></p>
								</div>
							</div>
						</div><?php 
					} ?>
				</div>
			</div>
		</section><?php 
	} 

	if(get_field('project_listing')) {  ?>
		<section class="custom-grid-section">
			<div class="container">
				<div class="custom-grid-wrapper"><?php
					$featured_posts = get_field('project_listing');
					foreach( $featured_posts as $featured_post ) { 
						$permalink = get_permalink( $featured_post->ID );
						$title = get_the_title( $featured_post->ID );
						$projectImagePath = get_field( 'home_page_project_images', $featured_post->ID ); 
						if(empty($projectImagePath)) { 
							if(has_post_thumbnail($featured_post->ID)) {
								$projectImage = get_the_post_thumbnail_url($featured_post->ID);
							} else {
								$projectImage = get_template_directory_uri().'/public/images/placeholder-image.png';
							}
						} else {
							$projectImage = $projectImagePath;
						} ?>
						<div class="grid-item">
							<div class="grid-item-inner">
								<a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>">
									<img src="<?php echo $projectImage; ?>" alt="grid-item">
								</a>
							</div>
						</div><?php 
					} ?>
				</div>
			</div>
		</section><?php 
	} ?>
</div>
<?php
get_footer();
?>

