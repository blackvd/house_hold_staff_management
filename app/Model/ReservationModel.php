<?php
namespace App\Model;

use Core\Model\Model;

class ReservationModel extends Model{

  protected $table="reservations";

  public function getRes(int $limit){
    if(!$limit){
      return $this->query("
        SELECT reservations.no_reservation, reservations.cout_reservation, reservations.duree, clients.nom as nom_client, app.nom as nom_personnel, app.prenoms as prenoms_personnel, app.libelle as categorie
        FROM
            reservations,clients,
            (
              SELECT personnels.nom, personnels.prenoms, categories.libelle, appartenir.id
              FROM personnels, categories, appartenir
              WHERE appartenir.id_personnel = personnels.id AND appartenir.id_categorie = categories.id
            ) AS app
        WHERE reservations.id_client = clients.id AND reservations.id_appartenir = app.id
        ORDER BY reservations.id DESC
      ");
    } else{
      return $this->query("
        SELECT reservations.no_reservation, reservations.cout_reservation, reservations.duree, clients.nom as nom_client, app.nom as nom_personnel, app.prenoms as prenoms_personnel, app.libelle as categorie
        FROM
            reservations,clients,
            (
              SELECT personnels.nom, personnels.prenoms, categories.libelle, appartenir.id
              FROM personnels, categories, appartenir
              WHERE appartenir.id_personnel = personnels.id AND appartenir.id_categorie = categories.id
            ) AS app
        WHERE reservations.id_client = clients.id AND reservations.id_appartenir = app.id
        ORDER BY reservations.id DESC
        LIMIT {$limit}
      ");
    }
  }

}