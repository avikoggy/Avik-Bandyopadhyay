<?php

class users
{
	
	public $host="localhost";
	public $username="root";
	public $pass="";
    public $db_name="quiz";
	public $conn;

	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die("database connection failed".$this->conn->connect_errno); 
		}
	}

	public function login($data)
	{
       $this->conn->query($data);
	}
}

?>