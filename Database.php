<?php

class Database {
  public $connection;

  public function __construct($config, $username = 'root',$password='')
  {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
    $dsn = 'mysql:' . http_build_query($config,'',';');
    $this->connection = new PDO($dsn, $username, $password,$options);

  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();
    return $statement;
  }
}