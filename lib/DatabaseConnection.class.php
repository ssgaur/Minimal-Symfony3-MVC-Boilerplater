<?php

class DatabaseConnection{
	public $_host,$_dbname,$_username,$_password;
	protected $_connection;

	public function __construct($host,$dbname,$username,$password){
		$this->_host = $host;
		$this->_dbname = $dbname;
		$this->_username = $username;
		$this->_password = $password;
	}

	function dbConnect(){
		try {
			$db = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname.';charset=utf8mb4',
									$this->_username, $this->_password);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			return $db;
		} 
		catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}
	
}