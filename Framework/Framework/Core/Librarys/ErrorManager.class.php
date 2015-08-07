<?php if (!defined("BASEPATH")) die("No direct Access to Script Files!");


require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Exception/Frame.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Exception/FrameCollection.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Exception/Inspector.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Exception/ErrorException.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Run.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Handler/HandlerInterface.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Handler/Handler.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Util/TemplateHelper.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Exception/Formatter.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Util/Misc.php");
require_once(BASEPATH . "/Core/Librarys/Includes/Whoops/Handler/PrettyPageHandler.php");

class ErrorManager{

    private $_Whoops;

	public function __construct() {
        $this->_Whoops = new \Whoops\Run;
        $this->_Whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $this->_Whoops->register();
	}
}