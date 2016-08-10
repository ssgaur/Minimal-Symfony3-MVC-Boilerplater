<?php

	require_once (ROOT . DS . 'lib' . DS . 'config.php');
		
	spl_autoload_register(function($className){
		if (file_exists(ROOT . DS . 'lib' . DS . strtolower($className) . '.class.php')) {
			require_once(ROOT . DS . 'lib' . DS . strtolower($className) . '.class.php');
		} else if (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . strtolower($className) . '.php')) {
			require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . strtolower($className) . '.php');
		} else if (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . strtolower($className) . '.php')) {
			require_once(ROOT . DS . 'app' . DS . 'models' . DS . strtolower($className) . '.php');
		} else {
			/* Error Generation Code Here */
		}
	});
	

	if (ini_get('register_globals')) {
        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
        foreach ($array as $value) {
            foreach ($GLOBALS[$value] as $key => $var) {
                if ($var === $GLOBALS[$key]) {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }

    global $url;

    if(empty($url)){
    	$url = $config['default_controller']."/".$config['default_action'];
    }

	$urlArray = array();
	$urlArray = explode("/",$url);

	$controller = $urlArray[0];
	array_shift($urlArray);
	$action = $urlArray[0];
	array_shift($urlArray);
	$queryString = $urlArray;

	$controllerName = $controller;
	$controller = ucwords($controller);
	$model = rtrim($controller, 's');
	$controller .= 'Controller';

	$dispatch = new $controller($model,$controllerName,$action);

	if ((int)method_exists($controller, $action)) {
		call_user_func_array(array($dispatch,$action),$queryString);
	} else {
		/* Error Generation Code Here */
	}