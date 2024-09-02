<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/buscaCEP.js"></script>
    <script type="text/javascript" src="js/validaCPF.js"></script>

  </head>
  <body>
    <div class="container-fluid">
     
      <form action="cadastroProduto.php" method="POST">
      
        <div class="row">
          <div class="col bg-primary"></div>
            <div class="col-6">
              <div class="mb-3">
                <h1 class=" text-center">CADASTRO DE PRODUTO</h1>

                <label class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nome">
              
                <label class="form-label">Descrição do produto</label>
                <input type="text" class="form-control" name="descricao">

                <label class="form-label">Especificações técnicas</label>
                <input type="text" class="form-control" name="especificacoes">

                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria">
                
                <label class="form-label">Número de série</label>
                <input type="number" class="form-control" name="serie">

                <label class="form-label">Quantidade em estoque</label>
                <input type="number" class="form-control" name="estoque">

                <label class="form-label">Preço unidade</label>
                <input type="text" class="form-control" name="preco">

                <label class="form-label">Contato</label>
                <input type="number" class="form-control" name="contato">

                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
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

