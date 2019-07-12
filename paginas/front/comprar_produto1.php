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

        <script>
    $(document).ready(function(){
        $(".preco_total").click(function(){
            $("td[name=preco_total]").val($(this).attr('value'));
        });
    });
        </script>
        
        <script>
        function exibirValorParcial(){
            var x = document.getElementById("quantidade_protudo").value;
            var y = document.getElementById("preco_produto").value;
            var k = x*y;
            $('#subtotal_produto').val(k.toFixed(2));
        }
        </script>
        
    </head>

    <body>
    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        
	        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><h5><a href='../back/logout.php' style="style='text-align:center"><strong>  </strong> </a></h5></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><h5 style='text-align:center' name="nome_user"> </h5></li>
            </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

    <div class="container" style="margin-top:2%">
        <form method="POST" action="checkout_produto.php?id=1&&name=1POTE"> 
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
                                        <div class="col-sm-2 hidden-xs"><img src="../../imagens/carvvo_1.png" alt="..." class="img-responsive" /></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin" name="POTE" value="POTE1">1 Pote de Carvvo</h4>
                                            <p>1 Pote de Carvvo, melhor opção para experimentar o produto. </p>
                                        </div>
                                    </div>
                                </td>
                                
                                <td data-th="Preço" name="preco_produto">
                                    <input type="text" class="form-control " value="97.01" id="preco_produto" name="preco_produto"  readonly='readonly' style="width:90px;height:35px">
                                </td>

                                <td data-th="Quantidade">
                                    <select class="form-control text-center"  id="quantidade_produto" name="quantidade_produto" style="width:80px;height:35px" required="requiored" >
                                        <option value="1">1</option> 
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>  
                                    </select>
                                </td>

                                <td data-th="Subtotal">
                                    <input type="text" class="form-control text-center"  id="subtotal_produto"  name="subtotal_produto"  readonly='readonly' style="width:90px;height:35px">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center" name="preco_total" id="preco_total"><strong></strong></td>
                            </tr>
                            <tr>
                                <td><a href="../front/home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Voltar para tela Inicial</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                
                                <td data-th="Total">
                                    <input type="text" class="form-control text-center"  id="total_produto"  name="total_produto"  readonly='readonly' style="width:90px">
                                </td>
                                <td><input type="submit"  name="comprar" id="comprar" class="btn btn-success btn-block" value="Checkout >>>"></td>
                            </tr>
                        </tfoot>
                    </table>
        </form>
            
                                
    </div>

    <script>
   
    </script>    

    <script>
    
    $('#quantidade_produto').on('input',function(){
    var preco_produto = $('#preco_produto').val(),
    quantidade_produto = $('#quantidade_produto').val();
     var result = (parseFloat(preco_produto) * parseFloat(quantidade_produto));
     $('#subtotal_produto').val(result );
     $('#total_produto').val(result );
     
    })
    </script>

    



    </body>

</html>