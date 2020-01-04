<?php
namespace App\Controller;

use App;
use Core\Auth\DbAuth;
use Core\HTML\BulmaForm;

class ClientsController extends AppController{

  public function login(){
    $errors = false;
    if(!empty($_POST)){
      $auth = new DbAuth(App::getInstance()->getDb());
      // if(){

      // }else{

      // }
      $form = new BulmaForm($_POST);
      $this->render('users.login', compact('form', 'errors'));
    }
  }

}

