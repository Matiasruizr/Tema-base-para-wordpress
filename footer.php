<?php
/**
 *  Footer del sitio
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<nav>
				<?php
					wp_nav_menu( array( 
						'container_class' => 'footerNav', 
						'theme_location' => 'footer' ) );
				?>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/logoGestaluz.jpg">
		</nav>

	<!-- Bootstrap -->
	<script src="<?php echo $url; ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- FA -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<!-- Js propio -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js"></script> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
