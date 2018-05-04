<html>
<body>

Bem vindo <?php echo $_GET["nome"]; ?><br>
Tome cuidado, agora sei seu e-mail: <?php echo $_GET["email"]; ?>
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
echo "<br>Sistema conectado ao sgbd";
  $nome = $_GET["nome"];
  $senha = sha1($_GET["senha"]);
  $email = $_GET["email"];
  $nickname = $_GET["nickname"];
  
  $sql = "INSERT INTO formulario (nome, email, senha, nickname)
VALUES ('".$nome."', '".$email."', '".$senha."', '".$nickname."')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastrado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
  ?>

</body>
</html>

