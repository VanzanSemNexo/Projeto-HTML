<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_receitas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obter o ID da receita da URL
$idReceita = $_GET['id'];

// Consultar o banco de dados para obter os detalhes da receita
$query = "SELECT * FROM receitas WHERE id_receitas = $idReceita";
$result = $conn->query($query);

// Verificar se a receita foi encontrada
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $nome = $row['rec_titulo'];
    $categoria = $row['rec_categ'];
    $ingredientes = $row['rec_ingred'];
    $preparo = $row['rec_prep'];
    $descricao = $row['rec_desc'];
    $imagem = $row['rec_img'];

    // Exibir os detalhes da receita
    echo "<h2>$nome</h2>";
    echo "<p>Categoria: $categoria</p>";
    echo "<p>Ingredientes: $ingredientes</p>";
    echo "<p>Passos de Preparo: $preparo</p>";
    echo "<p>Descrição: $descricao</p>";
    echo "<img src='$imagem' alt='Imagem da Receita'>";
} else {
    echo "Receita não encontrada.";
}

$conn->close();
?>