<?php
    class pesquisaController extends controller {

        public function index() {
        
            $a= new Usuarios(); 
            $b= new Anuncios();
            $c= new Categorias();
            
            $total= $a->totalUsuarios();
            $posts= $b->totalAnuncios();
            $categorias= $c->getLista();

            if(!empty($_SESSION['cLogin'])) {
            $id_usuario= $_SESSION['cLogin'];
            $nome= $a->getUsuario($id_usuario);
            $dados['nome']= $nome;
              }
        
            if(empty($_GET['categoria']) || empty($_GET['valor'])) {
                echo "<div class='alert alert-danger'>Selecione Categoria e Valor para Pesquisa Avançada</div>";
                header("Refresh:3,index.php");
                exit;
            } else {
                $categoria=  $_GET['categoria'];
                $valor=  $_GET['valor'];
        
                $array=$b->filtroAnuncio($categoria, $valor); 

                $dados['array']= $array;

            }
            $dados['total']= $total;
            $dados['posts']= $posts;
            $dados['categorias']= $categorias;


        $this->loadTemplate('pesquisa', $dados);
        }
    }