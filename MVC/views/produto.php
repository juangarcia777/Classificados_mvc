<div class="container-fluid">
 <br/>
	<div class="row">
		<div class="col-sm-5">
			
			<div class="carousel slide" data-ride="carousel" id="meuCarousel">
				<div class="carousel-inner">

					<?php foreach($array['fotos'] as $chave => $foto): ?>
					<div class="carousel-item <?php echo ($chave=='0')?'active':''; ?>">
						<img id="imageProduto" src="<?php echo BASE_URL ?>assets/images/anuncios/<?php echo $foto['urli']; ?>"  />
					</div>
					<?php endforeach; ?>
				</div>
                <hr/>
				<a class="left carousel-control btn btn-info" href="#meuCarousel" role="button" data-slide="prev"><span><</span></a>
				<a class="right carousel-control btn btn-info" href="#meuCarousel" role="button" data-slide="next"><span>></span></a>
			</div>

		</div>
		<div class="col-sm-7">
			<h1><?php echo $array['titulo']; ?></h1>
			<p><?php echo $array['descricao']; ?></p>
			<br/>
			<h3>R$ <?php echo $array['valor']; ?></h3>
			<h4>Telefone: <?php echo $array['user']; ?></h4>
		</div>
	</div>
</div>