<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/buscaCEP.js"></script>
    <script type="text/javascript" src="js/validaCPF.js"></script>

  </head>
  <body>
    <div class="container-fluid">
     
      <form action="cadastroFornecedor.php" method="POST">
      
        <div class="row">
          <div class="col bg-primary"></div>
            <div class="col-6">
              <div class="mb-3">
                <h1 class=" text-center">CADASTRO DE FORNCEDOR</h1>
                <label class="form-label">Nome da empresa</label>
                <input type="text" class="form-control" name="nome">

                <label class="form-label">CPF</label>
                <input type="number" class="form-control" name="cpf"
                 onblur="TestaCPF(this.value);">

                 <label class="form-label">RG</label>
                <input type="text" class="form-control" name="rg">

                <label class="form-label">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep"
                onblur="pesquisacep(this.value);">

                <label class="form-label">Rua</label>
                <input type="text" class="form-control" name="rua" id="rua">

                <label class="form-label">Nº</label>
                <input type="number" class="form-control" name="numero">

                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro">

                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade">

                <label class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" id="uf">

                <label class="form-label">Celular</label>
                <input type="number" class="form-control" name="celular">

                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">

                <label class="form-label">Formas de pagamento aceitas</label>
                <input type="text" class="form-control" name="pagamento">

                <label class="form-label">Conta bancária</label>
                <input type="text" class="form-control" name="banco">

                <label class="form-label">Política de descontos por volume</label>
                <input type="text" class="form-control" name="desconto">
              </div>
              <div class="mb-3 text-center">  
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <input type="reset" class="btn btn-danger" value="Limpar">
                <button type="button" class="btn btn-success" onclick="javascript:location.href ='menu.php';">Voltar</button>
              </div>
            </div>
          <div class="col bg-primary"></div>
        </div>
        
      </form>
    </div>
  </body>
</html>

