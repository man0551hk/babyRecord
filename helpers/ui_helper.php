<?php
class UI {	
  public static function CreateMenu($url, $name, $subMenu = [], $icon) {
    if (sizeof($subMenu) == 0) {
      echo '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="'.$url.'" aria-expanded="false"><i class="mdi '.$icon.'"></i><span class="hide-menu">'.$name.'</span></a></li>';
    } else {
      echo '<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi '.$icon.'"></i><span class="hide-menu">'.$name.' </span></a>';
      echo '<ul aria-expanded="false" class="collapse  first-level">';
        for($i = 0; $i < sizeof($subMenu ); $i++) {
          echo '<li class="sidebar-item"><a href="' . $subMenu[$i][0] . '" class="sidebar-link"><i class="mdi ' . $subMenu[$i][3] . '"></i><span class="hide-menu"> ' . $subMenu[$i][1] . ' </span></a></li>';
        } 
      echo '</ul>';
      echo '</li>';
    }
  }

  public static function ConvertToName($name) {
    return strtolower(str_replace(' ', '', $name));
  }
  
  public static function CreateElement($name = '', $type = '', $options = array(), $value = '') {
    switch($type) {
      case "text":  self::CreateText($name, $value); break;
      case "dropdown" : self::CreateDropDown($name, $options, $value); break;
      case "hidden": self::CreateHidden($name, $value); break;
      case "file": self::CreateFileSelector($name); break;
      case "time": self::CreateTime($name); break;
    }
  }

  public static function CreateText($name = '', $value = '') {
    echo '<div class="form-group row">';
      echo '<label class="col-md-3 m-t-15">' . $name . '</label>';
      echo '<div class="col-md-9">';
        echo '<input type="text" name = "' . self::ConvertToName($name) . '" id = "' . self::ConvertToName($name) . 
          '" class="form-control" placeholder="'.$name.'" aria-label="'.$name.'" value = "' . $value . '">';
      echo '</div>';
      echo '<div class="col-md-9 offset-md-3" id = "'. self::ConvertToName($name) .'Error"></div>';
    echo '</div>';
  }

  public static function CreateDropDown($name = '', $options = array(), $value = '') {
    echo '<div class="form-group row">';
      echo '<label class="col-md-3 m-t-15">'.$name.'</label>';
      echo '<div class="col-md-9">';
        echo '<select name = "' . self::ConvertToName($name) . '" id = "' . self::ConvertToName($name) . '" class="select2 form-control custom-select" style="width: 100%; height:36px;">';
        foreach($options as $option) {
          $selected = $option->value == $value ? 'selected' : '';
          echo '<option value = "' .$option->value . '" ' .  $selected . '>' . $option->text. '</option>';
          // echo '<option value = "' . $option->value .'" ' . $selected ? 'selected' : '' . '>'.$option->text.'</option>';
        }
        echo '</select>';
      echo '</div>';
      echo '<div class="col-md-9 offset-md-3" id = "'. self::ConvertToName($name) .'Error"></div>';
    echo '</div>';
  }

  public static function CreateHidden($name = '', $value = '') {
    echo '<input type = "hidden" name = "'. self::ConvertToName($name) .'" id = "'. self::ConvertToName($name) .'" value = "' . $value . '" />';
  }

  public static function CreateTableHeader($options) {
    foreach($options as $tableHeader) {
      echo '<th>' . $tableHeader .'</th>';
    }
  }

  public static function CreateTableRow($options, $withDelete = false) {
    foreach($options as $tableRow) {
      echo '<tr>';
      if ($withDelete) {
        echo '<form method = "POST">';
        self::CreateElement('action', 'hidden', null, 'delete');
        $id = 0;
        foreach ($tableRow as $cell => $value) {
          if ($cell == 'id') {
            $id = $value;
          }
          if ($cell != 'id') {
            self::CreateElement('id', 'hidden', null, $id);
            echo '<td>' . $value .  '</td>';    
            echo '<td><button class = "btn btn-danger">Delete</button></td>';
          }
        }
        echo "</form>";
      } else {
        foreach ($tableRow as $cell => $value) {
          echo '<td>' . $value .  '</td>';    
        }
      }
      echo '</tr>';
    }
  }

  public static function CreateFileSelector($name) {
    echo '<div class="form-group row">';
      echo '<label class="col-md-3 m-t-15">' . $name . '</label>';
      echo '<div class="col-md-9">';
        echo '<input type="file" name = "' . self::ConvertToName($name) . '" id = "' . self::ConvertToName($name) . '"  class="form-control"/>';
      echo '</div>';
      echo '<div class="col-md-9 offset-md-3" id = "'. self::ConvertToName($name) .'Error"></div>';
    echo '</div>';
  }
}
?>