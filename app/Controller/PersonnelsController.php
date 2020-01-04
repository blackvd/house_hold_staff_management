<?php
namespace App\Controller;

class PersonnelsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Category');
  }

  public function home(){
    $this->render('personnels.home');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $categories = $this->Category->all();
    $this->render('personnels.index', compact('personnels', 'categories'));
  }

  public function category(){
    $categorie = $this->Category->find($_GET['id']);
    if($categorie === false){
      $this->notFound();
    }
    $personnels = $this->Personnel->listByCategory($_GET['id']);
    $categories = $this->Category->all();
    $this->render('personnels.category', compact('personnels', 'categories', 'categorie'));
  }

}