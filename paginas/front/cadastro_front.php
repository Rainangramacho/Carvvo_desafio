<html>

<?php
    include "../../banco/config.php";
        $erro_usuario	= isset($_GET['erro_usuario'])	? $_GET['erro_usuario'] : 0;
        $erro_email		= isset($_GET['erro_email'])	? $_GET['erro_email']	: 0;
    ?>

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>


<body>

  <form name="form" method="POST" action="../back/cadastro.php" class="form-horizontal">


    <div class="panel panel-primary">
      <div class="panel-heading">Cadastro de Cliente</div>

      <div class="panel-body">
        <div class="form-group">

          <div class="col-md-11 control-label">
            <p class="help-block">
              <h11>*</h11> Campo Obrigatório
            </p>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>
          <div class="col-md-3">
            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
          </div>
          <label class="col-md-2 control-label" for="Nome">Sobrenome <h11>*</h11></label>
          <div class="col-md-3">
            <input id="sobrenome" name="sobrenome" placeholder="" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
          <div class="col-md-2">
            <input id="cpf" name="cpf" class="form-control input-md" data-inputmask="'mask': '999 999 999-99'" required="required" type="text" >
          </div>

          <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>
          <div class="col-md-2">
            <input id="datanasc" name="datanasc"  class="form-control input-md" required="" type="text" maxlength="10" >
              
          </div>

          <label class="col-md-1 control-label" for="Nome">RG<h11>*</h11></label>
          <div class="col-md-2">
            <input id="rg" name="rg" class="form-control input-md" data-inputmask="'mask': '99.999.999-99'" required="required" type="text">
              
          </div>

          <!-- Multiple Radios (inline) -->

          <label class="col-md-1 control-label" for="radios"> </label>
          <div class="col-md-4">

          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Celular <h11>*</h11></label>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
              <input id="celular" name="celular" class="form-control" required="required" type="text" >
            </div>
          </div>

          <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="telefone" name="telefone" class="form-control" required="required" type="text" >
            </div>
          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="email" name="email" class="form-control" placeholder="Email" required="required" type="email" > 
                

            </div>
          </div>

          <label class="col-md-2 control-label" for="prependedtext">Confirmar email <h11>*</h11></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Confirme seu email"
                required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Senha <h11>*</h11></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="senha" name="senha" class="form-control" placeholder="Senha" required="" type="password">

            </div>
          </div>

          <label class="col-md-2 control-label" for="prependedtext">Confirmar senha <h11>*</h11></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="confirmarsenha" name="confirmarsenha" class="form-control" placeholder="Confirme sua senha"
                required="" type="password">

            </div>
          </div>
        </div>


        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
          <div class="col-md-2">
            <input id="cep" name="cep"  class="form-control input-md" required="required" >
              
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Rua</span>
              <input id="endereco" name="endereco" class="form-control" placeholder="" required="" readonly="readonly"
                type="text">
            </div>

          </div>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Nº <h11>*</h11></span>
              <input id="numero" name="numero" class="form-control" placeholder="" required="" type="text">
            </div>

          </div>

          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Bairro</span>
              <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly"
                type="text">
            </div>

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="prependedtext"></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Cidade</span>
              <input id="cidade" name="cidade" class="form-control" placeholder="" required="" readonly="readonly"
                type="text">
            </div>

          </div>

          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Estado</span>
              <input id="estado" name="estado" class="form-control" placeholder="" required="" readonly="readonly"
                type="text">
            </div>

          </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="Cadastrar"></label>
          <div class="col-md-8">
            <button name="cadastro2" id="cadastro2" class="btn btn-success" type="Submit">Cadastrar</button>
            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
          </div>
        </div>

      </div>
    </div>

    <?php
    if($erro_usuario){ // 1/true 0/false
                echo '<font style="color:#FF0000">Usuário já existe</font>';
            }
        ?>

    <?php
    if($erro_email){ // 1/true 0/false
                echo '<font style="color:#FF0000">Email já existe</font>';
            }
        ?>

    <br>
  </form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>
  <script  src="js/index.js"></script>

  <script type="text/javascript">
    $("#cep").focusout(function () {
      //Início do Comando AJAX
      $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CEP
        url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function (resposta) {
          //Agora basta definir os valores que você deseja preencher
          //automaticamente nos campos acima.
          $("#endereco").val(resposta.logradouro);
          $("#complemento").val(resposta.complemento);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#estado").val(resposta.uf);
          //Vamos incluir para que o Número seja focado automaticamente
          //melhorando a experiência do usuário
          $("#numero").focus();
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(":input").inputmask();

    $("#celular").inputmask({"mask": "(99) 99999-9999"});
    $("#telefone").inputmask({"mask": "(99) 9999-9999"});
    $("#cep").inputmask({"mask": "99999-999"});
    $("#datanasc").inputmask({"mask": "99/99/9999"});

  </script>




</body>

</html>