<?php

use Core\Validator;
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if(!Validator::email($email)){
  $errors['email'] = 'please provide a valid email address';
}

if(!Validator::string($password)) {
  $errors['password'] = 'please provide a valid password ';
}

if(!empty($errors)){
  return view('registration/create.view.php',[
    'errors'=>$errors
  ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email',[
  'email' => $email
])->find();

if($user){
  if(password_verify($password,$user['password'])){
    login([
      'email' => $email
    ]);
    header('location: /');
    exit();
  }
}

return view('registration/create.view.php',[
  'errors'=>[
    'email' => 'No matching account found for that email address and password.'
  ]
  ]);