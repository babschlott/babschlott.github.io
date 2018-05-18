<html>
  
  <head>
    
  </head>
  <body>
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "banco";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<br>Sistema conectado ao sgbd <br>";
  $email = $_GET["email"]; 
  $senha = sha1($_GET["senha"]);
    
$sql = "SELECT email, senha, nickname FROM formulario";
$result = $conn->query($sql);
$logado= false;
// checa se ha registro desse usuario e dessa senha
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $email && $row["senha"] == $senha){
          $logado = true;
          $nick = $row["nickname"];
        }
    }
} else {
    echo "Erro! usuario nao cadastrado";
}
    if($logado == true){
      echo "Bem vindo " . $nick . " vc esta logado";
      $txt = "listar.php";
      echo "<br> <button> <a href=\"".$txt."\">Listar usuarios</a> </button>";
      
    }
    else{
      header("Location: /desenvinternet/php/cadastro.php");
    }
$conn->close();
?>


    
  </body>
</html>