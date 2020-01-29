<?php
    class galeriaController extends controller {

        public function index() {
        
            $this->loadTemplate('galeria', $dados);
        }
    }

?>