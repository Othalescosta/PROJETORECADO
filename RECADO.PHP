<?php
include("config.php");

// Obtém os dados do formulário
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$recado = mysqli_real_escape_string($conn, $_POST['recado']);


// Insere os dados no MySQL
$query = "INSERT INTO tbrecado (nome, recado) VALUES ('$nome', '$recado')";
$resultado = mysqli_query($conn, $query);

// Verifica se houve erro na inserção
if (!$resultado) {
    die("Erro ao inserir os dados no MySQL: " . mysqli_error($conexao));
}

// Fecha a conexão com o MySQL
mysqli_close($conn);

// Redireciona para a página de sucesso
header("Location: portal.php");

?>
