<?php 


include "../../banco/config.php"; 
//serve para mostrar situa��es em que ocorra erro no login do usuario, passando o erro para a URL via GET
$conectado = isset($_GET['conectado']) ? $_GET['conectado'] : 0;
?>
<html>

    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>


    </style>
    </head>

    <body>
    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        
	        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><h5><a href='../back/logout.php' style="style='text-align:center"><strong></strong> </a></h5></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><h5 style='text-align:center' name="nome_user"> </li>
            </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

    <div class="container" style="margin-top:2%">
        <form method="POST" action="checkout_produto.php?id=2">
            <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:200%">Produto</th>
                                <th style="width:40%">Preço</th>
                                <th style="width:15%">Quantidade</th>
                                <th style="width:30%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td data-th="Produto">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="../../imagens/carvvo_3.png" alt="..." class="img-responsive" /></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin" name="POTE" value="POTE2">2 Potes de Carvvo</h4>
                                            <p>2 Potes de Carvvo, boa opção para começar o tratamento dentário. </p>
                                        </div>
                                    </div>
                                </td>

                                <td data-th="Preço" name="preco_produto">$150.00</td>
                                
                                    <td data-th="Quantidade">
                                        <input type="number" class="form-control text-center" value="99" name="quantidade_produto">
                                    </td>
                                <td data-th="Subtotal" class="text-center">150.00</td>

                                    <td class="actions" data-th="">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                                    </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center" name="preco_total"><strong>Total 1.99</strong></td>
                            </tr>
                            <tr>
                                <td><a href="../front/home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Voltar para tela Inicial</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total $150.00</strong></td>
                                <td><input type="submit"  name="comprar" id="comprar" class="btn btn-success btn-block" value="Checkout >>>"></td>
                            </tr>
                        </tfoot>
                    </table>
        </form>
    </div>





    </body>

</html>