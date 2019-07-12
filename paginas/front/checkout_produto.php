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
$logado_cpf = $_SESSION['cpf'];

include "../../banco/config.php"; 
//serve para mostrar situa��es em que ocorra erro no login do usuario, passando o erro para a URL via GET
$conectado = isset($_GET['conectado']) ? $_GET['conectado'] : 0;
$id_produto = $_GET['id'];
$nome_produto = $_GET['name'];
$qtde_produto = $_POST['quantidade_produto'];
$preco_produto = $_POST['preco_produto'];
$subtotal_produto = $_POST['subtotal_produto'];

$sql2 = "SELECT nome,sobrenome FROM usuario WHERE cpf = '$logado_cpf' ";
$resultado2 = mysqli_query($mysqli,$sql2);

   if($resultado2){
      $registro = mysqli_fetch_array($resultado2, MYSQLI_ASSOC);
      $nome_cliente = $registro['nome'];
      $sobrenome_cliente = $registro['sobrenome'];
 }
?>

<html>

  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body>

  <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../front/css/check.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="POST" action="../back/comprar_produto_back.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"> Nome do produto</label>
            <input type="text" name="nome_produto" value="<?php echo $nome_produto;?>" readonly="readonly">
            <input type="hidden"  id="id_produto" name="id_produto" value="<?php  $id_produto;?>" readonly="readonly">

            <label for="email"> Quantidade</label>
            <input type="text" name="qtde_produto" value="<?php echo $qtde_produto;?>" readonly="readonly">

            <label for="adr"> Preço</label>
            <input type="text" name="preco_produto" value="<?php echo $preco_produto;?>" readonly="readonly"> 

            <label for="city">Subtotal</label>
            <input type="text" name="preco_total" value="<?php echo 'R$ '; echo  $subtotal_produto;?>" readonly="readonly">

            <div class="row">
              <div class="col-50">
                <label for="state">Nome do Cliente</label>
                <input type="text" id="nome_cliente" name="nome_cliente" placeholder="" value="<?php echo $nome_cliente;?>" readonly="readonly">
              </div>
              <div class="col-50">
                <label for="zip">Sobrenome </label>
                <input type="text" id="sobrenome_cliente" name="sobrenome_cliente" placeholder="" value="<?php echo $sobrenome_cliente;?>" readonly="readonly">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="nome_cartao" name="nome_cartao" value="<?php echo $nome_cliente;?>">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="finalizar_compra" id="finalizar_compra">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>



  </body>

  



</html>