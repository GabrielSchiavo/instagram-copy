<?php
$message = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Erro!</strong> Usuário ou senha incorretos. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

if (isset($_POST['submit'])) {
$username = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "SELECT id, fullname FROM user WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$user = $result->fetch_assoc();
$verify = password_verify($pass, $user["password"]);
header("Location: //localhost/instagram_copy/insta_feed.php");
die();
} else {
echo $message;
}

$conn->close();
}
?>
