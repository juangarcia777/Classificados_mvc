<?php
 class cadastroController extends controller {

    public function index() {
        $dados= array();
    $user=  new Usuarios();
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $senha= md5($_POST['senha']);
        $telefone= $_POST['tel'];

        if(!empty($nome) && !empty($email) && !empty($senha)) {
        
            if($user->cadastrar($nome, $email, $senha, $telefone) == true) {
             ?>
             
             <div class="alert alert-success">
            Usuário cadastrado com Sucesso. <a class="alert-link" href="<?php echo BASE_URL ?>login">Faça o Login !</a> 
            </div>
    <?php
         }
    
        } else { 
            ?>

        <div class="alert alert-warning">
         Preencha todos os Campos !
        </div>
    <?php 
        }
    }
    ?>
    <?php

    $this->loadTemplate('cadastro', $dados);

    }
 }
 ?>