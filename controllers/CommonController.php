<?php
class CommonController {
  private $dbConnection; 

  public function __construct($dbConnection) {
    $this->dbConnection = $dbConnection;
  }

  public function ConvertResultToOption($result) {
    $data = array();
    $emptyOption = new Option('Select', 0);
    array_push($data, $emptyOption);
    while($row = mysqli_fetch_array($result)) {
      $option = new Option($row[1], $row[0]);
      array_push($data, $option);
    }
    return $data;
  }

  public function ConvertResultToOneRecord($result) {
    if ($row = mysqli_fetch_array($result)) {
      return $row[0];
    }
  }
}
?>