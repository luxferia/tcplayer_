<?php 

$json_movies_file = file_get_contents("populares.json");

$json_output = json_decode($json_movies_file);

?>

<section id="secao-webdoor" class="section-webdoor">
	<?php /*
    <div class="webdoor-item">
        
    </div><!-- / .webdoor-item -->
    */ ?>

    <div class="webdoor-wrapper">
    	<div class="webdoor-carousel">
    		<?php foreach ($json_output->data as $movie) {
    			$movie_webdoor = str_replace("'", "\'", $movie->hero3x1);
    			$movie_title = $movie->titulo_original;
    			$movie_title_pt = $movie->titulo_portugues;
    			?>

    			<div class="item" style="background-image: url(<?php echo $movie_webdoor; ?>);">

    				<div class="container">
    					<div class="row">
    						<div class="col-auto ml-auto">
    							<span class="movie-title d-inline d-md-block"><?php echo $movie_title_pt; ?></span>
    							<span class="movie-title small d-inline d-md-block" lang="en">(<?php echo $movie_title; ?>)</span>
    						</div>
    					</div>
    				</div>
    			</div><!-- / .item -->

    		<?php } ?>
    	</div><!-- / .webdoor-carousel -->

    	<div class="container align-self-end align-self-md-center py-5">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-11 col-md-9 col-lg-6 col-xl-5 text-center text-md-left">
                    <h2 class="mb-2">Filmes exclusivos dos maiores estúdios é <br class="d-none d-sm-block"><span class="text-primary">só dar um play</span></h2>
                    <div class="h6 text-light">Curta 7 dias grátis, assine por <span class="text-white font-weight-normal">R$ 37,90 / mês</span> e cancele quando quiser.</div>

                    <div class="mt-4">
                        <a href="#" class="btn btn-primary rounded-pill btn-lg" data-after-text="Cadastre-se" data-toggle="modal" data-target="#signup-modal">Experimente grátis <i class="fas fa-chevron-right ml-2"></i></a>
                    </div>
                </div><!-- / .col -->
            </div><!-- / .row -->
        </div><!-- / .container -->
    </div><!-- / .webdoor-wrapper -->


    	<div class="showcase-carousel showcase-carousel-col5" id="showcase-carousel02">
    		<?php foreach ($json_output->data as $movie) { 
    			$movie_poster = str_replace("'", "\'", $movie->poster_m);
    			// $movie_title = $movie->titulo_original;
    			$movie_title_pt = $movie->titulo_portugues;
    		?>

    		<div class="item">
    			<div class="poster poster-alt" style="background-image: url(<?php echo $movie_poster; ?>);">
    				<div class="poster-body">
    					<div class="align-self-end w-100">
    						<div class="movie-title"><?php echo $movie_title_pt; ?></div>
    						<!-- <div class="small" lang="en"><?php //echo $movie_title; ?></div> -->
    					</div>
    				</div>
    			</div>
    		</div>
    		
			<?php } ?>
    	</div><!-- / .showcase-carousel -->

</section><!-- / .section-webdoor -->

<section class="content-wrapper container text-center">
	<h2 class="subtitle">Dispositivos</h2>
	<div class="h1 font-weight-light pb-md-3 mb-5">O melhor catálogo. <br>Em todas as telas.</div>

	<div class="row h6 justify-content-center align-items-center mb-0">
		<div class="col-12 col-lg-6"><img src="images/img-devices.webp" alt=""></div>

		<div class="col col-sm-6 col-lg-3 order-lg-first">
			<p class="h4 my-5 mt-lg-0">Assista na TV</p>
			<ul class="list-unstyled mb-5 mb-sm-0">
				<li class="mb-2" lang="en"><i aria-hidden="true" class="fas fa-tv text-dark mr-2"></i>Smart TVs</li>
				<li class="mb-2" lang="en"><i aria-hidden="true" class="fab fa-xbox text-dark mr-2"></i>Xbox One</li>
				<li class="" lang="en"><i aria-hidden="true" class="fab fa-chromecast text-dark mr-2"></i>ChromeCast</li>
			</ul>
		</div><!-- / .col -->

		<div class="col-12 d-sm-none"><img src="images/img-devices02.webp" alt=""></div>

		<div class="col col-sm-6 col-lg-3 order-lg-last">
			<p class="h4 my-5 mt-lg-0">Ou onde quiser</p>
			<ul class="list-unstyled mb-0">
				<li class="mb-2"><i aria-hidden="true" class="fab fa-apple text-dark mr-2"></i>iOS</li>
				<li class="mb-2" lang="en"><i aria-hidden="true" class="fab fa-android text-dark mr-2"></i>Android</li>
				<li class=""><i aria-hidden="true" class="fas fa-laptop text-dark mr-2"></i>PC</li>
			</ul>
		</div><!-- / .col -->
	</div><!-- / .row -->
</section><!-- / .container.content-wrapper -->

<!-- Sign Up Modal -->
<section class="modal fade modal-signup" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row justify-content-center">
					<div class="col-sm-10">
						<header class="text-center">
							<?php include('includes/_logo.php'); ?>
							<h2 class="h5 mt-2" id="signup-modalLabel">Experimente Grátis</h2>
						</header>

						<form id="signup-form">
							<div class="row justify-content-center">
								<div class="col-lg-8 text-center">
									<p class="lead tex-light">Para começar a usar seus 7 dias grátis, precisamos de alguns dados.</p>
								</div>
							</div>

							<fieldset>
								<div class="row">
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-name">Nome</label>
											<input type="text" class="form-control" id="signup-name" name="signup-name">
										</div>
									</div>
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-email">Email</label>
											<input type="email" class="form-control" id="signup-email" name="signup-email">
										</div>
									</div>
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-cpf">CPF</label>
											<input type="tel" class="form-control mask-cpf" id="signup-cpf" name="signup-cpf">
										</div>
									</div>
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-birthday">Data de Nascimento</label>
											<input type="tel" class="form-control mask-date" id="signup-birthday" name="signup-birthday">
										</div>
									</div>
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-uf">Estado</label>
											<select class="form-control" id="signup-uf" name="signup-uf">
												<option></option>
												<option>Rio de Janeiro</option>
												<option>São Paulo</option>
												<option>Minas Gerais</option>
												<option>Espírito Santo</option>
											</select>
										</div>
									</div>
									<div class="form-group col-12 col-lg-6">
										<div class="label-floated">
											<label for="signup-city">Cidade</label>
											<select class="form-control" id="signup-city" name="signup-city">
												<option></option>
												<option>Rio de Janeiro</option>
											</select>
										</div>
									</div>

									<div class="col-12 mt-2 text-right">
										<button type="submit" class="btn btn-primary rounded-pill">Enviar<i class="fas fa-chevron-right ml-2"></i></button>
									</div>
								</div>

							</fieldset>
						</form>
					</div>
				</div><!-- / .col -->
			</div><!-- / .modal-body.row -->
		</div><!-- / .modal-content -->
	</div><!-- / .modal-dialog -->
</section><!-- / #signup-modal -->