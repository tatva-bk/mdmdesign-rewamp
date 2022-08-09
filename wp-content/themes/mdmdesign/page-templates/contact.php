<?php
/*
Template Name:Contact Page
*/
get_header();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZfNVs3BqD903NehaTDUKJlkd5mqSPz64"></script>
<div class="page-wrapper">
    <section class="contact-section">
      <div class="container">
           <div class="contact-info-block">
               <div class="address-details">
                    <address><?php echo get_field('address_details'); ?></address>
               </div>
                <div class="contact-listing">
                    <ul>
                        <li>
                            <a href="tel:<?php echo str_replace(" ", "", get_field('contact_number')); ?>" title="Call us"><?php echo get_field('contact_number'); ?></a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo get_field('email_adsress'); ?>" title="Mail us"><?php echo get_field('email_adsress'); ?></a>
                        </li>
                    </ul>
                </div>
           </div>
           <div class="map_outer" id="map_outer"><?php
                $location = get_field('address_details', 'option');                   
                $another_location = get_field('new_google_map_address');                 
                if (get_field('google_map_address')){
                    if (!empty($location)) {
                        echo "<script>var locations  = []; locations.push('" . $location . "');</script>";
                    }
                } else {
                    echo "<script>var locations  = []; locations.push('".$another_location."');</script>";
                }
                ?>          
            </div>
      </div>
    </section>
</div>
<?php
get_footer();
?>

