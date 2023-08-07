<?php

class Database {
  public $connection;
  public $statement;
  public function __construct($config, $username = 'root',$password='')
  {
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
    $dsn = 'mysql:' . http_build_query($config,'',';');
    $this->connection = new PDO($dsn, $username, $password,$options);

  }

  public function query($query,$params= [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }
    public function get()
    {
      return $this->statement->fetchAll();
    }
  
  public function find()
  {
    $this->statement->fetch();
  }
  public function findOrFail()
  {
    $result = $this->statement->fetch();
    if(!$result) {
      abort();
    }
    return $result;
  }
}