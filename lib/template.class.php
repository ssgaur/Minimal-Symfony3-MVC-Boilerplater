<?php
class Template {

	protected $variables = array();
	protected $_controller;
	protected $_action;

	function __construct($controller,$action) {
		$this->_controller = $controller;
		$this->_action = $action;
	}

    function render($data = array()) {
		if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $this->_controller . DS . 'header.php')) {
			include (ROOT . DS . 'app' . DS . 'views' . DS . $this->_controller . DS . 'header.php');
		} else {
			include (ROOT . DS . 'app' . DS . 'views' . DS . 'header.php');
		}

        include (ROOT . DS . 'app' . DS . 'views' . DS . $this->_controller . DS . $this->_action . '.php');		 

		if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $this->_controller . DS . 'footer.php')) {
			include (ROOT . DS . 'app' . DS . 'views' . DS . $this->_controller . DS . 'footer.php');
		} else {
			include (ROOT . DS . 'app' . DS . 'views' . DS . 'footer.php');
		}
    }

}
