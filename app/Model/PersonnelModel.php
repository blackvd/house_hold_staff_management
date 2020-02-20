<?php
namespace App\Model;

use Core\Model\Model;

class PersonnelModel extends Model{

  protected $table="personnels";

  public function listByCategory($category_id){
    return $this->query("
      SELECT *
      FROM personnels
      INNER JOIN appartenir
      ON personnels.id = appartenir.id_personnel
      WHERE appartenir.id_categorie = ?
      ORDER BY personnels.date_ajout DESC
    ", [$category_id]);
  }

  public function listOnlyTenPersonnel(){
    return $this->query("
      SELECT *
      FROM personnels
      ORDER BY id DESC
      LIMIT 10
    ");
  }

  public function getLast(){
    return $this->query("
      SELECT * 
      FROM personnels
      ORDER BY personnels.date_ajout DESC
      LIMIT 1
    ");
  }

}