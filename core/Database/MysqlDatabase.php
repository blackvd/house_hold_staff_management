<?php
namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database
{
  
  private $db_name;
  private $db_user;
  private $db_password;
  private $db_host;
  private $pdo;

  public function __construct($db_name, $db_user='minder', $db_password='deadshot:-/1', $db_host='localhost')
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_password = $db_password;
    $this->db_host = $db_host;
  }

  private function getPDO()
  {
    if($this->pdo === null) {
      $pdo = new PDO('mysql:dbname=gestion_placement;host=localhost', 'minder', 'deadshot:-/1');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  public function query($statement, $class_name=null, $one=false)
  {
    $req = $this->getPDO()->query($statement);
    if(
      strpos($statement, 'UPDATE') === 0 ||
      strpos($statement, 'INSERT') === 0 ||
      strpos($statement, 'DELETE') === 0 
    ){
      return $req;
    }
    if($class_name === null){
      $req->setFetchMode(PDO::FETCH_OBJ);
    } else {
      $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
    }
    if ($one) {
      $datas = $req->fetch();
    } else {
      $datas = $req->fetchAll();
    }
    return $datas;
  }

  public function prepare($statement, $attr, $class_name=null, $one=false)
  {
    $req = $this->getPDO()->prepare($statement);
    $res = $req->execute($attr);
    if(
      strpos($statement, 'UPDATE') === 0 ||
      strpos($statement, 'INSERT') === 0 ||
      strpos($statement, 'DELETE') === 0 
    ){
      return $res;
    }
    if($class_name === null){
      $req->setFetchMode(PDO::FETCH_OBJ);
    } else {
      $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
    }
    if ($one) {
      $datas = $req->fetch();
    } else {
      $datas = $req->fetchAll();
    }
    return $datas;
  }

  public function lastInsertId(){
    return $this->getPDO()->lastInsertId();
  }
  
}
