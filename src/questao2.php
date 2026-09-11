<?php
$idade = (int) readline("Digite sua idade: ");
$ingresso = (string) readline("Possui ingresso? (s/n): ");

$temIngresso = $ingresso === "s";
$acessoLiberado = ($idade >= 18) && $temIngresso;

if ($acessoLiberado) {
    echo "Entrada liberada\n";
} else {
    echo "Acesso negado\n";
}
?>
