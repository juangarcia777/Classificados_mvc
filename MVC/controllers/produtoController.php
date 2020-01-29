<?php

    class produtoController extends controller {

        public function index() {

        }
        public function abrir($id) {

            $b= new Anuncios();
            $a= new Usuarios();
             
            $dados= array();

            if(empty($id)) {
                header("Location: ".BASE_URL);
                exit;
            }
            
             $array= $b->getInfo($id);

             $dados['array']= $array;
            

             $this->loadView('produto', $dados);
            

        }

      
    }

?>