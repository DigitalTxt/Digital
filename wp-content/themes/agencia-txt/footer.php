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

		<div class="container">
			<div class="row">
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

			</div>
		</div>
	</div><!-- #page -->

	<footer class="page-footer ">
	  <div class="container">
	    <div class="row">
 			 		<div class="col-12 mt-2 mt-sm-5">
 			 			<ul class="list-unstyled list-inline social text-center">
 			 				<li class="list-inline-item"><a href=""><i class="fab fa-facebook-square"></i></a></li>
							<li class="list-inline-item"><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
	 						<li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
 			    	  <li class="list-inline-item"><a href=""><i class="fab fa-google-plus-square"></i></a></li>
					<li class="list-inline-item"><a href=""><i class="fas fa-phone"></i></a></li>
				</ul>
 			</div>
	    </div>
		<div class="row">
		  <div class="col-12  mb-sm-5">
			<h5 class="text-center">Dirección: carrera 12 No. 87-45 / Teléfono: 691 8788 <br>
					Bogotá, Colombia<br>
		      <a href="">2018 © Txt Agencia Transmedia</a>
		    </h5>
		  </div>
		</div>
	  </div>
 	</footer>

<?php wp_footer(); ?>

<!-- </div> -->
</div>


</body>
</html>
