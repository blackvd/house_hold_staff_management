<?php
namespace App\Controller\Admin;

use Core\HTML\BulmaForm;

class CategoriesController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Categorie');
  }

  public function index()
  {
    $categories = $this->Categorie->all();
    $this->render('admin.categories.index', compact('categories'));
  }

  public function create()
  {
    if(!empty($_POST)){
      $result = $this->Categorie->create([
        'libelle' => $_POST['libelle']
      ]);
      if($result){
        return $this->index();
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('admin.categories.create', compact('form'));
  }

  public function edit()
  {
    if(!empty($_POST)){
      $result = $this->Categorie->update($_GET['id'], [
        'libelle' => $_POST['libelle']
      ]);
      if($result){
        return $this->index();
      }
    }
    $categorie = $this->Categorie->find($_GET['id']);
    $form = new BulmaForm($categorie);
    $this->render('admin.categories.create', compact('form')); 
  }

  public function delete()
  {
    if(!empty($_POST)){
      $result = $this->Categorie->delete($_POST['id']);
      return $this->index();
    }
  }

}