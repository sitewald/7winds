<?php 
require_once('app/db.php');

class DbHelper{
	public static function getData($query){
		$data = array();

		$connection = 
		mysqli_connect(db::HOST, db::USER, db::PASSWORD, db::DBNAME) or die(db::CONNECTION_ERROR);

		$rows = mysqli_query($connection, $query);

		while($row = mysqli_fetch_row($rows)){
			array_push($data, $row);
		}

		mysqli_close($connection);


		return $data;
	}
}

?>