<?php
/* Recebendo as variávis do formulário */
$filme = isset($_Post ["filme"]) ? $_Post ["filme"] :"";

$categoria ["acao"]     = isset($_POST ["acao"])     ? $_POST ["acao"]     : "";
$categoria ["aventura"] = isset($_POST ["aventura"]) ? $_POST ["aventura"] : "";
$categoria ["comedia"]  = isset($_POST ["comedia"])  ? $_POST ["comedia"]  : "";
$categoria ["drama"]    = isset($_POST ["drama"])    ? $_POST ["drama"]    : "";
$categoria ["infantil"] = isset($_POST ["infantil"]) ? $_POST ["infantil"] : "";
$categoria ["suspense"] = isset($_POST ["suspense"]) ? $_POST ["suspense"] : "";
$categoria ["terror"]   = isset($_POST ["terror"])   ? $_POST ["terror"]   : "";
?>

<!--/* Exibindo o html com as informações enviadas pelo formulária */-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do filme</title>
</head>
<body>
    <p>Filmes: <?php echo $filme;?></p>
    <p> Categorias: </p>
    <ul>
    <?php 
    foreach ($categoria as $key => $value) {
        if ($value) {
            echo  "<li>" . $key. "</li> <br>";
        }
    }
?>
</ul>

</body>
</html>

