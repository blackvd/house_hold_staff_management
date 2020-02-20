<?php
namespace App\Model;

use Core\Model\Model;

class ClientModel extends Model{
  
  protected $table = "clients";

  public function getLastClient(){
    return $this->query("
      SELECT no_client
      FROM clients
      ORDER BY id DESC
      LIMIT 1
    ", null, true);
  }

  // public function getClient(){
  //   return $this->query("
  //     SELECT clients.nom
  //     FROM clients, reservation
  //     WHERE reservation.id_client = clients.id
  //   ");
  // }

  public function listOnlyTenClient(){
    return $this->query("
      SELECT *
      FROM clients
      ORDER BY id DESC
      LIMIT 10
    ");
  }

}