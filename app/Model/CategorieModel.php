<?php
namespace App\Model;

use Core\Model\Model;

class CategorieModel extends Model{

  protected $table="categories";

  public function listOnlyTenCategorie(){
    return $this->query("
      SELECT *
      FROM categories
      ORDER BY id DESC
      LIMIT 10
    ");
  }

  public function getSpeCat($id_personnel){
    return $this->query('
      SELECT categories.id, categories.libelle
      FROM categories
      INNER JOIN appartenir
      ON categories.id = appartenir.id_categorie
      INNER JOIN personnels
      ON appartenir.id_personnel = personnels.id
      WHERE personnels.id = 
    '.$id_personnel.'');
  }

  public function extractSpeCat($key, $value, $id_personnel){
    $records = $this->getSpeCat($id_personnel);
    $return = [];
    foreach($records as $v){
      $return[$v->$key] = $v->$value;
    }
    return $return;
  }

}