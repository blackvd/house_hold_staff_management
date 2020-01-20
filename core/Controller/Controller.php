<?php
namespace Core\Controller;

class Controller{

  protected $viewPath;
  protected $template;

  protected function render($view, $variables = []){
    ob_start();
    extract($variables);
    require($this->viewPath . str_replace('.', '/', $view) . '.php');
    $content = ob_get_clean();
    require($this->viewPath . 'templates/'.$this->template.'.php');
  }

  protected function connectAsUserBefore(){
    header('Location:index.php?p=clients.login');
  }

  protected function connectAsAdminBefore(){
    header('Location:index.php?p=administrateurs.login');
  }

  protected function notFound(){
    header('Location:notFound.php');
  }

}