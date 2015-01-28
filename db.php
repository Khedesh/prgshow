<?php

define("DB_HOST", "localhost");
define("DB_NAME", "prgshow");
define("DB_USER", "mohammad");
define("DB_PASS", "khedeshiskhodash");

class DB
{
	private $host_name = "";
	private $db_name = "";
	private $user_name = "";
	private $passwd = "";

	private $db_con = NULL;

	public function __construct($_host_name=DB_HOST, $_db_name=DB_NAME, $_user_name = DB_USER, $_passwd=DB_PASS)
	{
		$this->host_name = $_host_name;
		$this->db_name = $_db_name;
		$this->user_name = $_user_name;
		$this->passwd = $_passwd;
	}

	public function connect()
	{
		$this->db_con = new PDO("mysql:hostname=".$this->host_name.";dbname=".$this->db_name.";charset=utf8", 
				$this->user_name, $this->passwd);
		$this->db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}

	public function query($query)
	{
		try
		{
			$stmt = $this->db_con->query($query);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $ex)
		{
			echo "Error: ". $ex->getMessage();
			return false;
		}
	}

	public function get_table_fields($tbl_name)
	{
		$query = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='".$tbl_name . "';";

		$res = $this->query($query);

		$ret = array();

		foreach($res as $col)
		{
			array_push($ret, $col['COLUMN_NAME']);
		}

		return $ret;
	}

	public function insert_row($tbl_name, $data)
	{
		// creating query
		$query = "INSERT INTO `" . $tbl_name . "`(";
		$values = "VALUES( ";

		$keys = array_keys($data);

		for($i = 0 ; $i < count($keys) ; $i ++)
		{
			$query = $query . "`" . $keys[$i] ."`";
			$values = $values . "'" . $data[$keys[$i]] . "'";

			if($i < count($keys) - 1)
			{
				$query .= ",";
				$values .= ",";
			}
		}


		$query .= ") ";
		$query .= $values . ");";
		
		//echo $query . "<br />";

		// executing
		$this->query($query);
	}

	public function get_table_rows($tbl_name)
	{
		$query = "SELECT * FROM `".$tbl_name . "`;";

		return $this->query($query);
	}

	public function get_table_where($tbl_name, $conds)
	{
		$query = "SELECT * FROM `" . $tbl_name ."` WHERE ";

		$keys = array_keys($conds);

		for($i = 0 ; $i < count($keys) ; $i ++)
		{
			$query .= "`".$keys[$i] . "`='". $conds[$keys[$i]] ."'";

			if($i < count($keys) - 1)
			{
				$query .= " AND ";
			}
		}

		$query .= ";";

		//echo $query;

		return $this->query($query);
	}
}

?>
