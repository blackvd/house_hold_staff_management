<?php
namespace App\Controller\Admin;

class ReservationsController extends AppController{


  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Reservation');
  }

  public function index()
  {
    $reservations = $this->Reservation->getRes();
    $this->render('admin.reservations.index', compact('reservations'));
  }

  public function validate()
  {
    if(!empty($_POST)){
      $result = $this->Appartenir->update($_GET['id'],[
        'etat' => $_POST['etat']
      ]);
      if ($result) {
        return $this->index();
      }
    }
  }

  public function delete()
  {

  }

}