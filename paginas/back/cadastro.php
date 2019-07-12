<?PHP 
session_start();
include "../../banco/config.php";

if(isset($_POST["cadastro2"])){
        
        $nome=$_POST['nome'];   
        $sobrenome=$_POST['sobrenome'];
        $cpf=$_POST['cpf'];
        $celular=$_POST['celular'];
        $email=$_POST['email'];
        $confirmar_email=$_POST['confirmar_email'];
        $senha=sha1($_POST['senha']);
        $confirmar_senha=sha1($_POST['confirmar_senha']);
        $cep=$_POST['cep'];
        $endereco=$_POST['endereco'];
        $numero=$_POST['numero'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];


        $usuario_existe = false;
        $email_existe = false;
    
        //verificar se o usuário já existe
        $sql = " select * from usuario where nome = '$nome' ";
        if($resultado_select1 = mysqli_query($mysqli, $sql)) {
    
            $dados_usuario1 = mysqli_fetch_array($resultado_select1);
    
            if(isset($dados_usuario1['nome'])){
                $usuario_existe = true;
            }
        } else {
            echo 'Erro ao tentar localizar o registro de usuário';
        }
    
        //verificar se o e-mail já existe
        $sql = " select * from usuario where email = '$email' ";
        if($resultado_select2 = mysqli_query($mysqli, $sql)) {
    
            $dados_usuario2 = mysqli_fetch_array($resultado_select2);
    
            if(isset($dados_usuario2['email'])){
                $email_existe = true;
            } 
        } else {
            echo 'Erro ao tentar localizar o registro de email';
        }
    
    
        if($usuario_existe || $email_existe){
    
            $retorno_get = '';
    
            if($usuario_existe){
                $retorno_get.= "erro_usuario=1&";
            }
    
            if($email_existe){
                $retorno_get.= "erro_email=1&";
            }
    
            header('Location: ../front/cadastro_front.php?'.$retorno_get);
            die();
        }


        $sql = "INSERT INTO usuario(nome,sobrenome,cpf,celular,email,senha,cep,endereco,numero,bairro,cidade,estado)
        VALUES ('$nome','$sobrenome','$cpf','$celular','$email','$senha','$cep','$endereco','$numero','$bairro','$cidade','$estado')";
        $resultado = mysqli_query($mysqli,$sql);


	if($resultado){
		echo 'Usuario registrado com sucesso!';
		header('Location:../front/login_front.php');
	} else {
		echo 'Erro ao registrar o usuario!';
	}
        
    }
    
?>