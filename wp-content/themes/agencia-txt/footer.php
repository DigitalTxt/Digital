<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agencia-txt
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'href="http://txt.co', 'agencia-txt' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Producto creado por: %s', 'agencia-txt' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'agencia-txt' ), 'agencia-txt', '<a href="http://txt.co">Txt Agencia Transmedia</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/popper.min.js"></script>
</div>
</div>
</body>
</html>
