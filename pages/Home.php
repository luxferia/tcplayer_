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
	<div class="container">
		<div class="text-center">
			<h2 class="h6 text-uppercase">Dispositivos</h2>
			<div class="h1">O melhor catálogo. <br>Em todas as telas.</div>
		</div>

		<div class="row h6">
			<div class="col-md-5 offset-md-1">
				<p class="h4 mb-5">Assista na TV</p>
				<ul class="fa-ul">
					<li class="mb-2"><span class="fa-li" ><i class="fas fa-tv"></i></span>Smart TVs</li>
					<li class="mb-2"><span class="fa-li" ><i class="fab fa-xbox"></i></span>Xbox One</li>
					<li class="mb-2"><span class="fa-li" ><i class="fab fa-chromecast"></i></span>ChromeCast</li>
				</ul>
			</div><!-- / .col -->

			<div class="col-md-5 offset-md-6">
				<p class="h4 mb-5">Ou onde quiser</p>
				<ul class="fa-ul">
					<li class="mb-2"><span class="fa-li" ><i class="fab fa-android"></i></span>Android</li>
					<li class="mb-2"><span class="fa-li" ><i class="fab fa-apple"></i></span>iOS</li>
					<li class="mb-2"><span class="fa-li" ><i class="fas fa-laptop"></i></span>PC</li>
				</ul>
			</div><!-- / .col -->
		</div><!-- / .row -->
	</div><!-- / .container -->
</section>

