<?php

include __DIR__ . "/classes/users.php";

$users = [
  new Users("william92", "william", "walker", "lollo987", "william@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
  new Users("gino74", "gino", "lollobrigido", "lollo987", "gino74@gmail.com", "/img/avatar.jpg", "sono un utente intermedio"),
  new Users("francesca99", "francesca", "checca", "lollo987", "francesca99@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
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
    <h1>Username --> <?php echo $user->username ?></h1>
    <h3>Name --> <?php echo $user->name ?></h3>
    <h3>Lastname --> <?php echo $user->lastname ?></h3>
    <h3>Password --> <?php echo $user->password ?></h3>
    <h3>Email --> <?php echo $user->email ?></h3>
    <h3>Description --> <?php echo $user->description ?></h3>
    <p>-----------------------------------------</p>
  <?php } ?>

</body>

</html>