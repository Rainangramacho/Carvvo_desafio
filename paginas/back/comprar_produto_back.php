<?php
include "../../banco/config.php"; 
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['cpf']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  unset($_SESSION['cpf']);
  unset($_SESSION['nome']);
  header('location:login_front.php');
  
  }
$logado = $_SESSION['login'];
$logado_nome = $_SESSION['nome'];

if(isset($_POST['finalizar_compra'])){

    $nome_cliente = $_SESSION['nome'];
    $email_cliente = $_SESSION['login'];
    $numero_produto_pedido = $_POST['id_produto'];
    $nome_produto_pedido = $_POST['nome_produto'];
    $qtde_produto_pedido = $_POST['qtde_produto'];
    $preco_produto_pedido = $_POST['preco_produto'];
    $precototal_produto_pedido = $_POST['preco_total'];
    //$forma_pagamento = $_POST['forma_pagamento'];

    echo $nome_cliente ;
    echo $email_cliente ;
    echo $numero_produto_pedido ;
    echo $nome_produto_pedido ;
    echo $qtde_produto_pedido ;
    echo$preco_produto_pedido ;
    echo$precototal_produto_pedido ;
    //echo$forma_pagamento ;


    

          $sql = "INSERT INTO compras (nome_cliente,email_cliente,numero_produto_pedido,nome_produto_pedido,
          qtde_produto_pedido,preco_produto_pedido,precototal_produto_pedido) 
          VALUES ('$nome_cliente','$email_cliente','$numero_produto_pedido','$nome_produto_pedido',
          '$qtde_produto_pedido','$preco_produto_pedido','$precototal_produto_pedido')";

          $resultado2 = mysqli_query($mysqli,$sql);

          if($resultado2){
            echo 'Compra realizada com sucesso!';
            
          } else {
            echo 'Erro ao registrar o usuario!';
          }

}

?>