<?php

class DBHelper {
	private $connect_id;
	
	// 构造函数
	public function __construct() {
		require_once 'db_params.php';
	}
	/**
	 * 连接数据库
	 * 
	 * @param string $dbhost        	
	 * @param string $dbuser        	
	 * @param unknown $dbpw        	
	 * @param string $dbname        	
	 * @param string $charset        	
	 */
	private function connect($dbhost = HOST_NAME, $dbuser = USER_NAME, $dbpw=PASSWORD, $dbname = DATABASE, $charset = 'utf8') {
		$this->connect_id = mysql_connect ( $dbhost, $dbuser, $dbpw, true );
		if (! $this->connect_id) {
			$this->halt ( "数据库连接失败" );
		}
		if (! mysql_select_db ( $dbname, $this->connect_id )) {
			$this->halt ( '数据库选择失败' );
		}
		mysql_query ( "set names " . $charset );
	}
	
	/**
	 * 关闭数据连接
	 */
	private function close() {
		mysql_close ( $this->connect_id );
	}
	
	/**
	 * 通过sql语句获取数据
	 *
	 * @return : array()
	 */
	public function queryObjListBySql($sql) {
		$this->connect ();
		$rs = mysql_query ( $sql, $this->connect_id );
		$objList = array ();
		while ( $obj = mysql_fetch_object ( $rs ) ) {
			if ($obj) {
				$objList [] = $obj;
			}
		}
		$this->close ();
		return $objList;
	}
	
	/**
	 * 
	 * @param  $table
	 * @param  $columns
	 * @param  $values
	 * @return the result of insert
	 */
	public function insertData($table, $columns = array(), $values = array()) {
		$sql = 'insert into ' . $table . '( ';
		for($i = 0; $i < sizeof ( $columns ); $i ++) {
			$sql .= $columns [$i];
			if ($i < sizeof ( $columns ) - 1) {
				$sql .= ',';
			}
		}
		$sql .= ') values ( ';
		for($i = 0; $i < sizeof ( $values ); $i ++) {
			$sql .= "'" . $values [$i] . "'";
			if ($i < sizeof ( $values ) - 1) {
				$sql .= ',';
			}
		}
		$sql .= ' )';
		$this->connect ();
		$result = mysql_query ( $sql, $this->connect_id );
		$this->close ();
		return $result;
	}
	
	/**
	 * 通过表中的某一属性获取数据
	 */
	public function queryDataByAtr($tableName, $atrName, $atrValue) {
		@$data = $this->getObjListBySql ( "SELECT * FROM " . $tableName . " WHERE $atrName = '$atrValue'" );
		if (count ( $data ) != 0)
			return $data;
		return NULL;
	}
	
	/**
	 * 通过表中的某一属性获取数据
	 */
	public function queryDataByAtrs($tableName, $atrNames, $atrValues) {
		$sql = "SELECT * FROM  $tableName WHERE $atrNames[0] = '$atrValue[0]'";
		for ($i = 1; $i < sizeof($atrNames);$i++){
			$sql .= "AND $atrNames[$i] = '$atrValue[$i]'";
		}
		@$data = $this->getObjListBySql ($sql);
		if (count ( $data ) != 0)
			return $data;
		return NULL;
	}
	/**
	 * 通过表中的"id"，删除记录
	 */
	public function delete($tableName, $atrName, $atrValue) {
		$deleteResult = false;
		if (mysql_query ( "DELETE FROM " . $tableName . " WHERE $atrName = '$atrValue'" ))
			$deleteResult = true;
		$this->close ();
		if ($deleteResult)
			return true;
		else
			return false;
	}
	/**
	 * 更新表中的属性值
	 */
	public function updateParamById($tableName, $atrName, $atrValue, $key, $value) {
		$db = new DB ();
		$db->connect ();
		if (mysql_query ( "UPDATE " . $tableName . " SET $key = '$value' WHERE $atrName = '$atrValue' " )) { // $key不要单引号
			$db->close ();
			return true;
		} else {
			$db->close ();
			return false;
		}
	}
	/*
	 * @description: 取得一个table的所有属性名
	 * @param: $tbName 表名
	 * @return：字符串数组
	 */
	public function fieldName($tbName) {
		$resultName = array ();
		$i = 0;
		$this->connect ();
		$result = mysql_query ( "SELECT * FROM $tbName" );
		while ( $property = mysql_fetch_field ( $result ) ) {
			$resultName [$i ++] = $property->name;
		}
		$this->close ();
		return $resultName;
	}
	
	/**
	 *  错误提示
	 * @param string $msg
	 */
	private function halt($msg = '') {
		$msg .= "\r\n" . mysql_error ();
		die ( $msg );
	}
}

?>