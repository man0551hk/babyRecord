<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Url::assetFolderPath()?>images/shinola_logo.png">
    <title>Baby Record</title>
    <!-- Custom CSS -->
		<link href="<?= Url::assetFolderPath()?>libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= Url::assetFolderPath()?>libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= Url::assetFolderPath()?>libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="<?= Url::assetFolderPath()?>libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= Url::assetFolderPath()?>libs/quill/dist/quill.snow.css">		
    <!-- Custom CSS -->
    <link href="<?=Url::cssFolderPath()?>style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.error {
				color:red;
			}
		</style>
</head>

<body>
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<div id="main-wrapper">
	<header class="topbar" data-navbarbg="skin5">
		<nav class="navbar top-navbar navbar-expand-md navbar-dark">
			<div class="navbar-header" data-logobg="skin5">
				<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
					<i class="ti-menu ti-close"></i>
				</a>
				<a class="navbar-brand" href="<?=Url::getDomain()?>">
						<b class="logo-icon p-l-10">
						
							矇矇豬
						</b>
						<span class="logo-text">
						</span>
				</a>
				<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
			</div>

			<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
				<ul class="navbar-nav float-left mr-auto">
					<li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        
				</ul>

				<ul class="navbar-nav float-right">

						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= Url::assetFolderPath()?>images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
								<div class="dropdown-menu dropdown-menu-right user-dd animated">
										<a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Jerry Wong</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
								</div>
						</li>
				</ul> 
			</div>
		</nav>
	</header>		
				

				
				