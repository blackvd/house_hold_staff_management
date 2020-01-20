<?php
namespace App\Controller;

use App;
use Core\Auth\DbAuth;
use Core\HTML\BulmaForm;

class ClientsController extends AppController{

  public function __construct()
  {
    parent::__construct();
    $this->loadModel('Client');
  }

  public function login(){
    $errors = false;
    if(!empty($_POST)){
      $auth = new DbAuth(App::getInstance()->getDb());
      if($auth->loginAsClient($_POST['no_client'], $_POST['nom'])){
        header('Location: index.php?p=user.personnels.index');
      }else{
        $errors = true;
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('clients.login', compact('form', 'errors'));
  }

  public function signup(){
    $date = date_create();
    $timestamp = date_timestamp_get($date);
    $dateToStr = strval($timestamp);
    $errors = false;
    if(!empty($_POST)){
      $result = $this->Client->create([
        'no_client' => 'No'.$dateToStr,
        'nom' => $_POST['nom'],
        'prenoms' => $_POST['prenoms'],
        'contact' => $_POST['contact'],
        'email' => $_POST['email'],
        'lieu_habitation' => $_POST['lieu_habitation']
      ]);
      if($result){
        $client = $this->Client->getLastClient();
        $this->render('clients.bienvenue', compact('client'));
      } else{
        $errors = true;
      }
    }else{
      $form = new BulmaForm($_POST);
      $this->render('clients.signup', compact('form', 'errors'));
    }
  }

  public function destroySession(){
    
    header('Location:index.php');
  }

  public function bienvenue(){
    $client = $this->Client->getLastClient();
    $this->render('clients.bienvenue', compact('client'));
  }

}

