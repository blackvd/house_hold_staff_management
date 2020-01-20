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