<?php
include "modulos/funcoes.php";
include "includes/header.php";

$nome1 = isset($_POST['nome1']) ? trim($_POST['nome1']) : '';
$nome2 = isset($_POST['nome2']) ? trim($_POST['nome2']) : '';

if ($nome1 === '' || $nome2 === '') {
    header('Location: index.php');
    exit;
}

$porcentagem = calcularCompatibilidade($nome1, $nome2);
?>

<div class="container">
    <div class="coracao-resultado">
        <svg class="coracao-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path fill="#FF4F81" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
</svg>
        <span class="porcentagem"><?php echo $porcentagem; ?>%</span>
    </div>

    <div class="info-box">
        A porcentagem de compatibilidade entre os dois nomes é <strong><?php echo $porcentagem; ?>%</strong>
    </div>
</div>

<?php
include "includes/menu.php";
include "includes/footer.php";
?>
