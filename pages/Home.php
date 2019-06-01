<?php 

$json_movies_file = file_get_contents("populares.json");

$json_output = json_decode($json_movies_file);

?>


<section id="secao-webdoor" class="section-webdoor webdoor">
    <div class="webdoor-item">
        <div class="container content-wrapper pb-5">
            <div class="row">
                <div class="col-md-7 col-lg-6 offset-lg-1 pt-md-5">
                    <h2 class="h1 mt-lg-5">Filmes exclusivos dos maiores estúdios é <span class="text-primary">só dar um play</span></h2>
                    <div class="h6 pr-lg-5">Curta 7 dias grátis, assine por R$ 37,90 / mês e cancele quando quiser.</div>

                    <div class="mt-4">
                        <a href="#" class="btn btn-primary btn-lg" data-after-text="Cadastre-se">Experimente grátis <span class="fas fa-chevron-right ml-2"></span></a>
                    </div>
                </div><!-- / .col -->
            </div><!-- / .row -->
        </div><!-- / .container -->
    </div><!-- / .webdoor-item -->

    <div class="container">
    	<div class="showcase-carousel showcase-carousel-col5" id="showcase-carousel02">
    		<?php foreach ($json_output->data as $movie) { 
    			$movie_poster = str_replace("'", "\'", $movie->poster_m)
    		?>

    		<a href="#" class="item">
    			<div class="poster poster-alt" style="background-image: url(<?php echo $movie_poster; ?>)">
    				<div class="poster-body text-center">
    					<div class="align-self-center w-100">
    						<span class="fas fa-play fa-3x"></span>
    					</div>
    				</div>
    			</div>
    		</a>
    		
			<?php } ?>
    	</div><!-- / .showcase-carousel -->
    </div><!-- / .container -->
</section><!-- / .section-webdoor -->

<section class="content-wrapper">
	<div class="container text-center">
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
	</div><!-- / .container -->
</section>

