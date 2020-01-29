<?php
    class anunciarController extends controller {

    public function index() {
    
    $dados= array();
    if (empty($_SESSION['cLogin'])) {
    header("Location:".BASE_URL."login");
    exit;
    }
    
    $a =  new Anuncios();
    $b= new Usuarios();
    $user=  new Categorias();

    if(!empty($_SESSION['cLogin'])) {
      $id_usuario= $_SESSION['cLogin'];
      $nome= $b->getUsuario($id_usuario);
      $dados['nome']= $nome;

    }

    $todos= $user->getLista();

    if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
    $titulo= $_POST['titulo'];
    $valor= $_POST['valor'];
    $descricao= $_POST['descricao'];
    $estado= $_POST['estado'];
    $categoria= $_POST['categoria'];
    $id_usuario= $_SESSION['cLogin'];

    

    if($a->setAnuncio($titulo, $valor, $descricao, $estado, $categoria, $id_usuario)) { ?>
      <div class="container-fluid">

        <div class="alert alert-success">
        Anunciado com Sucesso !
        </div>

    <?php } else { ?>

        <div class="alert alert-danger">
        Erro Interno..Tente novamente mais tarde.
        </div>

   <?php } 
   
    $dados['titulo']= $titulo;
    $dados['valor']= $valor;
    $dados['descricao']= $descricao;
    $dados['estado']= $estado;
    $dados['categoria']= $categoria;


    }
    $dados['todos']= $todos;


    $this->loadTemplate('anunciar', $dados);
    }
 }

    

?>