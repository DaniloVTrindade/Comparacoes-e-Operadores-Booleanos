<?php
$numero1 = (int) readline("Digite o primeiro número: ");
$numero2 = (int) readline("Digite o segundo número: ");

if ($numero1 > $numero2) {
    echo "O primeiro número é maior.\n";
} elseif ($numero1 < $numero2) {
    echo "O segundo número é maior.\n";
} else {
    echo "Os dois números são iguais.\n";
}
?>
