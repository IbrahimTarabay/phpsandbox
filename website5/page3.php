<?php 
  $user = ['name' => 'Hema', 'email' => 'hema@gmail.com','age' => 24];
  $user = serialize($user);
  setcookie('user', $user, time() + (86400*30));

  $user = unserialize($_COOKIE['user']);

  print_r($user);