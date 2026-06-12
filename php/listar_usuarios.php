<?php

require_once("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários - SysFit</title>
    <link rel="stylesheet" href="CSS/usuario.css">

</head>
<body>

<h1>Usuários Cadastrados</h1>

<?php

while($usuario = mysqli_fetch_assoc($resultado)) {

    $idade = date("Y") - date("Y", strtotime($usuario["data_nascimento"]));

    $imc = $usuario["peso"] / ($usuario["altura"] * $usuario["altura"]);

    echo "<div class='card'>";

    echo "<h2" . $usuario["nome"] . "</h2>";

    echo "<p>" . $usuario["email"] . "</p>";

    echo "<p>" . $idade . " anos</p>";

    echo "<p>" . $usuario["peso"] . " kg</p>";

    echo "<p>" . $usuario["altura"] . " m</p>";

    echo "<p>" . number_format($imc, 2) . "</p>";

    echo "</tr>";
}

?>

</table>

</body>
</html>