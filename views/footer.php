
			<footer class="footer text-center" style = "background:#eeeeee">
				
			</footer>
		</div>	
  </div>
  
  <script src="<?= Url::assetFolderPath()?>libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>extra-libs/sparkline/sparkline.js"></script>

  <script src="<?= Url::jsFolderPath()?>waves.js"></script>
  <script src="<?= Url::jsFolderPath()?>sidebarmenu.js"></script>
  <script src="<?= Url::jsFolderPath()?>custom.min.js"></script>
  <!-- <script src="<?= Url::jsFolderPath()?>pages/dashboards/dashboard1.js"></script> -->
  
  <!-- chart-->
  <script src="<?= Url::assetFolderPath()?>libs/flot/excanvas.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot/jquery.flot.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot/jquery.flot.pie.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot/jquery.flot.time.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot/jquery.flot.stack.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot/jquery.flot.crosshair.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="<?= Url::jsFolderPath()?>pages/chart/chart-page-init.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/chart/turning-series.js"></script>
  <!-- form -->
  <script src="<?= Url::assetFolderPath()?>libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <script src="<?= Url::jsFolderPath()?>pages/mask/mask.init.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/select2/dist/js/select2.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/jquery-minicolors/jquery.minicolors.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= Url::assetFolderPath()?>libs/quill/dist/quill.min.js"></script>

  <script src="<?= Url::assetFolderPath()?>extra-libs/multicheck/datatable-checkbox-init.js"></script>
  <script src="<?= Url::assetFolderPath()?>extra-libs/multicheck/jquery.multicheck.js"></script>
  <script src="<?= Url::assetFolderPath()?>extra-libs/DataTables/datatables.min.js"></script>



	<script src="<?= Url::jsFolderPath()?>function.js?v=<?php echo time(); ?>"></script>
	<script>
    $(".select2").select2();
    $('#zero_config').DataTable();
		SetDomain('<?=Url::getDomain()?>');
  </script>
	<?php
	if (!empty($_POST)) {
		?><script>//AlertSuccess();</script><?php
	}
	?>
</body>
</html>