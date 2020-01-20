<?php
namespace App\Model;

use Core\Model\Model;

class AppartenirModel extends Model{

  protected $table="appartenir";

  public function getMoreInfoFromAppart(){
    return $this->query("
      SELECT personnels.nom, personnels.prenoms, categories.libelle
      FROM personnels, categories, appartenir
      WHERE appartenir.id_personnel = personnels.id AND appartenir.id_categorie = categories.id
    ");
  }

}