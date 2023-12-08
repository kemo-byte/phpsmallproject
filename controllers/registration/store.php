<?php

use Core\Validator;
use Core\App;
use Core\Database;


$email = $_POST['email1'];
$password = $_POST['password1'];

$errors = [];

if(!Validator::email($email)){
  $errors['email'] = 'please provide a valid email address';
}

if(!Validator::string($password, 7, 255)) {
  $errors['password'] = 'please provide password of at lease 7  characters';
}

if(!empty($errors)){
  return view('registration/create.view.php',[
    'errors' => $errors
  ]);
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email',[
  'email' => $email
])->find();

if($user){
  header('location : /');
  exit();

} else {

  // dd($errors);

  $db->query('INSERT INTO users(email, password) VALUES (:email, :password)',[
    'email' => $email,
    'password' => password_hash($password,PASSWORD_BCRYPT)
  ]);



$_SESSION['user'] = [
  'email' => $email
];

header('location: /');
exit();
}