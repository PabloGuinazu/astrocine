<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado exitosamente';
    } else {
      $message = 'Hubo un error creando el usuario';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarte!</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registración</h1>
    <span>o <a href="login.php">Ingrese</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Ingrese su correo">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
     <!-- <input name="confirm_password" type="password" placeholder="Confirme contraseña">
      <!--> 
      <input type="submit" value="Continuar">
    </form>

  </body>
</html>
