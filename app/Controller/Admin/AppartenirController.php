<?php
namespace App\Controller\Admin;

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

  }

  public function edit()
  {

  }

  public function delete()
  {

  }

}