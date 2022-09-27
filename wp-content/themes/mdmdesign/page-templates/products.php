<?php
/*
Template Name:Products Page
*/
get_header();
?>
<div class="page-wrapper has-banner">
    <section class="product-page-banner"><?php
        if(get_field('banner_image')) { ?>
            <img src="<?php echo get_field('banner_image'); ?>" alt="product-banner-image" class="product-bg-img"><?php 
        } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/product-banner.png" alt="product-banner-image" class="product-bg-img"><?php 
        } 
        if(get_field('banner_content')) { ?>
        <div class="container"><?php 
            echo get_field('banner_content'); ?>
        </div><?php 
        } ?>
    </section>
    <section class="product-description-section">
        <div class="container">
            <div class="custom-tabbing-wrapper">
                <div class="tab-heading">
                    <ul><?php
						$tax_terms = get_terms('projects-category', array('hide_empty' => false));
                        $activeClassCount = 1;
						foreach($tax_terms as $cat) { 
                           
                            if(isset($_GET['category']) || !empty($_GET['category'])) {
                                if($_GET['category'] == $cat->slug) {
                                    $activeClass = "active"; 
                                } else {
                                    $activeClass = ""; 
                                } 
                            } else {
                                if($activeClassCount == 1) {
                                    $activeClass = "active"; 
                                } else { 
                                    $activeClass = "";
                                }
                            }
                            ?>
							<li class="<?php echo $activeClass; ?>">
								<a title="<?php echo $cat->name; ?>" href="avascript:void(0);" data-link="<?php echo $cat->slug; ?>">
									<?php echo $cat->name; ?>
								</a>
							</li><?php $activeClassCount++;
						} ?>
					</ul>
                </div>
                <div class="tab-content"><?php 
                    $activeTabClassCount = 1;
                    foreach($tax_terms as $category) { 
                        if(isset($_GET['category']) || !empty($_GET['category'])) {
                            if($_GET['category'] == $category->slug) {
                                $activeTabClass = "active"; 
                            } else {
                                $activeTabClass = "";
                            } 
                        } else {
                            if($activeTabClassCount == 1) {
                                $activeTabClass = "active"; 
                            } else { 
                                $activeTabClass = "";
                            }
                        }
                        $catID = 'projects-category_' . $category->term_id; ?>
                        <div class="tab-content-inner <?php echo $activeTabClass; ?>" data-target="<?php echo $category->slug; ?>">
                            <div class="project-framework">
                                <div class="title-wrapper"><?php
                                if(get_field('framework_section_heading',$catID)) { ?> 
                                    <h2><?php echo get_field('framework_section_heading',$catID); ?></h2><?php 
                                } 
                                if(get_field('framework_section_content',$catID)) { ?>
                                    <p><?php echo get_field('framework_section_content',$catID); ?></p><?php
                                } ?>
                                </div><?php
                                $frameworkDeskImage = get_field('framework_image',$catID);
                                $frameworkMobImage = get_field('framework_mobile_image',$catID);
                                if(empty($frameworkMobImage)) {
                                    $frameworkMobImage = $frameworkDeskImage;
                                }
                                
                                if(get_field('framework_image',$catID) || et_field('framework_mobile_image',$catID)) { ?>
                                    <div class="product-graph-block">
                                        <div class="product-graph-image desktop-view"><img src="<?php echo $frameworkDeskImage; ?>" alt="product-framework"></div>
                                        <div class="product-graph-image mobile-view"><img src="<?php echo $frameworkMobImage; ?>" alt="product-framework"></div>
                                    </div><?php
                                } ?>
                                <div class="product-description"><?php
                                    if(have_rows('products_details',$catID)) { ?>
                                        <div class="product-description-item-left"><?php
                                            if(get_field('products_section_heading',$catID)) { ?> 
                                                <h3><?php echo get_field('products_section_heading',$catID); ?></h3><?php 
                                            } 
                                            while(have_rows('products_details',$catID)) { 
                                                the_row(); 
                                                if(get_sub_field('products_heading',$catID)) { ?> 
                                                    <h4><?php echo get_sub_field('products_heading',$catID); ?></h4><?php 
                                                } 
                                                if(get_sub_field('products_content',$catID)) { ?> 
                                                    <p><?php echo get_sub_field('products_content',$catID); ?></p><?php 
                                                } 
                                            } ?>
                                        </div><?php
                                    } 

                                    if(have_rows('products_data_listing',$catID)) { ?>
                                        <div class="product-description-item-right"><?php
                                            if(get_field('products_data_listing_heading',$catID)) { ?> 
                                                <h3><?php echo get_field('products_data_listing_heading',$catID); ?></h3><?php 
                                            }  ?>
                                            <div class="product-description-item"><?php
                                                $count = 1;
                                                while(have_rows('products_data_listing',$catID)) { 
                                                    the_row();
                                                    if($count%2 != 0) { ?>
                                                        <div class="product-list-wrap"><?php 
                                                            if(get_sub_field('products_data_heading',$catID)) { ?> 
                                                                <h4><?php echo get_sub_field('products_data_heading',$catID); ?></h4><?php 
                                                            } 
                                                            if(have_rows('products_data_list',$catID)) { ?>  
                                                                <div class="product-list-content">
                                                                    <ul><?php
                                                                        while(have_rows('products_data_list',$catID)) { 
                                                                            the_row(); ?>
                                                                            <li><?php echo get_sub_field('product_data_list');?></li><?php
                                                                        } ?>
                                                                    </ul>
                                                                </div><?php 
                                                            } ?>
                                                        </div>
                                                    <?php 
                                                    } $count++;
                                                } ?>
                                            </div>
                                            <div class="product-description-item"><?php
                                                $countOdd = 1;
                                                while(have_rows('products_data_listing',$catID)) { 
                                                    the_row();
                                                    if($countOdd%2 == 0) { ?>
                                                        <div class="product-list-wrap"><?php 
                                                            if(get_sub_field('products_data_heading',$catID)) { ?> 
                                                                <h4><?php echo get_sub_field('products_data_heading',$catID); ?></h4><?php 
                                                            } 
                                                            if(have_rows('products_data_list',$catID)) { ?>  
                                                                <div class="product-list-content">
                                                                    <ul><?php
                                                                        while(have_rows('products_data_list',$catID)) { 
                                                                            the_row(); ?>
                                                                            <li><?php echo get_sub_field('product_data_list');?></li><?php
                                                                        } ?>
                                                                    </ul>
                                                                </div><?php 
                                                            } ?>
                                                        </div>
                                                    <?php 
                                                    } $countOdd++;
                                                } ?>
                                            </div>
                                        </div><?php
                                    } ?>
                                </div>
                            </div>
                            <div class="our-partners"><?php
                                if(get_field('partner_section_heading',$catID) || get_field('partners_content',$catID)) { ?>
                                    <div class="title-wrapper"><?php
                                        if(get_field('partner_section_heading',$catID)) { ?> 
                                            <h2><?php echo get_field('partner_section_heading',$catID); ?></h2><?php 
                                        } 
                                        if(get_field('partners_content',$catID)) { ?> 
                                            <p><?php echo get_field('partners_content',$catID); ?></p><?php 
                                        } ?>
                                    </div><?php 
                                } 

                                if(have_rows('partners_logos',$catID)) { ?>
                                    <ul><?php
                                        while(have_rows('partners_logos',$catID)) { 
                                            the_row();
                                            $partnerImage = get_sub_field('partner_logo_image',$catID);?>
                                            <li><img src="<?php echo $partnerImage['url']; ?>" alt="<?php echo $partnerImage['alt']; ?>"></li><?php 
                                        } ?>
                                    </ul><?php
                                } ?>
                                
                            </div>
                            <div class="related-project">
                                <h2>PROJECTS</h2>
                                <div class="custom-grid-section">
                                    <div class="custom-grid-wrapper"><?php
                                        $args = array(
                                            'posts_per_page' => 3,
                                            'order'=>'desc',
                                            'post_type' => 'project',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'projects-category',
                                                    'field' => 'term_id',
                                                    'terms' => $category->term_id
                                                )
                                            )
                                        );
                                        $my_query = new WP_Query( $args );
                                        if($my_query->have_posts()) {
                                            while ($my_query->have_posts()) { 
                                                $my_query->the_post();
                                                $projectImagePath = get_field( 'home_page_project_images', $featured_post->ID ); 
                                                $projectImage =  get_the_post_thumbnail_url(); 
                                                if(has_post_thumbnail()) { 
                                                    $imageOfProject = $projectImage;
                                                } else {
                                                    if(!empty($projectImagePath)) {
                                                        $imageOfProject = $projectImagePath;
                                                    } else {
                                                        $imageOfProject = get_template_directory_uri().'/public/images/placeholder-image.png';
                                                    }
                                                } ?>
                                                <div class="grid-item">
                                                    <div class="grid-item-inner">
                                                        <a href="<?php echo get_the_permalink(); ?>">
                                                            <img src="<?php echo $imageOfProject; ?>" alt="grid-item">
                                                        </a>
                                                    </div>
                                                </div><?php 
                                            }
                                        } ?>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="<?php echo get_field('product_page_related_project_view_all_link', $catID); ?>" class="arrow-link">VIEW ALL <?php echo $category->name; ?> PROJECTS <em><img src="<?php echo get_template_directory_uri(); ?>/public/images/white-arrow.svg" alt="white-arrow"></em></a>
                                </div>
                            </div>
                        </div><?php $activeTabClassCount++ ;
                    } ?>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="custom-modal framework-popup" data-target="framework-popup">
    <div class="modal-backdrop"></div>
    <div class="modal-content-wrapper">
        <div class="modal-inner-content">
            <div class="modal-header">
                <span class="modal-close" title="close"><img src="<?php echo get_template_directory_uri(); ?>/public/images/close-button.svg" alt="Close"></span>
            </div>
            <div class="modal-body">
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/product-branding-digital.png" alt="framework-img">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

