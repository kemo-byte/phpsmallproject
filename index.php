<?php

require('./functions.php');
require('./Database.php');
$config = require('./config.php');
$db =new Database($config['database']);


$sql = 'select * from posts where id = :id';
$id = ['id'=>$_GET['id']];

$post = $db->query($sql,$id)->fetch();


  echo '<li>'  . $post['title'] . '</li>';

exit();
require('views/index.view.php');