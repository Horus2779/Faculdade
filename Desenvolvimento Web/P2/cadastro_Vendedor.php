<?php

// Conectar ao banco de dados MySQL
$db = new mysqli("localhost", "Luci_JR", "arara", "tabela_vendedor");

// Verificar se a conexão foi bem-sucedida
if ($db->connect_error) {
    die("Erro de conexão com o banco de dados: " . $db->connect_error);
}

// Receber os dados do formulário
$nome = $_POST["Nome"];
$data_nascimento = $_POST["Data_nascimento"];
$telefone = $_POST["Telefone"];
$cpf = $_POST["CPF"];
$endereco = $_POST["Endereco"];
$email = $_POST["Email"];
$data_de_admissao = $_POST["Data_de_admissão"];
$regional = $_POST["Regional"];

//Consulta SQL para inserir os dados na tabela
$sql = "INSERT INTO php (Nome, Data_nascimento, Telefone, CPF, Endereco, Email, Data_de_admissão, Regional) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $db->prepare($sql);

// Vincular os parâmetros da consulta aos dados do formulário
$stmt->bind_param("ssssssi", $nome, $data_nascimento, $telefone, $cpf, $endereco, $email, $data_de_admissao, $regional);


if ($stmt->execute()) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar dados: " . $db->error;
}


$stmt->close();
$db->close();

?>
