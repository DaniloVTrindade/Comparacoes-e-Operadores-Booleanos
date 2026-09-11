<?php
$valorPedido = (float) readline("Digite o valor do pedido: ");
$cartao = (string) readline("Cliente possui cartão? (s/n): ");
$pix = (string) readline("Cliente possui Pix? (s/n): ");

$temCartao = $cartao === "s";
$temPix = $pix === "s";
$pagamentoAceito = $temCartao || $temPix;

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ $valorPedido\n";
    echo "Pedido aprovado\n";
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível.\n";
}
?>
