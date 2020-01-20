<?php
namespace App\Controller\Admin;

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

  }

  public function edit()
  {

  }

  public function delete()
  {

  }

}