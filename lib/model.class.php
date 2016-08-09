<?php
class Model extends DatabaseConnection {
	protected $_model;
	protected $_connectDB,$_db;

	function __construct() {
		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model)."s";
		$this->_connectDB = new DatabaseConnection(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
		$this->_db = $this->_connectDB->dbConnect();
		//$this->_connectDB->dbConnect();
	}

	public function getAllAttributesOfTable(){
        $result = $this->_db->query("SHOW FULL COLUMNS FROM `{$this->_table}`");
        $data = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row['Field'];
        }
        //$this->_db = null;
        return $data;     
	}

	public function save($data){
		$fieldString = "";
		$valueString = "";

		$i = 0;
		$numItems = count($data);
		foreach ($data as $key => $value) {
			if(++$i === $numItems){
				$fieldString .= $key;
				$valueString .= ":".$key;
			}
			else{
				
				$fieldString .= $key.", ";
				$valueString .= ":".$key.", ";
			}
		}
		$query = "INSERT INTO ".$this->_table." (";
		$query .= $fieldString." ) VALUES (";
		$query .= $valueString." )";
		//echo "<br><br><br>".$query;
		//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
		$insertData = $this->_db->prepare($query);
		foreach ($data as $key => $value) {
			$insertData->bindValue(':'.$key, $data[$key]);
		}
		try {
    		$insertData->execute();
    		return $this->_db->lastInsertId();
		} catch(PDOException $ex) {
		    echo "An Error occured!"; 
		    return false;
		}
		
		//$this->_db = null;
	}

	public function update($id,$data){
		$updateString = "";

		$i = 0;
		$numItems = count($data);
		foreach ($data as $key => $value) {
			if(++$i === $numItems){
				$updateString .= $key." = :".$key;   // firstname = :firsname  for PDO prepare statement
			}
			else{
				
				$updateString .= $key." = :".$key." , ";
			}
		}


		$query = "UPDATE ".$this->_table." SET ".$updateString." WHERE id = :id";
		//echo $query;

		//$stmt = $conn->prepare("UPDATE items SET title=:title, category=:category");
		$updateData = $this->_db->prepare($query);
		foreach ($data as $key => $value) {
			$updateData->bindValue(':'.$key, $data[$key]);
		}
		$updateData->bindValue(':id', $id);
		try {
			$updateData->execute();
			return true;
		} catch(PDOException $ex) {
		    echo "An Error occured!"; 
		    return false;
		}
		//$this->_db = null;
	}

	public function destroy($id){
		$deleteString = "DELETE FROM ".$this->_table." WHERE id =  :id";
		$deleteOne = $this->_db->prepare($deleteString);
		$deleteOne->bindValue(':id',$id);
		try{
			$deleteOne->execute();
			return true;
		}
		catch(PDOException $ex){
			echo "An Occured in deleting.";
			return false;
		}
	}

	public function all(){
		$searchString = "SELECT * FROM ".$this->_table;
		$prepare = $this->_db->prepare($searchString);
		try{
			$prepare->execute();
			//$results = $prepare->fetch(PDO::FETCH_OBJ);
			//$results = $prepare->fetch(PDO::FETCH_NUM);
			//$results = $prepare->fetch(PDO::FETCH_NUM);
			//$results = $prepare->fetch(PDO::FETCH_NUM);
			//$results = $prepare->fetch(PDO::FETCH_NUM);
			//$results = $prepare->fetchAll();
			//$results = $prepare->fetchColumn();
			while ($row=$prepare->fetch(PDO::FETCH_ASSOC)) {
			    $results[] = $row;
			}
			return $results;
		}
		catch(PDOException $ex){
			echo "An Error Occured.";
			return false;
		}
	}
	public function find_By_Column($columnName,$columnValue){
		$searchString = "SELECT * FROM ".$this->_table." WHERE ".$columnName." = :".$columnName;
		$prepare = $this->_db->prepare($searchString);
		$prepare->bindValue(":".$columnName,$columnValue);
		try{
			$prepare->execute();
			
			while ($row=$prepare->fetch(PDO::FETCH_ASSOC)) {
			    $results[] = $row;
			}
			return $results;
		}
		catch(PDOException $ex){
			echo "An Error Occured.";
			return false;
		}
	}
	public function partial_String_Search($columnName,$partialString){
		$searchString = "SELECT * FROM ".$this->_table." WHERE ".$columnName." LIKE :".$columnName;
		$prepare = $this->_db->prepare($searchString);
		$prepare->bindValue(":".$columnName,"%".$partialString."%");

		try{
			$prepare->execute();
			while ($row = $prepare->fetch(PDO::FETCH_ASSOC)) {
				$results[] = $row;
			}
			return $results;
		}
		catch(PDOException $ex){
			echo "An Error Occured.";
			return false;
		}

	}


	function __destruct() {
	}

	
}
