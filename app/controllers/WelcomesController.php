<?php

class WelcomesController extends Controller{
	function index(){
		$data = array(
			"title" => " other title retur  id",
			"price" => "12340",
			"category" => "Some category"
			);
		$welcome  = new Welcome;

		$welcome->save($data);
		$welcome->update(23,$data);
		$welcome->destroy(28);
		$results = $welcome->all();
		$results = $welcome->find_By_Column("price","12340");
		$results = $welcome->partial_String_Search("price","34");
		
		$this->_template->render($results);
	}
}