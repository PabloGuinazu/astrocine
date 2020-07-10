<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a Cinema!</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido a Cinema <?= $user['email']; ?>
      <br>Usted ha ingresado correctamente! <br>
      <a href="logout.php">
        Elegir otro usario o salir.
      </a>
      <H1>IR A CINEMA</H1>
      <a href="InicioCine.php"><H1>IR</H1></a>
    <?php else: ?>
      <h3>o <h3>
      <h1>Ingrese en su usuario o registrese </h1>

      <a href="login.php">Ingresar</a> o
      <a href="signup.php">Registrar</a>
    <?php endif; ?>
  </body>
</html>
