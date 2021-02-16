<?php 

  include __DIR__ . "/classes/users.php";

  $users = [
    new Users("william92", "lollo987", "william@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
    new Users("gino74", "lollo987", "gino74@gmail.com", "/img/avatar.jpg", "sono un utente intermedio"),
    new Users("francesca99", "lollo987", "francesca99@gmail.com", "/img/avatar.jpg", "sono un nuovo utente"),
  ];

  var_dump($users);


?>