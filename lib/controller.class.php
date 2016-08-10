<?php
class Controller {

	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	function __construct($model, $controller, $action) {

		if(!method_exists($controller."controller",$action)){
			include (ROOT . DS . 'app' . DS . 'views' . DS . 'default_404.php');
	    	die();
		}

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;

		$this->$model = new $model;
		$this->_template = new Template($controller,$action);

	}

}
