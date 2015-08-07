<?php if (!defined("BASEPATH")) die("No direct Access to Script Files!");

require(BASEPATH . "/Core/Helpers/String.class.php");

class RouteManager{

    public $_Route;
    public $_RouteArray;

	public function __construct() {
        $this->_Route =  isset($_GET['route']) ? $_GET['route'] : "Home/Account";
	}

    public function parseURL() {
        $this->_RouteArray = explode("/", rtrim($this->_Route, "/"));    
    }

    public function routeURL() {
            throw new Exception("Error Handling Include'd");
            if (String::startsWith("-", $this->_RouteArray[0]))
            {
                echo "true";
            }
            else {

                echo "false";
            }
    }

}