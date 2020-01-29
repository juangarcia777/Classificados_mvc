<div class="container-fluid" >
         <div class="jumbotron">
                  <h2>Nós temos hoje <strong> <?php echo $posts ?> </strong> Novos anuncios !</h2>
                  <p>E mais de <strong> <?php echo $total ?> </strong> de usuários cadastrados.</p>
          </div>
     </div>

     <div class="container">
    
            <div class="row">
     <?php foreach($array as $item): ?>

                <div class="jumbotron">
                  <?php if(!empty($item['urli'])): ?>
                   
                    <img id="imageFiltro" class="card-heading" src="assets/images/anuncios/<?php echo $item['urli'] ?>" >
                   
                    <?php else: ?>
                    
                    <img id="imageFiltro"  class="card-heading" src="assets/images/anuncios/default.png" >
                    <?php endif;?>

                

                    <div class="row-sm-4">
                        <h4 class="card-title"><?php echo $item['titulo'] ?></h4>
                        <p class="card-text"><?php echo $item['descricao'] ?></p>
                        <p class="card-footer"><?php echo $item['user'] ?></p>
                        
                        </div>
                       </div>
                       <?php endforeach; ?>
                    </div> 
                    
             </div>
     </div>
     
     