<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package henock_fantahun
 */

get_header();
?>

	<div id="primary" class="content-area" style="text-align: center; padding-bottom:180px;">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
				<!-- <div class="img"> 
				
				</div>


				<img alt="404 pic" src="404pic.jgp" /> -->


					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'henock-fantahun' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links on the menu or a search?', 'henock-fantahun' ); ?></p>

					<?php
					get_search_form();

					
					?>

					

					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
