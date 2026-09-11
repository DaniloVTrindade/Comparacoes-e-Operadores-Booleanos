<?php
$usuario = (string) readline("Usuário: ");
$senha = (string) readline("Senha: ");

$usuarioCorreto = strcasecmp($usuario, "admin") === 0;
$senhaCorreta = $senha === "php2026";
$credenciaisValidas = $usuarioCorreto && $senhaCorreta;

if (!$credenciaisValidas) {
    echo "Usuário ou senha inválidos.\n";
} else {
    echo "Bem-vindo, admin!\n";
}
?>
