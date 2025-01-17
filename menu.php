<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
    
    background-image: url('https://t2.tudocdn.net/207494?w=1920');
  }
.navbar {
  overflow: hidden;
  border-radius: 10px;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 35px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: yellow;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
</head>
<body style="background-color:white;">

<div class="navbar">
  <a href="menu.php">
    <img src="https://logodownload.org/wp-content/uploads/2014/07/shell-logo-0.png" width="100px">
  </a>
  <div class="dropdown" style="margin-left: 100px; margin-top: 15px;">
    <button class="dropbtn" onclick="myFunction()">CADASTRO
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="formCadCliente.php">CLIENTE</a>
      <a href="formCadFuncionario.php">FUNCIONARIO</a>
      <a href="formCadFornecedor.php">FORNECEDOR</a>
      <a href="formCadProduto.php">PRODUTO</a>
    </div>
  </div> 
  <div class="dropdown" style="margin-left: 100px; margin-top: 15px;">
    <button class="dropbtn" onclick="myFunction1()">CONSULTA
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown1">
      <a href="consultaCliente.php">CLIENTE</a>
      <a href="consultaFuncionario.php">FUNCIONARIO</a>
      <a href="consultaFornecedor.php">FORNECEDOR</a>
      <a href="consultaProduto.php">PRODUTO</a>
    </div>
  </div>
  <a href="index.php" style="margin-left: 100px; margin-top: 35px;">SAIR</a>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown1 = document.getElementById("myDropdown1");
    if (myDropdown1.classList.contains('show')) {
      myDropdown1.classList.remove('show');
    }
  }
}
</script>
</body>
</html>
