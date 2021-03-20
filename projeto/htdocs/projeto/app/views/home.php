<!--Arquivo em PHP contendo o 
	conteúdo da parte dinâmica da home.php-->		
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-xs-12">
						<!--Carrosel -->
					<div id="carrosselIndicadores" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carrosselIndicadores" data-slide-to="0" class="active"></li>
					    <li data-target="#carrosselIndicadores" data-slide-to="1"></li>
					    <li data-target="#carrosselIndicadores" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100 img-thumbnail" src="app/public/img/cariri01.jpg" alt="Primeiro Slide">
					      <div class="carousel-caption">
					      	<!--Descrição da Imagem-->
					      	Primeira Imagem 
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 img-thumbnail" src="app/public/img/cariri02.jpg" alt="Segundo Slide">
					      <div class="carousel-caption">
					      	Segunda Imagem 
					      </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 img-thumbnail" src="app/public/img/cariri03.jpg" alt="Terceiro Slide">
					      <div class="carousel-caption">
					      	Terceira Imagem 
					      </div>
					    </div>
					  </div>
					  <!-- Controles-->
					  <a class="carousel-control-prev" href="#carrosselIndicadores" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Anterior</span>
					  </a>
					  <a class="carousel-control-next" href="#carrosselIndicadores" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Próximo</span>
					  </a>
					</div>	
				</div>
				<!--Mensagem ao lado do carrosel-->
				<div class="col-md-7 col-xs-12">
					<h1>Hello world</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper, velit nec aliquet dignissim, nulla tortor volutpat sem, vel aliquam mi metus et enim. Sed iaculis tellus sed augue molestie, ac pellentesque erat rhoncus. Maecenas sed elit felis. Suspendisse vel pulvinar nunc. Maecenas venenatis arcu vitae cursus vulputate. In blandit mauris nec lorem ultricies porttitor. Praesent cursus ante quis diam elementum, vel venenatis ipsum ultrices.</p>

					<p><a class="btn btn-primary" href="#" role="button">Leia Mais</a></p>
				</div>
			</div>
		</div>
	</div>