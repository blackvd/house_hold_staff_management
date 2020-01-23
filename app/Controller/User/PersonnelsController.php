<?php
namespace App\Controller\User;

use Core\HTML\BulmaForm;

class PersonnelsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Categorie');
    $this->loadModel('Experience');
    $this->loadModel('Reservation');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $categories = $this->Categorie->all();
    $experiences = $this->Experience->getSpecificExp();
    $this->render('user.personnels.index', compact('personnels', 'categories', 'experiences'));
  }

  public function categorie(){
    $categorie = $this->Categorie->find($_GET['id']);
    if($categorie === false){
      $this->notFound();
    }
    $personnels = $this->Personnel->listByCategory($_GET['id']);
    $categories = $this->Categorie->all();
    $this->render('user.personnels.categorie', compact('personnels', 'categories', 'categorie'));
  }

  public function reserver(){
    $id_client = $_GET['id'];
    $categories = $this->Categorie->extract('id', 'libelle');
    if(!empty($_POST)){
      $result = $this->Reservation->create([
        'no_reservation' => 'No_RES'. date_timestamp_get(date_create()),
        'duree' => 'duree',
        'cout_reservation' => '',
        'id_client' => 'id_client',
        'id_appartenir' => '',
        'etat' => false
      ]);
      if($result){
        return $this->index();
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('user.personnels.reserver', compact('form'));
  }

}