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

  }

  public function category(){
    
  }

}