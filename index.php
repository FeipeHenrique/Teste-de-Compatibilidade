<?php
include "includes/header.php";
?>
<h2>Teste dois nomes para ver se o amor está no ar ❤️</h2>
<form action="procesa.php" method="post">
    <input type="text" name="nome1" placeholder="Digite o primeiro nome">
    <input type="text" name="nome2" placeholder="Digite o segundo nome">
    <input type="submit" value="Verificar Compatibilidade">
</form>
<?php
include "includes/footer.php";
?>