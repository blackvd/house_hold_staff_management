<?php
namespace App\Model;

use Core\Model\Model;

class CategorieModel extends Model{

  protected $table="categories";

  public function listOnlyTenCategorie(){
    return $this->query("
      SELECT *
      FROM categories
      ORDER BY id DESC
      LIMIT 10
    ");
  }

}