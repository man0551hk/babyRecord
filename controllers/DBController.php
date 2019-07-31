<?php
class DBController {
  private $dbConnection; 

  public function __construct($dbConnection) {
    $this->dbConnection = $dbConnection;
  }

  public function QueryDB($table, $fields = array(), $type = '', $condition = '', $joinTables = array(), $sorting = '') {
    $query = "";
    switch ($type) {
      case "query": $query = self::MakeSelectQuery($table, $fields, $condition, $joinTables, $sorting); break;
      case "insert": $query = self::MakeInsertQuery($table, $fields); break;
      case "delete": $query = self::MakeDeleteQuery($table, $fields); break;
      case "update": $query = self::MakeUpdateQuery($table, $fields); break;
    }
    //echo $query;
    switch ($type) {
      case "query": return $this->dbConnection->DoQuery($this->dbConnection->link, $query); break;
      case "insert": return $this->dbConnection->DoQueryInsertId($this->dbConnection->link, $query); break;
      case "delete": return $this->dbConnection->DoQuery($this->dbConnection->link, $query); break;
      case "update": return $this->dbConnection->DoQuery($this->dbConnection->link, $query); break;
    }
  }

  public function MakeSelectQuery($table, $fields = array(), $condition = '', $joinTables = array(), $sorting) {
    $query  = "select " . implode(", ", $fields) . " from " . $table . ' ';
    if (is_array($joinTables) && sizeof($joinTables) > 1) {
      foreach($joinTables as $joint) {
        $query .= $joint;
      }
    }
    if ($condition != '') {
      $query .= " where " . $condition;
    }
    if ($sorting != '') {
      $query .= " order by " . $sorting;
    }
    return $query;
  }

  public function MakeInsertQuery($table, $fields = array()) {
    $query = "insert into " . $table . " (";
    $query .= implode(", ", array_keys($fields) );
    $query .= ") values ('" .  implode("','", array_values($fields)) . "')";
    return $query;
  }

  public function MakeDeleteQuery($table, $fields = array()) {
    $query = "delete from " . $table . " where ";
    $condition = array();
    foreach ($fields as $key => $value) {
      array_push($condition, $key . ' = ' . $value);
    }
    $query .= implode(" and ", $condition );
    return $query;
  }


  public function MakeUpdateQuery($table, $fields = array()) {
    $query = "update " . $table . " set ";
    $updateSet = array();
    $condition = "";
    foreach ($fields as $key => $value) {
      if ($key != 'id') {
        array_push($updateSet, $key . " = '" . $value . "' " );
      }
      else {
        $condition = $key . ' = ' . $value;
      }
    }
    $query .= implode(" and ", $updateSet );
    $query .= ' where ' . $condition;
    return $query;
  }
}
?>