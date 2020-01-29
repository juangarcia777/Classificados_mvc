<div class="container">
     <br/>
         <h1>Meus Anúncios</h1>
         <a href="<?php BASE_URL; ?>anunciar" class="btn btn-warning">Anunciar</a>
         <br/>
         <br/>
     
     <table class=" table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Titulo</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
    <?php foreach($anuncios as $anuncio): ?>

    <tr>
        <?php if(!empty($anuncio['urli'])): ?>
        <td><img height="50" src="<?php BASE_URL; ?>assets/images/anuncios/<?php echo $anuncio['urli'] ?>"/></td>
        <td><?php echo $anuncio['titulo']; ?></td>
        <td>R$<?php echo $anuncio['valor']; ?></td>
        <?php else : ?>
        <td><img src="<?php BASE_URL; ?>assets/images/anuncios/default.png" height="50"/></td>
        <td><?php echo $anuncio['titulo']; ?></td>
        <td>R$<?php echo $anuncio['valor']; ?></td>
    <?php endif; ?>
    <td><a class="btn btn-info" href="<?php BASE_URL; ?>editar/edit/<?php echo $anuncio['id']?>">Editar</a>---
    <a class="btn btn-danger" href="<?php BASE_URL; ?>meus_anuncios/excluir/<?php echo $anuncio['id']?>">Excluir</a></td>
    </tr>

    <?php  endforeach; ?> 
    </table>

     </div>
