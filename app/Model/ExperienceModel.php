<?php
namespace App\Model;

use Core\Model\Model;

class ExperienceModel extends Model{
  
  protected $table = "experiences";

  public function getSpecificExp(){
    return $this->query("
      SELECT experiences.nbre_annee_exp, app.nom, app.prenoms, app.libelle
      FROM experiences, appartenir, (SELECT personnels.nom, personnels.prenoms, categories.libelle
                            FROM personnels, categories, appartenir
                            WHERE appartenir.id_personnel = personnels.id AND appartenir.id_categorie = categories.id) AS app
      WHERE experiences.id_appartenir = appartenir.id
    ");
  }

}