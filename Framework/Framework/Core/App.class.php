<?php if (!defined("BASEPATH")) die("No direct Access to Script Files!");

require_once(BASEPATH . "/Core/Librarys/RouteManager.class.php");
require_once(BASEPATH . "/Core/Librarys/ErrorManager.class.php");

class App{

    private $_ErrorManager;
    private $_RouteManager;

	public function __construct() {
        $this->_ErrorManager = new ErrorManager();
        $this->_RouteManager = new RouteManager();

        $this->_RouteManager->parseURL();
        $this->_RouteManager->routeURL();
	}

}