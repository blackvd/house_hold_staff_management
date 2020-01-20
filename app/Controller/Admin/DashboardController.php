<?php
namespace App\Controller\Admin;

class DashboardController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Personnel');
    $this->loadModel('Categorie');
    $this->loadModel('Client');
    $this->loadModel('Reservation');
  }

  public function index(){
    $personnels = $this->Personnel->listOnlyTenPersonnel();
    $categories = $this->Categorie->listOnlyTenCategorie();
    $clients = $this->Client->listOnlyTenClient();
    $reservations = $this->Reservation->getRes(10);
    $this->render('admin.dashboard.index', compact('personnels', 'categories', 'clients', 'reservations'));
  }

}