<?php

class ItemsController extends Controller {

	function view($id = null,$name = null) {
		$data = array(
			"title" => " other title retur  id",
			"price" => "12340",
			"category" => "Some category"
			);
		$item  = new Item;
		//$item->save($data);
		//$item->update(23,$data);
		//$item->destroy(28);
		//$results = $item->all();
		//$results = $item->find_By_Column("price","12340");
		$results = $item->partial_String_Search("price","34");
		print_r($results);
	}

}
