<?php

include "includes/header.php";
require_once "modulos/funcoes.php";

if (
    isset($_POST["nome1"], $_POST["nome2"]) &&
    !empty($_POST["nome1"]) &&
    !empty($_POST["nome2"])
) {

    $nome1 = $_POST["nome1"];
    $nome2 = $_POST["nome2"];

    $compatibilidade = calcularCompatibilidade($nome1, $nome2);

    echo "<h3>Compatibilidade entre {$nome1} e {$nome2}: {$compatibilidade}%</h3>";

} else {

    echo "<h3>Preencha os dois nomes.</h3>";

}

include "includes/menu.php";
include "includes/footer.php";
?>