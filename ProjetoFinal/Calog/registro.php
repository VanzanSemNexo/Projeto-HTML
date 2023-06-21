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

// Obter os dados do formulário de registro
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar_senha'];

// Verificar se o e-mail já está registrado no banco de dados
$query = "SELECT * FROM admin WHERE adm_email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // E-mail já registrado
    echo "O e-mail informado já está registrado.";
} elseif ($senha !== $confirmarSenha) {
    // As senhas não correspondem
    echo "As senhas não correspondem.";
} else {
    // Criar um hash seguro da senha
    $senha_hash = hash('sha256', $senha);

    // Inserir os dados do novo usuário no banco de dados
    $query = "INSERT INTO admin (adm_nome, adm_email, adm_senha_hash) VALUES ('$nome', '$email', '$senha_hash')";
    $conn->query($query);

    // Registro bem-sucedido
    echo "Registro realizado com sucesso.";
}

$conn->close();
?>