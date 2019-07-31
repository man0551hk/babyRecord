<?php 
	session_start();
	include_once 'helpers/session_helper.php';
	include_once 'helpers/cookie_helper.php';
	include_once 'helpers/url_helper.php';
	include_once 'helpers/encrypt_helper.php';
	include_once 'helpers/ui_helper.php';
	include_once 'helpers/header_helper.php';
	include_once 'helpers/SimpleXLSX.php'; 
	include_once 'controllers/PageController.php';

	//hardcode
	Session::set("position", "master");

	$page_controller = new PageController();
	$pageName = "index";
	if (isset($_GET["pageName"])) {
		$pageName = $_GET["pageName"];
	}

	$page_controller->show($pageName.'.php');
?>