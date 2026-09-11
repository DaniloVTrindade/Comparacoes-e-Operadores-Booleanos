<?php
$nome = (string) readline("Nome do aluno: ");
$nota1 = (float) readline("Primeira nota: ");
$nota2 = (float) readline("Segunda nota: ");
$nota3 = (float) readline("Terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

$aprovado = $media >= 7;
$recuperacao = $media >= 5 && $media < 7;

echo "Aluno: $nome\n";
echo "Média: " . number_format($media, 2) . "\n";

if ($aprovado) {
    echo "Situação: Aprovado\n";
} elseif ($recuperacao) {
    echo "Situação: Recuperação\n";
} else {
    echo "Situação: Reprovado\n";
}
?>
