<?php 

class DbHelper{
	const HOST = 'localhost';
	const USER = 'root';
	const PASSWORD = '';
	const DBNAME = '7winds';
	const CONNECTION_ERROR = 'database connection failed';

	public static function getData($query){
		$connection = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DBNAME);

		if(mysql_errno()) die(self::CONNECTION_ERROR);

		$rows = mysqli_query($connection, $query);

		$data = array();

		while($row = mysqli_fetch_row($rows)){
			array_push($data, $row);
		}

		mysqli_close($connection);

		return $data;
	}
}

?>