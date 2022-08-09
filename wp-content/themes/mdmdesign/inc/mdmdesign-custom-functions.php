<?php
/**
 * SVG upload filter 
 */
add_filter('upload_mimes', 'mdmdesign_cc_mime_types');
if (!function_exists('mdmdesign_cc_mime_types')) {
	function mdmdesign_cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
	}
}

/**
 * Hide wordpress version 
 */
add_filter('the_generator', 'mdmdesign_remove_wordpress_version');
if (!function_exists('mdmdesign_remove_wordpress_version')) {
  function mdmdesign_remove_wordpress_version()
  {
    return '';
  }
}

/**
 * Custom admin login header logo
 */
add_action('login_enqueue_scripts', 'mdmdesign_change_admin_login_logo');
if (!function_exists('mdmdesign_change_admin_login_logo')) {
  function mdmdesign_change_admin_login_logo()
  {
	?>
    <style type="text/css">
      body.login div#login h1 a {
        background-image: url(<?php echo get_template_directory_uri(); ?>/public/images/mdm-logo.png);
        height: 4.3rem;
        width: 13.3rem;
        background-size: 13.3rem;
      }
        body.login div#login h1 {
        margin-top: 60px;
      }
      body.login {
        background: #000;
      }

      body.login div#login #nav a,
      body.login div#login #backtoblog a {
        color: #ffffff;
      }
    </style>
  <?php
  }
}

/**
 * Custom admin login URL
 */
add_filter('login_headerurl', 'mdmdesign_change_adminlogin_url');
if (!function_exists('mdmdesign_change_adminlogin_url')) {
  function mdmdesign_change_adminlogin_url()
  {
    return home_url('/');
  }
}

/**
 * Theme Option Page 
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Theme Settings');
}

/**
 * Register new menus.
 */
register_nav_menus( array(
    'footer-menu' => __('Footer Menu','new-smile'),
) );


/**
 * ACF Load More Repeater for tablet client logo
*/
add_action('wp_ajax_client_logo_repeater_show_more', 'client_logo_repeater_show_more');
add_action('wp_ajax_nopriv_client_logo_repeater_show_more', 'client_logo_repeater_show_more');

function client_logo_repeater_show_more() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
  
	$post_id = $_POST['post_id'];
  $tabletLogoAfterLoadMore = get_field('number_of_clients_logo_after_load_more',$post_id);
	$start = $_POST['offset'];
	$end = $start+$tabletLogoAfterLoadMore;
	ob_start();
  $rowLogos = get_field('client_logo_images', $post_id);
	if ($rowLogos) {
    $total = count(get_field('client_logo_images', $post_id));
    $count = 0;
    foreach( $rowLogos as $logo ) {
        the_row();
        $logoImage = $logo['logo_image'];
        if ($count < $start) {
          $count++;
          continue;
        } ?>
        <div class="client-logo-inner">
          <em>
              <img src="<?php echo $logoImage['url']; ?>" alt="<?php echo $logoImage['alt']; ?>">
          </em>
        </div>	
        <?php 
        $count++;
        if ($count == $end) {
          break;
        }
      } 
	}
	$content = ob_get_clean();
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
} 

/**
 * ACF Load More Repeater for mobile client logo
*/
add_action('wp_ajax_mobile_client_logo_repeater_show_more', 'mobile_client_logo_repeater_show_more');
add_action('wp_ajax_nopriv_mobile_client_logo_repeater_show_more', 'mobile_client_logo_repeater_show_more');

function mobile_client_logo_repeater_show_more() {
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	if (!isset($_POST['post_id']) || !isset($_POST['mobile_offset'])) {
		return;
	}
  $post_id = $_POST['post_id'];
	$mobileLogoAfterLoadMore = get_field('number_of_clients_logo_after_load_more_for_mobile',$post_id);
	$start = $_POST['mobile_offset'];
	$end = $start+$mobileLogoAfterLoadMore;

	ob_start();
  $rowLogos = get_field('client_logo_images', $post_id);
	if ($rowLogos) {
		$total = count(get_field('client_logo_images', $post_id));
		$count = 0;
		foreach( $rowLogos as $logo ) {
			the_row();
      $logoImage = $logo['logo_image'];
			if ($count < $start) {
				$count++;
				continue;
			} ?>
		  <div class="client-logo-inner">
        <em>
            <img src="<?php echo $logoImage['url']; ?>" alt="<?php echo $logoImage['alt']; ?>">
        </em>
      </div>	
			<?php 
			$count++;
			if ($count == $end) {
				break;
			}
		} 
	}
	$mobileContent = ob_get_clean();
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	echo json_encode(array('content' => $mobileContent, 'more' => $more, 'mobile_offset' => $end));
	exit;
} 


/**
 * View more for projects in listing page for mobile and tablet 
 */
add_action('wp_ajax_nopriv_get_project_list', 'get_project_list');
add_action('wp_ajax_get_project_list', 'get_project_list');
if (!function_exists('get_project_list')) {

    function get_project_list() {
        if (isset($_POST['ppp']) && !empty($_POST['ppp'])) {
            $projectPerPage = $_POST['ppp'];
        }
        $args = array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'posts_per_page' => $projectPerPage,
            'offset' => $_POST['offset'],
            'tax_query' => array(
              array(
                  'taxonomy' => 'projects-category',
                  'field' => 'slug',
                  'terms' => $_POST['categoryVal']
              )
          )
        );

        $project_query = new WP_Query($args);
        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) :
                $project_query->the_post();
                echo get_projects();
            endwhile;
        endif;
        wp_reset_postdata();
    }
}


/**
 * Get project for listing page
 */
if (!function_exists('get_projects')) {

  function get_projects() {
    $projectImagePath = get_field( 'home_page_project_images',get_the_ID() ); 
    $projectImage =  get_the_post_thumbnail_url(get_the_ID()); 
    if(has_post_thumbnail(get_the_ID())) { 
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
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                <img src="<?php echo $imageOfProject; ?>" alt="grid-item">
            </a>
        </div>
    </div><?php
  }
}
?>