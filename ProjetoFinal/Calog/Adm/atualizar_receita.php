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
    $ingredientes = $row['rec_ingred'];
    $preparo = $row['rec_prep'];
    $descricao = $row['rec_desc'];

    // Exibir os campos preenchidos no formulário (usando o atributo "value" dos campos de input)
    echo '<form method="POST" action="salvar_atualizacao.php">';
    echo '<input type="hidden" name="pesquisa" value="' . $pesquisa . '">'; // Campo oculto para manter o nome original da receita

    echo '<label for="nome">Nome da Receita:</label>';
    echo '<input type="text" id="nome" name="nome" value="' . $nome . '" readonly><br>';

    echo '<label for="categoria">Categoria da Receita:</label>';
    echo '<input type="text" id="categoria" name="categoria" value="' . $categoria . '" readonly><br>';

    echo '<label for="ingredientes">Ingredientes:</label>';
    echo '<textarea id="ingredientes" name="ingredientes" rows="4">' . $ingredientes . '</textarea><br>';

    echo '<label for="preparo">Passos de Preparo:</label>';
    echo '<textarea id="preparo" name="preparo" rows="4">' . $preparo . '</textarea><br>';

    echo '<label for="descricao">Descrição da Receita:</label>';
    echo '<textarea id="descricao" name="descricao" rows="4">' . $descricao . '</textarea><br>';

    echo '<input type="submit" value="Salvar Alterações">';
    echo '</form>';
} else {
    echo "Receita não encontrada.";
}

$conn->close();
?>