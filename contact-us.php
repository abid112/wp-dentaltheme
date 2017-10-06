<?php
/* Template Name: ContactUs Page */ 
?>

<?php get_header(); ?>

<div class="content">
	<div class="container">
		<div class="col-md-8 content-body">




			<main class="content">

				<div class="home-main-content widget-area">

					<section  class="widget widget_text">

						<h4 class="widget-title widgettitle"><?php the_title(); ?></h4>



					</section>



				</div>
				<div class="entry-content" itemprop="text">
					<p style="text-align: center;">
						<form>
							<div role="form">
								<div class="screen-reader-response"></div>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
											the_content();
											endwhile; else: ?>
											<p>Sorry, no posts matched your criteria.</p>
											<?php endif; ?>

								<!-- Form paste Here -->



						</div> 
					</div> <!-- col-md-8 end -->
				</div>
				</div>
			</div>

			<?php get_footer(); ?>