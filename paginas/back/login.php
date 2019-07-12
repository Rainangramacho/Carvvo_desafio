<?php
session_start();

include "../../banco/config.php";
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


 if(isset($_POST["logar"])){

         $cpf=$_POST['cpf'];
         $login=$_POST['email'];
         $senha=sha1($_POST['password']);


         $sql =" SELECT * FROM usuario WHERE email = '$login' and cpf = '$cpf' and senha = '$senha' ";
         $resultado = mysqli_query($mysqli,$sql);

         $sql2 = "SELECT nome FROM usuario WHERE cpf = '$cpf' ";
         $resultado2 = mysqli_query($mysqli,$sql);

            if($resultado2){
               $registro = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);
               $nome = $registro['nome'];
          }


            if($resultado){

               $dados_usuario = mysqli_fetch_array($resultado);


               if(isset($dados_usuario['email'])&&($dados_usuario['senha'])&&($dados_usuario['cpf'])){

               $_SESSION['login'] = $login;
               $_SESSION['senha'] = $senha;
               $_SESSION['cpf'] = $cpf;
               $_SESSION['nome'] = $nome;
                  echo 'usuário existe';
                  header('Location:../front/home.php');


            }else{
               unset ($_SESSION['login']);
               unset ($_SESSION['senha']);
               unset ($_SESSION['cpf']);
               unset ($_SESSION['nome']);
                  header('Location:../front/login_front.php?erro=1');

       }


    }else{

           echo "Erro na execução da consulta, favor entrar em contato com o admin do site";


       }


        

        
        
    
}
    
?>



 