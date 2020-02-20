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
    $this->loadModel('Client');
    $this->loadModel('Appartenir');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $categories = $this->Categorie->all();
    $experiences = $this->Experience->allExp();
    $this->render('user.personnels.index', compact('personnels', 'categories', 'experiences'));
  }

  public function show(){
    $personnel = $this->Personnel->find($_GET['id']);
    $this->render('user.personnels.show', compact('personnel'));
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
    $id_personnel = $_GET['id'];
    $id_client = $_GET['id_client'];
    $client = $this->Client->find($_GET['id_client']);
    $personnel = $this->Personnel->find($_GET['id']);
    $categories = $this->Categorie->extractSpeCat('id', 'libelle', $id_personnel);
    if(!empty($_POST)){
      $id_appartenir = $this->Appartenir->findByPerAndCat($_POST['id_personnel'], $_POST['id_categorie']);
      $id_client = $_POST['id_client'];
      $result = $this->Reservation->create([
        'no_reservation' => 'No_RES'. date_timestamp_get(date_create()),
        'duree' => 'duree',
        'tranche' => 'tranche',
        'cout_reservation' => 0,
        'id_client' => $id_client,
        'id_appartenir' => $id_appartenir->id
      ]);
      if($result){
        return $this->confirmer();
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('user.personnels.reserver', compact('form', 'categories', 'client', 'personnel'));
  }

  public function confirmer(){
    $lastPersonnel = $this->Personnel->getLast();
    $this->render('user.personnels.confirmer');
  }

}