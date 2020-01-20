<?php
namespace App\Controller\Admin;

use App;
use App\Controller\AppController as ControllerAppController;
use Core\Auth\DbAuth;

class AppController extends ControllerAppController{

  public function __construct()
  {
    parent::__construct();
    //Auth
    $app = App::getInstance();
    $auth = new DbAuth($app->getDb());
    if(!$auth->logged()){
      $this->connectAsAdminBefore();
    }
  }

}