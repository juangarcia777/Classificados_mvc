<?php
    class editarController extends controller {

        public function edit($id) {
        
        
    
        $dados= array();
        $a =  new Anuncios();
        $b= new Usuarios();

        if(!empty($_SESSION['cLogin'])) {
            $id_usuario= $_SESSION['cLogin'];
            $nome= $b->getUsuario($id_usuario);
            $dados['nome']= $nome;

          }
    
    if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
        $titulo= $_POST['titulo'];
        $valor= $_POST['valor'];
        $descricao= $_POST['descricao'];
        $estado= $_POST['estado'];
        $categoria= $_POST['categoria'];
        
        if(isset($_FILES['fotos'])) {
        $fotos=  $_FILES['fotos'];
        } else {
            $fotos= array();
        }
    
    if($a->editAnuncio($titulo, $valor, $descricao, $estado, $categoria,$fotos,$id)) {
    ?>

    <div class="alert alert-success">Produto editado com Sucesso!</div>
    <?php
        }
       
    }

       
        $array= $a->getInfo($id);
        

        $user=  new Categorias();
        $todos= $user->getLista();

        $dados['todos']= $todos;
        $dados['array']= $array;

        $this->loadTemplate('editar', $dados);
        
        }

        public function exclui($id) {
            $dados= array();
            $user= new Anuncios();

            $id_anuncio=$user->excluiFoto($id);
            header("Location:".BASE_URL.'editar/edit/'.$id_anuncio);

            $this->loadTemplate('editar', $dados);
    
        }
    }
