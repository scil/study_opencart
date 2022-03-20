<?php
namespace DB;
final class PDO {
	private $connection = null;
	private $statement = null;

	public function __construct($hostname, $username, $password, $database, $port = '3306') {
		try {
			$this->connection = new \PDO("mysql:host=" . $hostname . ";port=" . $port . ";dbname=" . $database, $username, $password, array(\PDO::ATTR_PERSISTENT => true));
		} catch (\PDOException $e) {
			throw new \Exception('Failed to connect to database. Reason: \'' . $e->getMessage() . '\'');
		}

		$this->connection->exec("SET NAMES 'utf8'");
		$this->connection->exec("SET CHARACTER SET utf8");
		$this->connection->exec("SET CHARACTER_SET_CONNECTION=utf8");
		$this->connection->exec("SET SQL_MODE = ''");
	}

	public function prepare($sql) {
		$this->statement = $this->connection->prepare($sql);
	}

	public function bindParam($parameter, $variable, $data_type = \PDO::PARAM_STR, $length = 0) {
		if ($length) {
			$this->statement->bindParam($parameter, $variable, $data_type, $length);
		} else {
			$this->statement->bindParam($parameter, $variable, $data_type);
		}
	}

	public function execute() {
		try {
			if ($this->statement && $this->statement->execute()) {
				$data = array();

				while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->row = (isset($data[0])) ? $data[0] : array();
				$result->rows = $data;
				$result->num_rows = $this->statement->rowCount();
			}
		} catch (\PDOException $e) {
			throw new \Exception('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode());
		}
	}

	public function query($sql, $params = array()) {

$logfile = DIR_LOGS . "SQL_log_"  .  (defined('SCIL_OC_START_TIME')?SCIL_OC_START_TIME:"") . ".txt";
$starttime  = microtime(true);

		$this->statement = $this->connection->prepare($sql);
		
		$result = false;

		try {
			if ($this->statement && $this->statement->execute($params)) {
				$data = array();

				while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->row = (isset($data[0]) ? $data[0] : array());
				$result->rows = $data;
				$result->num_rows = $this->statement->rowCount();
			}
		} catch (\PDOException $e) {
			throw new \Exception('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode() . ' <br />' . $sql);
		}

		if ($result) {

if(!defined('SCIL_ENABLE_DB_PDO_LOG') || SCIL_ENABLE_DB_PDO_LOG ===true){
    $endtime  = microtime(true);
    $log = sprintf(date("Y-m-d H:i:s",time())." QUERY EXECUTED IN %0.4f - %s", $endtime-$starttime, $sql);
    if(!file_exists($logfile)) { file_put_contents($logfile,''); }
    $f = fopen($logfile, 'a');
    fwrite($f, $log."\n");
    fclose($f);
}
                
			return $result;
		} else {
			$result = new \stdClass();
			$result->row = array();
			$result->rows = array();
			$result->num_rows = 0;

if(!defined('SCIL_ENABLE_DB_PDO_LOG') || SCIL_ENABLE_DB_PDO_LOG ===true){
    $endtime  = microtime(true);
    $log = sprintf(date("Y-m-d H:i:s",time())." QUERY EXECUTED IN %0.4f - %s", $endtime-$starttime, $sql);
    if(!file_exists($logfile)) { file_put_contents($logfile,''); }
    $f = fopen($logfile, 'a');
    fwrite($f, $log."\n");
    fclose($f);
}
                
			return $result;
		}
	}

	public function escape($value) {
		return str_replace(array("\\", "\0", "\n", "\r", "\x1a", "'", '"'), array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"'), $value);
	}

	public function countAffected() {
		if ($this->statement) {
			return $this->statement->rowCount();
		} else {
			return 0;
		}
	}

	public function getLastId() {
		return $this->connection->lastInsertId();
	}
	
	public function isConnected() {
		if ($this->connection) {
			return true;
		} else {
			return false;
		}
	}
	
	public function __destruct() {
		$this->connection = null;
	}
}
