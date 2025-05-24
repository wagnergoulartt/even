<?php
// bd.php - Conexão com banco de dados via PDO

$host = 'localhost';        // endereço do servidor MySQL
$dbname = 'nome_do_banco';  // nome do banco de dados
$user = 'usuario';          // usuário do banco
$pass = 'senha';            // senha do banco

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}