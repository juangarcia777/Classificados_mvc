<?php
    class loginController extends controller {

        public function index() {

        $user=  new Usuarios();

        $dados= array();

        if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email= $_POST['email'];
        $senha= MD5($_POST['senha']);
        
        if($user->login($email, $senha)) {
            header("Location:".BASE_URL."home");
        } else {
            echo "<script>alert('Usuario e/ou Senha Incorretas')</script>";
        }


        }
        $this->loadTemplate('login', $dados);
    }

    public function logout() {
        $dados= array();
        session_start();
        unset($_SESSION['cLogin']);
        header("Location: ".BASE_URL.'login');
        exit;
        
       $this->loadTemplate('login', $dados);

      }
}

?>