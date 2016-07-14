<?php 
require_once('app/helpers/DbHelper.php');

class Tree{
	public static function getAllTree(){
		$query = 'SELECT * FROM tree';

		return DbHelper::getData($query);
	}
}

?>