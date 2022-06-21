<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345";
$dbname = "insta_copy";
// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Validar conexão
if ($conn->connect_error) {
die("Falha na conexão: " . $conn->connect_error);
}
// echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>DB Conectado</strong>
//       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
?>