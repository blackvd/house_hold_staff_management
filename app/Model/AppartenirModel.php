<?php
namespace App\Model;

use Core\Model\Model;

class AppartenirModel extends Model{

  protected $table="appartenir";

  public function getMoreInfoFromAppart(){
    return $this->query("
      SELECT appartenir.id, appartenir.no_appartenir, personnels.nom, personnels.prenoms, categories.libelle
      FROM personnels, categories, appartenir
      WHERE appartenir.id_personnel = personnels.id AND appartenir.id_categorie = categories.id
    ");
  }

  public function findByPerAndCat($id_personnel, $id_categorie){
    return $this->query("
      SELECT id
      FROM appartenir
      WHERE id_personnel = {$id_personnel} AND id_categorie = {$id_categorie}
    ", null, true);
  }

}