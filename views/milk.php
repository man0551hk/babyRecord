<?php
if (!empty($_POST)) {
  if ($_POST["action"] == 'new') {
    $fields = array(
      "milkType" => $_POST["milktype"],
      "startTime" => date('Y-m-d H:i:s'),
    );
    dbController::QueryDB("milk", $fields, "insert");
  } else if ($_POST["action"] == 'updateEndTime') {
    if ($_POST["submitType"] == 'finish') {
      $fields = array(
        "id" => $_POST["id"],
        "endTime" => date('Y-m-d H:i:s')
      );
      dbController::QueryDB("milk", $fields, "update");
    } else {
      $fields = array(
        "id" => $_POST["id"],
        "remark" => $_POST["submitType"]
      );
      dbController::QueryDB("milk", $fields, "update");
    }
  }
}
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title"><?= Header::GetSectionTitle($pageName) ?></h4>
          </div>
      </div>
    </div>

	<div class="container-fluid">	
    <div class = "row">
      <div class = "col-md-12">
        <div class = "card">
          <form method = "POST" enctype="multipart/form-data">
            <?php UI::CreateElement('action', 'hidden', null, 'new'); ?>
            <div class="card-header"></div>
            <div class="card-body">
              <?php 
              $data = array();
              $option = new Option('人奶', 1);
              array_push($data, $option);

              $option = new Option('奶粉', 2);
              array_push($data, $option);
              
              $option = new Option('開細', 3);
              array_push($data, $option);

              $option = new Option('開大', 4);
              array_push($data, $option);
              UI::CreateElement('Milk Type', 'dropdown', $data, ''); 
              

              ?>



            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>  
          </form>          
        </div>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-12">
        <div class="card">
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <?php
                    $header = array(
                      'Milk Type',
                      'Start Time',
                      'End Time',
                      'Remark'
                    ); 
                    UI::CreateTableHeader($header);
                  ?>
                </tr>
              </thead>
              <?php 
                $cols = array(
                  'id',
                  'milkType',
                  'startTime',
                  'endTime',
                  'remark'
                );           
                $result = dbController::QueryDB('milk m', $cols, 'query', '', '', 'id desc');
                milkController::CustomTableRecord($result);
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
	</div>