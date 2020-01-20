<?php
namespace App\Controller\Admin;

class ClientsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Client');
  }

  public function index()
  {
    $clients = $this->Client->all();
    $this->render('admin.clients.index', compact('clients'));
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