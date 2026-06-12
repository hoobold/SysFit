<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - SysFit</title>
</head>
<body>

    <h1>Cadastro de Usuário</h1>

    <form action="" method="POST">

        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label> E-mail:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" required><br><br>

        <label>Peso (kg):</label><br>
        <input type="number" step="0.01" name="peso" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

<?php

require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nascimento = $_POST["data_nascimento"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $sql = "INSERT INTO usuarios
            (nome, email, data_nascimento, peso, altura)
            VALUES
            ('$nome', '$email', '$data_nascimento', '$peso', '$altura')";

    if (mysqli_query($conexao, $sql)) {
        echo "<p>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p>Erro: " . mysqli_error($conexao) . "</p>";
    }
}

?>

</body>
</html>