<?php
namespace App\Controller;

use App;
use Core\Auth\DbAuth;
use Core\HTML\BulmaForm;

class AdministrateursController extends AppController{

  public function login(){
    $errors = false;
    if(!empty($_POST)){
      $auth = new DbAuth(App::getInstance()->getDb());
      if($auth->loginAsAdmin($_POST['username'], $_POST['password'])){
        header('Location: index.php?p=admin.dashboard.index');
      } else {
          $errors = true;
      }
    }
    $form = new BulmaForm($_POST);
    $this->render('administrateurs.login', compact('form', 'errors'));
  }

  public function signout(){
    session_destroy();
    header('Location:index.php');
  }

}