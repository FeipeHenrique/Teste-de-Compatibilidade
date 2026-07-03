
<?php

function limparNome($nome)
{
    // Remove acentos
    $nome = iconv('UTF-8', 'ASCII//TRANSLIT', $nome);

    // Remove espaços
    $nome = str_replace(' ', '', $nome);

    // Converte para maiúsculas
    $nome = strtoupper($nome);

    return $nome;
}

function calcularCompatibilidade($nome1, $nome2)
{
    $nome1 = limparNome($nome1);
    $nome2 = limparNome($nome2);

    $letras1 = str_split($nome1);
    $letras2 = str_split($nome2);

    // Elimina letras iguais na mesma posição
    $tam = min(count($letras1), count($letras2));

    for ($i = 0; $i < $tam; $i++) {
        if ($letras1[$i] == $letras2[$i]) {
            unset($letras1[$i]);
            unset($letras2[$i]);
        }
    }

    $letrasRestantes = count($letras1) + count($letras2);

    $compatibilidade = 100 - ($letrasRestantes * 5);

    if ($compatibilidade < 0) {
        $compatibilidade = 0;
    }

    return $compatibilidade;
}