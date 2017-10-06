<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rootstrap
 */
?>
<footer class="site-footer">
	<div class="alignleft"><p class="copyright"></p>
		<div class="site-footer-nav">
			<div class="menu-wrap">
				<ul id="menu-footer" class="nav">
					<?php wp_nav_menu(array(
                    'theme_location'=>'footer-links',
                    'menu_class'=>'nav'

                    )) ?>                 
					
				</ul>
			</div>

			<!-- end .wrap -->
		</div>
	</div>
	<div class="alignright">
		<p class="creds"><?php echo get_theme_mod('copyright') ?><br><?php echo get_theme_mod('extracontent') ?></p>
	</div>
</footer>

<?php wp_footer() ?>

</body>
</html>