<?php

class Database {
  public $connection;

  public function __construct()
  {
    $this->connection = new PDO('mysql:host=localhost;dbname=myapp;user=root;charset=utf8mb4');

  }

  public function query($query)
  {
    $statement = $this->connection->prepare($query);
    $statement->execute();
    return $statement;
  }
}