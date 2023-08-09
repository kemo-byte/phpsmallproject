<?php 
use Core\Validator;
use Core\Database;

require base_path('Core/Validator.php');
$config = require base_path('config.php');

$db = new Database($config['database']);


  $errors = [];

  if(! Validator::string($_POST['body'],1,1000)){
    $errors['body'] = 'A field of less than 1,000 characters is required';
  } 
  
  if(!empty($errors)) {
    return view('notes/create.view.php',['errors'=>$errors]);
  }


  $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id) ',[
    'body'=>$_POST['body'],
    'user_id'=> 1
  ]);

header('location: /notes');
exit();
