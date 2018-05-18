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

$sql = "SELECT nome, email, nickname FROM formulario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table> <tr> <th> Nome </th> <th> E-mail </th> <th> Nickname </th> </tr> <tr> <td>" . $row["nome"]. "</td> <td>" .$row["email"]. "</td> <td>" .$row["nickname"]. "</td> </tr> </table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


    
  </body>
</html>
