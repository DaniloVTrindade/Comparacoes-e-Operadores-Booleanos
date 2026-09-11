<?php
$idade = (int) readline("Digite a idade do atleta: ");

if ($idade < 7) {
    echo "Idade não permitida para inscrição.\n";
} elseif ($idade >= 7 && $idade <= 11) {
    echo "Categoria: Infantil\n";
} elseif ($idade >= 12 && $idade <= 16) {
    echo "Categoria: Juvenil\n";
} elseif ($idade >= 17 && $idade <= 59) {
    echo "Categoria: Adulto\n";
} else {
    echo "Categoria: Master\n";
}
?>
