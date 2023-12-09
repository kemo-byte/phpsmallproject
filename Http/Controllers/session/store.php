<?php

use Http\Forms\LoginForm;
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if(!$form->validate($email, $password)){
  return view('registration/create.view.php',[
    'errors'=> $form->errors()
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