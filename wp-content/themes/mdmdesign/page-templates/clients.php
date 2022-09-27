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
         <div>
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
         } ?>
   	</div>	
   </section>
</div>
<script>

</script>
<?php
get_footer();

?>

