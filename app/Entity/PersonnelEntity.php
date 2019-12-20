<?php
namespace App\Entity;

use Core\Entity\Entity;

class PersonnelEntity extends Entity{

  public function getUrl(){
    return 'index.php?p=personnels.show&id=' . $this->id;
  }

}