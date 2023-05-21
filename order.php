<?php

  session_start();
  if (isset($_POST['card'])) {
    $card = $_POST['card'];
    $_SESSION['cardnumber'] = $card;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <form action="" method="POST">
    <label>
      <p>Номер карты</p>
      <input type="text" name="card" value="">
      <button>SAVE</button>
    </label>
    <a href="check.php">NEXT</a>
  </form>

</body>

</html>