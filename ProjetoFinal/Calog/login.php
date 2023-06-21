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
// Obter as credenciais do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consultar o banco de dados para obter a senha armazenada
$query = "SELECT adm_senha_hash FROM admin WHERE adm_email = '$email'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hash = $row['adm_senha_hash'];

    // Verificar se a senha fornecida corresponde ao hash armazenado no banco de dados
    if (hash('sha256', $senha) === $hash) {
        // Login bem-sucedido
        header("Location: Adm/regis.html");
        exit(); // Importante: certifique-se de sair do script após o redirecionamento
    } else {
        // Senha incorreta
        echo "Senha incorreta.";
    }
} else {
    // E-mail não encontrado
    echo "E-mail não encontrado.";
}
?>