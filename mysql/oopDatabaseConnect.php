<?php

class Database{
	private $host = 'sql9.freemysqlhosting.net';
	private $user = 'sql9360982';
	private $pwd = 'PnxkixBbGe';
	private $dbname = 'myblog';

	private $dbh;
	private $error;
	private $stmt;


	public function  __construct(){
		$dsn = 'mysql:host'. $this -> host . ';dbname=' .$this->dbname;
		$option = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
	}


}

?>