<?php
namespace Core\Auth;

use Core\Database\Database;

class DbAuth{

  private $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getUserId(){
    if($this->logged()){
      return $_SESSION['auth'];
    }
    return false;
  }

  public function loginAsClient($no_client, $nom){
    $client = $this->db->prepare("SELECT * FROM clients WHERE no_client=? AND nom=?",[$no_client, $nom], null, true);
    if($client){
      $_SESSION['auth'] = $client->id;
      return true;
    }
    return false;  
  }

  public function loginAsAdmin($username, $password){
    $admin = $this->db->prepare("SELECT * FROM administrateurs WHERE pseudo=?"[$username], null, true);
    if($admin){
      if($admin->password === sha1($password)){
        $_SESSION['auth'] = $admin->id;
        return true;
      }
    }
    return false;
  }

  public function logged(){
    return isset($_SESSION['auth']);
  }

}