<?php

namespace Core\Model;

use Core\Database\MysqlDatabase;

class Model 
{
  
  protected $table;
  protected $db;

  public function __construct(MysqlDatabase $db){
    $this->db = $db;
    if(is_null($this->table)){
      $parts = explode('\\', get_class($this));
      $class_name = end($parts);
      $this->table = strtolower(str_replace('Model', '', $class_name));
    }
  }

  public function all(){
    return $this->query('SELECT * FROM ' . $this->table);
  }

  public function find($id){
    return $this->query("SELECT * FROM {$this->table} WHERE id=?", [$id], true);
  }

  public function extract($key, $value){
    $records = $this->all();
    $return = [];
    foreach($records as $v){
      $return[$v->$key] = $v->$value;
    }
    return $return;
  }

  public function update($id, $fields){
    $sql_parts = [];
    $attr = [];
    foreach($fields as $k => $v){
      $sql_parts[] = "$k = ?";
      $attr[] = $v;
    }
    $attr[] = $id;
    $sql_parts = implode(', ', $sql_parts);
    return $this->query("UPDATE {$this->table} SET $sql_parts WHERE id=?", $attr, true);
  }

  public function create($fields){
    $sql_parts = [];
    $attr = [];
    foreach($fields as $k => $v){
      $sql_parts[] = "$k = ?";
      $attr[] = $v;
    }
    $sql_parts = implode(', ', $sql_parts);
    return $this->query("INSERT INTO {$this->table} SET $sql_parts", $attr, true);
  }

  public function delete($id){
    return $this->query("DELETE FROM {$this->table} WHERE id=?", [$id], true);
  }

  public function query($statement, $attr = null, $one = false){
    if($attr){
      return $this->db->prepare($statement, $attr, str_replace('Model', 'Entity', get_class($this)), $one);
    }else{
      return $this->db->query($statement, str_replace('Model', 'Entity', get_class($this)), $one);
    }
  }

}
