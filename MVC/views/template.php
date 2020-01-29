<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL
    ; ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL
    ; ?>assets/css/bootstrap.min.css" />

    <title>meu site</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary d-flex justify-content-between">
         <div class="container-fluid">
         <a class="navbar-brand" href="#">Classificados</a>
            <div class=" navbar navbar-right">
                <ul class="navbar-nav">

                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                
                <li class="nav-item">
                
                    <a class="nav-link" style="padding-right:50px">Seja Bem-Vindo <?php echo "<strong class='text text-warning'>".$nome."</strong>" ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>meus_anuncios">Meus Anúncios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>login/logout">Sair</a>
                </li>
                <?php else : ?>
               
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>cadastro">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>login">Login</a>
                </li>

                <?php endif; ?>

                    </ul>
                </div>
            </div>
     </nav>



  <?php $this->loadViewInTemplate($viewName, $viewData); ?>
 <!-- <div class="nav nav-expand-xm nav-dark bg-primary" >
<nav class="navbar navbar-expand-md navbar-dark bg-primary d-flex justify-content-between"
 style="position: fixed;bottom:0; width:100%;opacity: 0.8;margin-top:500px">

         <div class="container-fluid">
         <a class="navbar-brand" href="#">Anúncios Livres.</a>
            <div class=" navbar navbar-right">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="meus-anuncios.php">Portal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">Reclamações</a>
                </li>
                </ul>
          </div>-->


  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>