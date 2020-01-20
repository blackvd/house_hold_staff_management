<?php
namespace App\Controller\Admin;

use Core\HTML\BulmaForm;

class PersonnelsController extends AppController{


  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
  }

  public function index()
  {
    $personnels = $this->Personnel->all();
    $this->render('admin.personnels.index', compact('personnels'));
  }

  public function create()
  {
    if (!empty($_POST)) {
      $date = date_create();
      $timestamp = date_timestamp_get($date);
      $dateToStr = strval($timestamp);
      $result = $this->Personnel->create([
        'no_identifieur' => "No_PE".$dateToStr,
        'nom' => $_POST['nom'],
        'prenoms' => $_POST['prenoms'],
        'sexe' => $_POST['sexe'],
        'date_naiss' => $_POST['date_naiss'],
        'contact' => $_POST['contact'],
        'type_piece' => $_POST['type_piece'],
        'piece_identite' => $_POST['piece_identite'],
        'description' => $_POST['description']
      ]
      );
      if($result){
        return $this->index();
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('admin.personnels.create', compact('form'));
  }

  public function edit()
  {

  }

  public function delete()
  {

  }

}