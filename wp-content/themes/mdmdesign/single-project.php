<?php
get_header();
?>

<div class="page-wrapper">
    <section class="project-detail-page">
        <div class="container">
            <div class="project-category-block gradient-btn-listing">
                <ul><?php
                    $terms = get_the_terms( $post->ID, 'projects-category' );    
                    $termSlug = "";
                    if ( !empty( $terms ) ){
                        $term = array_shift( $terms );
                        $termSlug = $term->slug;
                    }
                    $tax_terms = get_terms('projects-category', array('hide_empty' => false));
                    foreach($tax_terms as $cat) { 
                        if($cat->slug == $termSlug) { 
                            $class="class=active";
                        } else { 
                            $class="";
                        } ?>
                        <li <?php echo $class;?>>
                            <a title="<?php echo $cat->name; ?>" href="<?php echo get_field('product_page_related_project_view_all_link','projects-category_' . $cat->term_id); ?>">
                                <?php echo $cat->name; ?>
                            </a>
                        </li><?php
                    } ?>
                </ul>   
            </div>
            <div class="project-info-block">
                <div class="project-name">
                    <h1><?php echo get_the_title(); ?></h1>
                    <?php if(get_field('asx_content')) { ?><span><?php echo get_field('asx_content'); ?></span><?php } ?>
                </div>
                <div class="project-detail-block">
                    <div class="project-detail-title">
                    Overview
                    </div>
                    <div class="project-detail-content"><?php 
                        if(get_field('partnership_since_year')) { ?>
                        <div class="content-item partnership-col">
                            <h2>Our Partnership</h2>
                            <p><?php echo get_field('partnership_since_year'); ?></p>
                        </div><?php 
                        } 

                        if(get_field('project_scope')) { ?>
                        <div class="content-item scope-col">
                            <h2>Project Scope</h2>
                            <p><?php echo get_field('project_scope'); ?></p>
                        </div><?php 
                        }

                        if(get_field('fast_fact')) { ?>
                        <div class="content-item fact-col">
                            <h2>Fast Fact</h2>
                            <p><?php echo get_field('fast_fact'); ?></p>
                        </div><?php 
                        } ?>

                    </div>
                </div>
            </div>
            <?php
            function mdmdesignGetVimeoId($url)
            {
                if (preg_match('#(?:https?://)?(?:www.)?(?:player.)?vimeo.com/(?:[a-z]*/)*([0-9]{6,11})[?]?.*#', $url, $m)) {
                    return $m[1];
                }
                return false;
            }
            function mdmdesignGetVimeoThumb($id)
            {
                $arr_vimeo = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$id.php"));
                return $arr_vimeo[0]['thumbnail_large']; // returns small thumbnail
                
            }
            
            if(have_rows('project_content')) { ?>
                <div class="project-snap-listing"><?php
                    while(have_rows('project_content')) { 
                        the_row();
                        $optionValue = get_sub_field('select_image_or_video_option');
                        if($optionValue == "image") { ?>
                            <div class="img-block">
                                <img src="<?php echo get_sub_field('project_image'); ?>" alt="grid-item">
                            </div><?php 
                        } else {
                            $video_id = mdmdesignGetVimeoId(get_sub_field('project_video')); 
                            $videoPosterImagePath = get_sub_field('project_video_poster_image');    
                            if(empty( $videoPosterImagePath))  {
                                $video_thumb = mdmdesignGetVimeoThumb($video_id);
                            } else {
                                $video_thumb = $videoPosterImagePath;
                            }
                            ?>
                            <div class="img-block">
                                <a href="javascript:void(0)" title="" class="video-link" data-link="project-video-modal" data-src="<?php echo get_sub_field('project_video'); ?>">
                                    <img src="<?php echo $video_thumb; ?>" alt="grid-item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/video-icon.png" alt="video icon" class="video-icon">
                                </a>
                            </div><?php 
                        }
                    } ?>
                </div><?php
            } else { ?>
                <div class="project-snap-listing">
                    <div class="img-block">
                        <?php if(has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="feature-item">
                        <?php } else { ?>
                            <img src="<?php echo get_field('home_page_project_images'); ?>" alt="feature-item">
                        <?php } ?>
                    </div>
                </div><?php
            } ?>

        </div>
    </section>
    <!-- <section class="custom-grid-section related-projects">
        <div class="container"> 
             <h2>Other PROJECTS</h2>
            <div class="custom-grid-wrapper"><?php
                $args = array(
                    'posts_per_page' => 3,
                    'order'=>'desc',
                    'post_type' => 'project',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'projects-category',
                            'field' => 'term_id',
                            'terms' => $term->term_id
                        )
                    ),
                    'post__not_in' => array($post->ID),
                );
              
                $my_query = new WP_Query( $args );
                if($my_query->have_posts()) {
                    while ($my_query->have_posts()) { 
                        $my_query->the_post();?>
                        <div class="grid-item">
                            <div class="grid-item-inner">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="grid-item">
                                    <?php } else { ?>
                                        <img src="<?php echo get_field('home_page_project_images'); ?>" alt="grid-item">
                                    <?php } ?>
                                </a>
                            </div>
                        </div><?php 
                    }
                } ?>
            </div>
        </div>
    </section> -->
</div>
<div class="custom-modal" data-target="project-video-modal">
    <div class="modal-backdrop"></div>
    <div class="modal-content-wrapper">
        <div class="modal-inner-content">
            <div class="modal-header">
                <span class="modal-close" title="close"><img src="<?php echo get_template_directory_uri(); ?>/public/images/close-button.svg" alt="Close"></span>
            </div>
            <div class="modal-body">
                <iframe src="" class="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>