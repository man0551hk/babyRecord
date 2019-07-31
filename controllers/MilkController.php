<?php
class MilkController {
  private $dbConnection; 

  public function __construct($dbConnection) {
    $this->dbConnection = $dbConnection;
  }

  public function CustomTableRecord($result) {
    while($row = mysqli_fetch_array($result)) {
      
      
      echo "<tr>";
      echo '<form method = "POST">';
      UI::CreateElement('action', 'hidden', null, 'updateEndTime');
      UI::CreateElement('id', 'hidden', null, $row["id"]);
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" ;
      switch($row["milkType"]) {
        case 1: echo "人奶"; break;
        case 2: echo "奶粉"; break;
        case 3: echo "開細"; break;
        case 4: echo "開大"; break;
      }
      echo "</td>";
      echo "<td>" . $row["startTime"] ."</td>";
      if ($row["endTime"] != "1900-01-01 00:00:00") {
        echo "<td>" . $row["endTime"] . "</td>";
      } 
      else {
        if ($row["milkType"] != 3 && $row["milkType"] != 4){
          echo "<td>";
          echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = 'finish'>食完</button>";
          echo "</td>";
        } else {
          echo "<td></td>";
        }
      }
      echo "<td>";
      echo $row["remark"]."<br/>";
      if ($row["milkType"] == 1 ) {
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '少過1邊'>少過1 邊</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '1邊'>1 邊</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '2邊'>2 邊</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '3邊'>3 邊</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '4邊'>4 邊</button>";
      } else if($row["milkType"] == 2 ) {
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '少過1安'>少過 1 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '1安'>1 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '2安'>2 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '3安'>3 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '4安'>4 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '5安'>5 安</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '6安'>6 安</button>";
      } else if($row["milkType"] == 3 ) {
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '透明'>透明</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '帶黃'>帶黃</button>&nbsp;";
      } else if($row["milkType"] == 4 ) {
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '綠色 帶粒粒'>綠色 帶粒粒</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '深綠色 帶粒粒'>深綠色 帶粒粒</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '淺綠色 帶粒粒'>淺綠色 帶粒粒</button>&nbsp;";
        echo "<button type = 'submit' class = 'btn btn-primary' id = 'submitType' name = 'submitType' value = '條狀'>條狀</button>&nbsp;";
      }
      echo "</td>";
      echo '</form>';
      echo "</tr>";
     
    }
  }
}