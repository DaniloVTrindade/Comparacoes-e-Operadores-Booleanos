<?php
$nome = (string) readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$renda = (float) readline("Renda mensal: ");
$tempoEmprego = (int) readline("Tempo de emprego (meses): ");
$negativado = (string) readline("Está negativado? (s/n): ");

$idadePermitida = ($idade >= 18) && ($idade <= 65);
$rendaOuEstabilidade = ($renda >= 2000) || ($tempoEmprego >= 24);
$estaNegativado = $negativado === "s";

$creditoAprovado = ($idadePermitida) && ($rendaOuEstabilidade) && (!$estaNegativado);

if ($idadePermitida) {
    echo "Idade permitida: atendida\n";
} else {
    echo "Idade permitida: não atendida\n";
}

if ($rendaOuEstabilidade) {
    echo "Renda ou estabilidade: atendida\n";
} else {
    echo "Renda ou estabilidade: não atendida\n";
}

if (!$estaNegativado) {
    echo "Nome limpo: atendida\n";
} else {
    echo "Nome limpo: não atendida\n";
}

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para $nome\n";
} else {
    echo "Resultado: Crédito negado para $nome\n";
}
?>
