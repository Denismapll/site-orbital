<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-center align-items-center mb-5">
				<img src="<?=wp_upload_dir()['baseurl']?>/2024/06/orbital-logo.png" alt="" srcset="">
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-md-4 col-12 text-center">
						<div class="d-flex flex-column h-100">
							<h3 class="mb-5"><a style="text-decoration: none;" href="#">HOME</a></h3>
							<h3 class="mb-5"><a style="text-decoration: none;" href="#">CATÁLOGO DE PRODUTOS</a></h3>
							<h3 class="mb-5"><a style="text-decoration: none;" href="#">INFORMAÇÕES</a></h3>
							<h3 class="mb-5"><a style="text-decoration: none;" href="#">CONTATO</a></h3>
						</div>
					</div>
					<div class="col-md-4 col-12 text-center">
						<h3 class="mb-5 text-primary"><a style="text-decoration: none; color: black;" href="#">PRODUTOS</a></h3>
						<h3 class="mb-5"><a style="text-decoration: none; color: black;" href="#">DESTAQUES</a></h3>
						<h3 class="mb-5"><a style="text-decoration: none; color: black;" href="#">NOVIDADES</a></h3>
						<h3 class="mb-5"><a style="text-decoration: none; color: black;" href="#">PESQUISAR</a></h3>
					</div>
					<div class="col-md-4 col-12 text-center">
						<h3 class="fw-bold mb-5"><img class="margin-left: 10px;"
								src="<?=wp_upload_dir()['baseurl']?>/2024/06/celular-icone.png" alt=""
								srcset=""><a style="text-decoration: none; color: black;" href="tel:1120857300"><span>11
									2085-7300</span></a></h3>
						<h3 class="fw-bold mb-5"><a style="text-decoration: none; color: black;" href="#">11
								92085-7300</a></h3>
						<h3 class="mb-5"><a style="text-decoration: none; color: black;"
								href="mailto:contato@orbital.com.br">contato@orbital.com.br</a></h3>
						<h3 class="mb-5"><a style="text-decoration: none; color: black;"
								href="mailto:comercial@orbital.com.br">comercial@orbital.com.br</a></h3>
					</div>
					<div class="col-12">
						<p class="m-4 text-right">© Orbital <?php echo date('Y');?>, Todos os direitos reservados. | Desenvolvido por : <a href="https://mddweb.com.br"><img style="width: 145px;" src="http://localhost/orbital/site-orbital/wp-content/uploads/2024/06/logo-mddweb.jpg" alt="" srcset=""></a></p>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</footer><!-- #footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
	crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
<?php wp_footer(); ?>
</body>

</html>