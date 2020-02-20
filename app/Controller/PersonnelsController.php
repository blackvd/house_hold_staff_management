<?php
namespace App\Controller;

class PersonnelsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Categorie');
  }

  public function home(){
    $this->render('personnels.home');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $categories = $this->Categorie->all();
    $this->render('personnels.index', compact('personnels', 'categories'));
  }

  public function categorie(){
    $categorie = $this->Categorie->find($_GET['id']);
    if($categorie === false){
      $this->notFound();
    }
    $personnels = $this->Personnel->listByCategory($_GET['id']);
    $categories = $this->Categorie->all();
    $this->render('personnels.categorie', compact('personnels', 'categories', 'categorie'));
  }

}