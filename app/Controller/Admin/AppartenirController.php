<?php
namespace App\Controller\Admin;

use Core\HTML\BulmaForm;

class AppartenirController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Appartenir');
  }

  public function index()
  {
    $appartenir = $this->Appartenir->getMoreInfoFromAppart();
    $this->render('admin.appartenir.index', compact('appartenir'));
  }

  public function create()
  {
    $this->loadModel('Personnel');
    $this->loadModel('Categorie');
    $personnels = $this->Personnel->extract('id', 'nom_complet');
    $categories = $this->Categorie->extract('id', 'libelle');
    if(!empty($_POST)){
      $personnel = $this->Personnel->find($_POST['id_personnel']);
      $categorie = $this->Categorie->find($_POST['id_categorie']);
      $no_id = strtoupper($personnel->nom) .'-'. strtoupper(str_replace(" ", "", $personnel->prenoms)) .'_'. $categorie->libelle;
      $result = $this->Appartenir->create([
        'no_appartenir' => $no_id,
        'id_personnel' => $_POST['id_personnel'],
        'id_categorie' => $_POST['id_categorie']
      ]);
      if($result){
        return $this->index();
      }
    }
    
    $form = new BulmaForm($_POST);
    $this->render('admin.appartenir.create', compact('form', 'personnels', 'categories'));
  }

  public function edit()
  {
    $this->loadModel('Personnel');
    $this->loadModel('Categorie');
    $personnels = $this->Personnel->extract('id', 'nom_complet');
    $categories = $this->Categorie->extract('id', 'libelle');
    if(!empty($_POST)){
      $personnel = $this->Personnel->find($_POST['id_personnel']);
      $categorie = $this->Categorie->find($_POST['id_categorie']);
      $no_id = strtoupper($personnel->nom) .'-'. strtoupper(str_replace(" ", "", $personnel->prenoms)) .'_'. $categorie->libelle;
      $result = $this->Appartenir->update($_GET['id'], [
        'no_appartenir' => $no_id,
        'id_personnel' => $_POST['id_personnel'],
        'id_categorie' => $_POST['id_categorie']
      ]);
      if($result){
        return $this->index();
      }
    }
    
    $appartient = $this->Appartenir->find($_GET['id']);
    $form = new BulmaForm($appartient);
    $this->render('admin.appartenir.edit', compact('form', 'personnels', 'categories'));
  }

  public function delete()
  {
    if(!empty($_POST)){
      $result = $this->Appartenir->delete($_POST['id']);
      return $this->index();
    }
  }

}