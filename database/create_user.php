<?php
//Inclui a conexão para o db
include "connect_db.php";

$message = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Sucesso!</strong> Usuário cadastrado. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);

   //Senha original
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   // Senha segura usando o password_hash
   $hash = password_hash($pass, PASSWORD_BCRYPT);

   // Mostra o hash gerado
   // echo " Generated hash code: " . $hash;

   $sql = "INSERT INTO user (username, fullname, email, pass)
   VALUES ('$username', '$fullname', '$email', '$hash')";

   if ($conn->query($sql) === TRUE) {
      echo $message;
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }

   // Fechar a conexão com o banco de dados
   $conn->close();
}