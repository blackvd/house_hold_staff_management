<?php
namespace App\Model;

use Core\Model\Model;

class ExperienceModel extends Model{
  
  protected $table = "experiences";

  public function allExp(){
    return $this->query("
      SELECT experiences.id, experiences.nbre_annee_exp, personnels.nom_complet, categories.libelle
      FROM experiences
      INNER JOIN appartenir
      ON experiences.id_appartenir = appartenir.id
      INNER JOIN personnels
      ON appartenir.id_personnel = personnels.id
      INNER JOIN categories
      ON appartenir.id_categorie = categories.id
    ");
  }

}