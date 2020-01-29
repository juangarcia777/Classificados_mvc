<?php
    class homeController extends controller {
        
        public function index() {

          $dados= array(
          );
          $a= new Usuarios(); 
          $b= new Anuncios();
          $c= new Categorias();
          
          $total= $a->totalUsuarios();
          $posts= $b->totalAnuncios();

          if(!empty($_SESSION['cLogin'])) {
            $id_usuario= $_SESSION['cLogin'];
            $nome= $a->getUsuario($id_usuario);
            $dados['nome']= $nome;

          }
          
      
          $p= 1;
          if(isset($_GET['p']) && !empty($_GET['p'])) {
              $p=  $_GET['p'];
          }
      
          $por_pagina=1 ;
          $total_paginas= ceil($posts / $por_pagina);
          $ultimos= $b->getUltimosAnuncios($p, 4);
      
          $categorias= $c->getLista(); 

          $dados['posts']= $posts;
          $dados['total']= $total;
          $dados['categorias']= $categorias;
          $dados['ultimos']= $ultimos;
          $dados['total_paginas']= $total_paginas;

            $this->loadTemplate('home', $dados); 
        }

       
        
    }
?>