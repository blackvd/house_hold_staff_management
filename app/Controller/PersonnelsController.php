<?php
namespace App\Controller;

class PersonnelsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
  }

  public function index(){
    $personnels = $this->Personnel->all();
    $this->render('personnels.index', compact('personnels'));
  }

}