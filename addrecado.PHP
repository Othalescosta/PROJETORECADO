<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Recado</title>
    <link rel="stylesheet" href="css/index.css">
    
</head>
<body>
    <div class="recado">
<form id="formulario" action="RECADO.php" method="post">
        <br>
        <label for="">nome</label>

       
        <input type="text" name="nome" id="nome" placeholder="nome">

        <label for="">recado</label>
        <textarea type="text" name="recado" id="recado" placeholder="recado" style="resize:none ;width: 250px; height: 150px;" ></textarea>

        <br>
        <input type="submit" name="btnGerar" id="btnGerar" placeholder="Gerar" value="Submit">
        <br>
        </form>    
</div>  
<?php 
include("config.php");

$sql = "SELECT * FROM tbrecado ORDER BY nome DESC";
$res = $conn->query($sql) or die($conn->error);

while ($row = mysqli_fetch_assoc($res)) {
  echo"<br>";
  echo"<div class='recado'>";
  echo"<h1>".$row['nome']."</h1>";
  echo"<p>".$row['recado']."</p>";
  echo"</div>";
  echo"<br>";
}
?>



</body>
</html>