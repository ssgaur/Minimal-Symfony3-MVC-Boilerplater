<?php
/*
* This is how you have to start for any controller. 
* Please go through each line and its explanation
* Author: Shailendra
*/
class WelcomesController extends Controller{

	// This is action visible into URL. You can give any name here.
	// A self explantory action name is recommended
	function index(){
		// This is where you write your own logic. You can collect data
		// if this method serving the POST request using $_POST[] variable

		/*************************************************************************
		*******       Data array must have key name as table attributes     *******
		**************************************************************************
		
		$data = array(
			"title" => " other title retur  id",
			"price" => "12340",
			"category" => "Some category"
			);

		**************************************************************************/



		// This is first step if you want ot user your database table named 'welcomes'
		// You must create this object to access the ORM
		
		/*************************************************************************
		******************     Available Model Methods     ***********************
		**************************************************************************

		$welcome  = new Welcome;   -> make sure you have Welcome class in welcome.php
								   -> in '/app/models/'  directory

		**************************************************************************/

		// For accessing all 6 method demonstrated here must have arguement as here.
		// $data must be an associative array, Whose key must have same name as in your
		// 'welcomes' table. 
		// Please see the documentation for more info about these functions configuration
		
		/*************************************************************************
		******************     Available Model Methods     ***********************
		**************************************************************************

		$welcome->save($data);
		$welcome->update(23,$data);
		$welcome->destroy(28);
		$results = $welcome->all();
		$results = $welcome->find_By_Column("price","12340");
		$results = $welcome->partial_String_Search("price","34");

		**************************************************************************/

		// This how you actually render the html with the data.
		// Make sure you have a file named 'index.php' (same as action name) in 'welcomes' (controller name) folder inside
		// 'views' folder.  

		/*************************************************************************
		******************     Available Model Methods     ***********************
		**************************************************************************
		
		$this->_template->render($results); -> if view show server side data

		$this->_template->render(); -> If no data data required into view
		
		**************************************************************************/
	
		$this->_template->render();
	}
}