<?php
namespace App\Controller\Admin;

class DashboardController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Category');
  }

  public function index(){

  }

}