<html>
  
  <head>
    
  </head>
  <body>
 <!DOCTYPE html>

<h1>Login </h1>
<form action="acesso.php">
  e-mail:<br>
  <input type="text" name="email">
  <br><br>
  senha:<br>
  <input type="password" name="senha">
  <br><br>
 
  <input type="submit" value="Entrar">
</form> 
   <?php
    
    $texto ="cadastro.php";
    echo "<a href=\"".$texto."\">Ainda nao possuo cadastro</a>";
  ?>   

    
  </body>
</html>
