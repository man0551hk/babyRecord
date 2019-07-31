<?php

$modelFiles = scandir(Url::modelsFolderPath());
if (is_array($modelFiles)) { 
	foreach ($modelFiles as $modelFile) {
		if (strpos($modelFile, ".php") > -1) {
			include_once(Url::modelsFolderPath() . $modelFile);
		}
	}
}

$controllers = scandir(Url::controllersFolderPath());
if (is_array($controllers)) { 
	foreach ($controllers as $controller) {
		if (strpos($controller, ".php") > -1 && $controller != 'PageController.php') {
			include_once(Url::controllersFolderPath() . $controller);
		}
	}
}

class PageController {
	public $dbConnection;
	public $dbController;
	public $commonController;
	public $milkController;
	public $langSet;

	
	public function __construct()  
	{  
		$this->dbConnection = new DbConnection();
		$link = $this->dbConnection->GetConnection();
		$this->dbController = new DBController($this->dbConnection);
		$this->commonController = new CommonController($this->dbConnection);
		$this->milkController = new MilkController($this->dbConnection);
	} 
	
	public function show($pageName) {
		include Url::getPath("views") . 'header.php';
		include $this->GetMenu();
		include Url::getPath("views") . $pageName;
		include Url::getPath("views") . 'footer.php';
	}

	public function GetMenu() {
		return Url::viewsFolderPath() . strtolower(str_replace(" ",  "", Session::get('position'))) . 'Menu.php';
	}
}

?>
