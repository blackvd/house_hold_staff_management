<?php
namespace App\Controller\Admin;

class ExperiencesController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Experience');
  }

  public function index()
  {
    $experiences = $this->Experience->getSpecificExp();
    $this->render('admin.experiences.index', compact('experiences'));
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