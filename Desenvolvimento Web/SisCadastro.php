<?php
// Configurações de conexão com o banco
$host = 'localhost';
$dbname = 'cadastroProduto';
$username = 'luci';
$password = '347883377';

// Conexão com o banco
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $codigo = $_POST['codigo'];

    // Insere os dados no banco
    try {
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco, :codigo)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        echo "Produto cadastrado com sucesso!";
    } catch (PDOException $e) {
        die("Erro ao cadastrar produto: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        <label for="preco">Preço:</label><br>
        <input type="text" id="preco" name="preco" required><br><br>
        <label for="codigo">Nome:</label><br>
        <input type="text" id="codigo" name="codigo" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
