<?php
namespace App\Controller\Admin;

use Core\HTML\BulmaForm;

class ExperiencesController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Experience');
  }

  public function index()
  {
    $experiences = $this->Experience->allExp();
    $this->render('admin.experiences.index', compact('experiences'));
  }

  public function create()
  {
    $this->loadModel('Appartenir');
    $appartenir = $this->Appartenir->extract('id', 'no_appartenir');
    if(!empty($_POST)){
      $result = $this->Experience->create([
        'nbre_annee_exp' => $_POST['nbre_annee_exp'],
        'id_appartenir' => $_POST['id_appartenir']
      ]);
      if($result){
        return $this->index();
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('admin.experiences.create', compact('form', 'appartenir'));
  }

  public function edit()
  {
    $this->loadModel('Appartenir');
    $appartenir = $this->Appartenir->extract('id', 'no_appartenir');
    if(!empty($_POST)){
      $result = $this->Experience->update($_GET['id'], [
        'nbre_annee_exp' => $_POST['nbre_annee_exp'],
        'id_appartenir' => $_POST['id_appartenir']
      ]);
      if($result){
        return $this->index();
      }
    }
    $experience = $this->Experience->find($_GET['id']);
    $form = new BulmaForm($experience);
    $this->render('admin.experiences.edit', compact('form', 'appartenir'));
  }

  public function delete()
  {
    if(!empty($_POST)){
      $result = $this->Experience->delete($_POST['id']);
      return $this->index();
    }
  }

}