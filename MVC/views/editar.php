<div class="container" style="padding-bottom:200px;">

<br/>
    
        <h1>Editar-Anúncio</h1>
    
     <form method="POST" enctype="multipart/form-data">


<div class="form-group">
    <label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria" class="form-control">

    
    <?php foreach($todos as $item): ?>

    <option value="<?php echo $item['id']; ?>"
    <?php echo ($array['id_categorias']==$item['id'])?' selected="selected"':''; ?>>
    <?php echo $item['nome'] ?></option>
    

    <?php endforeach; ?>
    </select>
    
    </div> 

    <div class="form-group">
    <label for="titulo">Titulo:</label>
    <input  type="text" name="titulo" id="titulo" value="<?php echo $array['titulo'] ?>" class="form-control">
    </div>

    <div class="form-group">
    <label for="valor">Valor:</label>
    <input  type="text" name="valor" id="valor" value="<?php echo $array['valor'] ?>" class="form-control">
    </div>

    <div class="form-group">
    <label for="descricao">Descrição:</label>
    <textarea class="form-control" name="descricao"><?php echo $array['descricao'] ?></textarea>
    </div>


    <div class="form-group">
    <label for="estado">Estado de Conservação:</label>
    <select name="estado" id="estado" value="<?php echo $array['estado'] ?>" class="form-control">

    <option value="0" <?php echo ($array['estado']== '0')?' selected="selected"':''; ?>>Regular</option>
    <option value="1" <?php echo ($array['estado']== '1')?' selected="selected"':''; ?>>Bom</option>
    <option value="2" <?php echo ($array['estado']== '2')?' selected="selected"':''; ?>>Ótimo</option>
    </select>
    </div> 

    <div  class="form-group">
    <label for="fotos">Adicionar Fotos:</label><br/>
    <input type="file" name="fotos[]" multiple/>
    </div>
    
    <div class="card ">
    <div class="card card-heading bg-light"> 
    <h5>Fotos do Anúncio:</h5> 
    </div>
    <div class="card card-body">
    <?php foreach($array['fotos'] as $foto): ?>
     <div class="foto_item">
     <img src="assets/images/anuncios/<?php echo $foto['urli']  ?>"
      height="80" width="150" class="img-thumbnail">
      <a class="btn btn-warning" href="<?php echo BASE_URL ?>editar/exclui/<?php echo $foto['id'] ?>">Excluir Imagem</a>
     <hr/>
     </div>
    <?php  endforeach; ?>
        </div>
    </div>
    <br/>
    <input type="submit" class="btn btn-primary">

    </div>