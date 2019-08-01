<div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title"><?= Header::GetSectionTitle($pageName) ?></h4>
          </div>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-12">
        <div class="card">
          <?php
          $date = date("Y-m-d");
          for($i = 0 ; $i < 5; $i++) {
            $checkDate = date('Y-m-d', strtotime($date . ' -'.$i.' days'));          
            echo $checkDate."<br/>";
          }
          ?>
        </div>
      </div>
    </div>
