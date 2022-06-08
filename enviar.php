<?php

$nome = $_POST['name'];
$data_nascimento = $_POST['data'];
$email = $_POST['email'];
$senha = $_POST['senha'];
foreach ($ as $val) {
    $msg .= $val . ", ";
}

echo "Confira os dados inseridos: Nome: $nome, Data de nascimento: $data, E-mail $email Senha: $senha.";

?>