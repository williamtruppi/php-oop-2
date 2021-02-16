<?php

include __DIR__ . "/classes/users.php";

$users = [
  new Users("william92", "lollo987", "william@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
  new Users("gino74", "lollo987", "gino74@gmail.com", "/img/avatar.jpg", "sono un utente intermedio"),
  new Users("francesca99", "lollo987", "francesca99@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php foreach ($users as $user) { ?>
    <h1><?php echo $user->username ?></h1>
    <h3><?php echo $user->password ?></h3>
    <h3><?php echo $user->email ?></h3>
    <h3><?php echo $user->description ?></h3>
    <p>-----------------------------------------</p>
  <?php } ?>

</body>

</html>