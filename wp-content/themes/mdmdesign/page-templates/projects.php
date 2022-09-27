<?php
/*
Template Name:Projects Page
*/
get_header();
$pageID = get_the_ID();
?>
<div class="page-wrapper">
    <section class="projects-listing-section custom-grid-section">
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
                            }?>
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
                        $args = array(
                            'order'=>'desc',
                            'post_type' => 'project',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'projects-category',
                                    'field' => 'term_id',
                                    'terms' => $category->term_id
                                )
                            )
                        );?>
                    <div class="tab-content-inner <?php echo $activeTabClass; ?>" data-target="<?php echo $category->slug; ?>">
                        <div class="grid-outer">
                            <div>
                                <div class="custom-grid-wrapper"><?php 
                                    $args['posts_per_page'] = -1;
                                    $my_query = new WP_Query( $args );
                                    $totalPost =  $my_query->found_posts;
                                    if($my_query->have_posts()) {
                                        while ($my_query->have_posts()) { 
                                            $my_query->the_post();
                                            echo get_projects();
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div><?php
                        $catID = 'projects-category_' . $category->term_id;
                        if(have_rows('small_tile_project_listing', $catID)) { ?>
                        <div class="grid-outer small-col-grid">
                            <div class="custom-grid-wrapper"><?php
                                while(have_rows('small_tile_project_listing', $catID)) {
                                    the_row();
                                    $smallProjectImage = get_sub_field('small_tile_project_image', $catID); 
                                    $optionValue = get_sub_field('display_video', $catID); 
                                    $smallProjectVideo = get_sub_field('small_tile_project_vedio', $catID); 
                                    ?>
                                    <div class="grid-item">
                                        <div class="grid-item-inner"><?php
                                            if(!$optionValue) { ?>
                                                <a href="javascript:void(0);" class="modal-link" data-link="project-design-modal" data-src="<?php echo $smallProjectImage['url']; ?>">
                                                    <img src="<?php echo $smallProjectImage['url']; ?>" alt="small-col-popup-img-1">
                                                </a><?php
                                            } else { ?>
                                                <a href="javascript:void(0)" title="Project Video" class="video-link" data-link="iframe-video" data-src="<?php echo $smallProjectVideo; ?>">
                                                    <img class="small-project-video" src="<?php echo get_template_directory_uri(); ?>/public/images/video-icon.png" alt="video icon">
                                                    <img src="<?php echo $smallProjectImage['url']; ?>" alt="project-image">
                                                </a> 
                                            <?php } ?>
                                        </div>
                                    </div><?php 
                                } ?>
                            </div>
                        </div><?php
                        } ?>
                    </div><?php $activeTabClassCount++;
                    } ?>
                </div>
            </div>
       </div>
    </section>
</div>

<?php
get_footer();
?>

<div class="custom-modal image-modal" data-target="project-design-modal">
    <div class="modal-backdrop"></div>
    <div class="modal-content-wrapper">
        <div class="modal-inner-content">
            <div class="modal-header">
                <span class="modal-close" title="close"><img src="<?php echo get_template_directory_uri(); ?>/public/images/close-button.svg" alt="Close"></span>
            </div>
            <div class="modal-body">
                <div class="image-wrapper modal-img">
                    <img src="" alt="grid-item-img">
                </div>
            </div>
        </div>
    </div>
</div>