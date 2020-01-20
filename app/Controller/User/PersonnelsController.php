<?php
namespace App\Controller\User;

class PersonnelsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Category');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $categories = $this->Category->all();
    $this->render('user.personnels.index', compact('personnels', 'categories'));
  }

  public function category(){
    
  }

}