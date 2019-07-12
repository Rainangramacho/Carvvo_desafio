<?php 
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

include "../../banco/config.php"; 
//serve para mostrar situa��es em que ocorra erro no login do usuario, passando o erro para a URL via GET
$conectado = isset($_GET['conectado']) ? $_GET['conectado'] : 0;
?>


<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body>

  <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        
	        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><h5><a href='../back/logout.php' style="style='text-align:center"><strong> Sair </strong> </a></h5></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><h5 style='text-align:center'> <?php echo "$logado_nome, Voce Esta logado!" ?>&nbsp &nbsp</h5></li>
            </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

      <div class="container">
        <a href='../../paginas/front/animacao/tela_de_carregamento_para_comprar1.html'>  
          <img src="../../imagens/carvvo_1.png" class="img-rounded" alt="Carrvo 1 Pote" width="310" height="615"> 
        </a>
        &nbsp &nbsp &nbsp 
        <a href='../../paginas/front/animacao/tela_de_carregamento_para_comprar2.html'>  
          <img src="../../imagens/carvvo_2.png" class="img-rounded" alt="Carrvo 2 Potes" width="310" height="615"> 
        </a>
      &nbsp &nbsp &nbsp 
        <a href='../../paginas/front/animacao/tela_de_carregamento_para_comprar3.html'>  
          <img src="../../imagens/carvvo_3.png" class="img-rounded" alt="Carrvo 3 Potes" width="310" height="615"> 
        </a>
      </div>
  
  </body>

</html>