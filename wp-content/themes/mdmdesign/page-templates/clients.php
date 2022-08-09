<?php
/*
Template Name:Clients Page
*/
get_header();
?>
<div class="page-wrapper">
   <section class="client-logo-section">
   	<div class="container"><?php
         if( have_rows('client_logo_images') ) { ?>
         <div class="desktop-view">
      		<div class="client-logo-wrapper"><?php
               while ( have_rows('client_logo_images') ) { 
                  the_row();
                  $logoImage = get_sub_field('logo_image'); ?>		
                  <div class="client-logo-inner">
                     <em>
                        <img src="<?php echo $logoImage['url']; ?>" alt="<?php echo $logoImage['alt']; ?>">
                     </em>
                  </div><?php
               } ?>
      		</div>
         </div>
         <?php
         }

         $numberOfLogoDisplayForTablet = get_field('number_of_clients_logo_for_tablet');
         $rowVal = get_field('client_logo_images');
         if( $rowVal ) {  
            $total = count(get_field('client_logo_images'));
            $count = 0;
            $number = $numberOfLogoDisplayForTablet - 1;
            ?>
            <div class="tablet-view">
               <div class="client-logo-wrapper" id="client-tablet-logo"><?php
                      foreach( $rowVal as $row ) { 
                        the_row();
                        $logoImage = $row['logo_image']; ?>		
                        <div class="client-logo-inner">
                           <em>
                              <img src="<?php echo $logoImage['url']; ?>" alt="<?php echo $logoImage['alt']; ?>">
                           </em>
                        </div><?php
                        if ($count == $number) {
                           break;
                        }  $count++;
                     } ?>
               </div>
               <div class="view-more-wrapper" id= "tablet-view-more" <?php if ($total < $count) { ?> style="display: none;"<?php } ?>>
                  <a href="javascript:void(0);" title="View More">
                     <img src="<?php echo get_template_directory_uri(); ?>/public/images/down-arrow.svg" alt="Arrow">
                     <span>View More</span>
                  </a>
               </div>
            </div><?php 
         }

         $numberOfLogoDisplayForMobile = get_field('number_of_clients_logo_for_mobile');
         $rowValm = get_field('client_logo_images');
         if( $rowValm ) {  
            $mobileTotal = count(get_field('client_logo_images')); ?>
            <div class="mobile-view">
               <div class="client-logo-wrapper" id="client-mobile-logo"><?php 
               $mobilecount = 0;
               $mobilenumber = $numberOfLogoDisplayForMobile - 1;
                  foreach( $rowValm as $rowm ) { 
                     the_row();
                     $logoMobileImage = $rowm['logo_image']; ?>		
                     <div class="client-logo-inner" <?php echo $mobilecount; ?>>
                        <em>
                           <img src="<?php echo $logoMobileImage['url']; ?>" alt="<?php echo $logoMobileImage['alt']; ?>">
                        </em>
                     </div><?php
                     if ($mobilecount == $mobilenumber) {
                        break;
                     }  $mobilecount++;
                  } ?>
               </div>
               <div class="view-more-wrapper" id="mobile-view-more" <?php if ($mobileTotal < $mobilecount) { ?> style="display: none;"<?php } ?>> 
                  <a href="javascript:void(0);" title="View More">
                     <img src="<?php echo get_template_directory_uri(); ?>/public/images/down-arrow.svg" alt="Arrow">
                     <span>View More</span>
                  </a>
               </div>
            </div><?php 
         } ?>
   	</div>
      <div class="loader-wrapper" style="display:none">
         <img src="<?php echo get_template_directory_uri(); ?>/public/images/site-loader.svg" alt="site-loader">
      </div>
      <input type="hidden" value="<?php echo $post->ID; ?>" class="getPageID">	
      <input type="hidden" value="<?php echo $number + 1; ?>" class="getTabletLogoOffset">	
      <input type="hidden" value="<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>" class="getRepeaterNonce">	
      <input type="hidden" value="<?php echo $mobilenumber + 1; ?>" class="getMobileLogoOffset">	
   </section>
</div>
<script>

</script>
<?php
get_footer();

?>

