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

// Obter o nome da receita pesquisada
$pesquisa = $_POST['pesquisa'];

// Consultar o banco de dados para obter os detalhes da receita
$query = "SELECT * FROM receitas WHERE rec_titulo = '$pesquisa'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Preencher os campos do formulário com os detalhes da receita
    $nome = $row['rec_titulo'];
    $categoria = $row['rec_categ'];

    // Exibir os campos preenchidos no formulário
    echo '<form method="POST" action="confirmar_remocao.php">';
    echo '<input type="hidden" name="pesquisa" value="' . $pesquisa . '">'; // Campo oculto para manter o nome original da receita

    echo '<label for="nome">Nome da Receita:</label>';
    echo '<input type="text" id="nome" name="nome" value="' . $nome . '" readonly><br>';

    echo '<label for="categoria">Categoria da Receita:</label>';
    echo '<input type="text" id="categoria" name="categoria" value="' . $categoria . '" readonly><br>';

    echo '<input type="submit" value="Remover Receita">';
    echo '</form>';
} else {
    echo "Receita não encontrada.";
}

$conn->close();
?>=