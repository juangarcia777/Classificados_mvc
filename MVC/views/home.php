 <div class="container-fluid">
         <div class="jumbotron">
                  <h2>Nós temos hoje <strong> <?php echo $posts ?> </strong> Novos anuncios !</h2>
                  <p>E mais de <strong> <?php echo $total ?> </strong> de usuários cadastrados.</p>
          </div>
     </div>
     <div class="container" >
        <div class="row">
            <div class="col-sm-3 jumbotron">
                <h3>Pesquisa Avançada</h3>
                <form action="<?php echo BASE_URL ?>pesquisa" method="GET">

                    <div class="form-group">
                        <label for="categoria">Categorias:</label> 
                        <select name="categoria" class="form-control" required>
                        <option></option>
                        <?php foreach($categorias as $item): ?>
                        <option value="<?php echo  $item['id'] ?>"><?php echo $item['nome']; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="valor">Valor:</label> 
                        <select name="valor" class="form-control" required>
                        <option></option>
                        <option value="0/100">0-100</option>
                        <option value="101/300">101-300</option>
                        <option value="301/500">301-500</option>
                        <option value="501/1000000">500-Acima</option>
                        </select>
                    </div>

                    <input type="submit" value="Filtrar" class="btn btn-warning">

                </form>
            </div>
            <div class="col-sm-9">
                <h3>Ultimos Anúncios</h3>
                <div class="row">
    
                <?php foreach($ultimos as $item): ?>
                <?php if(!empty($item['urli'])): ?>

                <div class="img-thumbnail" id="ultimosAnuncios">
                <a><img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $item['urli'] ?>" width="250" height="150"><br/>
                <strong><a href="<?php echo BASE_URL; ?>produto.php?id=<?php echo $item['id']."/". $item['id_usuario'] ?>"><?php echo $item['titulo'] ?></a></strong><br/>
                <?php echo $item['descricao'] ?><br/></a>
                </div>

                <?php else : ?>

                <div class="img-thumbnail" id="ultimosAnuncios">
                <div><img src="<?php echo BASE_URL; ?>assets/images/anuncios/default.png" height="150" width="250"><br/>
                <strong><a href="<?php echo BASE_URL; ?>produto/abrir/<?php echo $item['id']?>/user/<?php echo $item['id_usuario'] ?>"><?php echo $item['titulo'] ?></a></strong><br/>
                <?php echo $item['descricao'] ?><br/></div>
                </div>

                <?php endif; ?>
                
                <?php endforeach;  ?>
                        
                    </div>
                    <hr/>
                    <ul class="pagination">
                    <?php for($q=1; $q<$total_paginas; $q++): ?>
                    <a class="text-light" href="<?php echo BASE_URL; ?>index.php?p=<?php echo $q ?>"><li class="btn btn-info"><?php echo $q ?></li></a>
                    <?php endfor; ?>
                    </ul>
                
                </div>
            </div>
        </div>
     </div>
