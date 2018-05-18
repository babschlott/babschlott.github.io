<!DOCTYPE html>
<html>
 <meta charset="utf-8">
<body>
 
  <?php
    
    $texto ="index.php";
    echo "<a href=\"".$texto."\">Já possuo login</a>";
  ?>
  
  <!DOCTYPE html>


<form action="cadastrar.php">
  Nome completo:<br>
  <input type="text" name="nome">
  <br>
  e-mail:<br>
  <input type="text" name="email">
  <br><br>
  senha:<br>
  <input type="password" name="senha">
  <br><br>
  nickname: <br>
  <input type="text" name="nickname">
  <br><br>
  <input type="submit" value="Cadastrar">
</form> 


</body>
</html>

