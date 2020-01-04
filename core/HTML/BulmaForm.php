<?php
namespace Core\HTML;

class BulmaForm extends Form{

  protected function surround($html){
    return "<div class=\"field\">{$html}</div>";
  }

  public function input($name, $label, $options=[]){
    $type = isset($options['type']) ? $options['type'] : 'text';
    $label = '<label class="label">'. $label .'</label>';
    if($type === 'textarea'){
      $input = '<div class="control"><textarea class="textarea">'. $this->getValue($name) .'</textarea></div>';
    }else{
      $input = '<div class="control"><input class="input" type="'.$type.'" name="'.$name.'" value="'.$this->getValue($name).'" /></div>';
    }
    return $this->surround($label . $input);
  }

  public function select($name, $label, $options){
    $label = '<label class="label">'. $label .'</label>';
    $input = '<div class="control"><div class="select><select name="'.$name.'">';
    foreach ($options as $k => $v) {
      $attr = '';
      if($k == $this->getValue($name)){
        $attr = ' selected';
      }
      $input .= "<option value='$k'$attr>$v</option>" ;
    }
    $input .= '</select></div></div>';
    return $this->surround($label . $input);
  }

}