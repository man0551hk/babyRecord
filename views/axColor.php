<?php
if (!empty($_POST)) {
  if ($_POST["action"]== "insert") {
    $fields = array("axColor" => $_POST["axcolor"]);
    dbController::QueryDB("axColor", $fields, "insert");
  } else if ($_POST["action"]== "delete") {
    $fields = array("id" => $_POST["id"]);
    dbController::QueryDB("axColor", $fields, "delete");
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
        <div class="card">
          <form class="form-horizontal" method = "POST" onsubmit="return checkAxColorForm()">
            <?php UI::CreateElement('action', 'hidden', null, 'insert');  ?>
            <div class="card-body">
              <?php UI::CreateElement('AXColor', 'text', null, '');  ?>
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
                  <th>AXColor</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <?php 
                $result = dbController::QueryDB('axColor', array('id', 'axColor'), 'query', '');
                UI::CreateTableRow($result, true);
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
	</div>
