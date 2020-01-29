<?php
class meus_anunciosController extends controller {

     public function index(){
    $dados= array();

    if (empty($_SESSION['cLogin'])) {
    header("Location:login.php");
    exit;
    }
    $user= new Anuncios();
    
    if(!empty($_SESSION['cLogin'])) {
    $id_usuario= $_SESSION['cLogin'];
    $usuario= new Usuarios();
    $nome= $usuario->getUsuario($id_usuario);

    $dados['nome']= $nome;
    }

    $anuncios=$user->getMeusAnuncios();

    $dados['anuncios']= $anuncios;

    $this->loadTemplate('meus_anuncios', $dados);
       
        }

    public function excluir($id) {
        
        $dados= array();
        $user= new  Anuncios();

        if(!empty($id)) {
        $user->deleteAnuncio($id);
        } else {
            echo "Erro..";
        }
        

        $this->loadTemplate('meus_anuncios', $dados);
    }
} 

?>