<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mdmdesign
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="page-wrapper">
			<section class="error-404 not-found">
				<div class="container">
					<h1 class="page-title">404!</h2>
					<h2 class="page-detail">Oops! That page can’t be found.</h2>
					<p>It looks like nothing was found at this location.</p>
					<div class="btn-wrapper">
						<a href="<?php echo home_url('/'); ?>" class="return-home-link" title="Return Home">Return Home</a>
					</div>
				</div>
			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->
<?php
get_footer();
