<?php
/***********************************************************************************/
// Database Module - for mySQL and PHP4
/***********************************************************************************/
// Version			: V2.3
// LastModify		: 2016/7/29
// Author			: AllanSong	(allan@allan.idv.tw)
/***********************************************************************************/
// History			:
//	V1.0		=>	2000/8/20
//  V1.5		=>	2001/08/05
//	V2.0		=>	2004/9/10			**改寫模組結構
//	V2.1		=>	2004/10/15			**新增 Clear 函數
//	V2.2		=>	2004/11/17			**新增 Arrays 函數
//	V2.3		=>	2016/07/29			**改用用 mySQLi Lib
/***********************************************************************************/

// ================================================================================= //
// Global variables setting
// ================================================================================= //
$DBLINK = @mysqli_connect(DBCONSERVER, DBCONID, DBCONPASSWORD);

class DBCTRL {

	// ================================================================================= //
	// OO variables setting
	// ================================================================================= //
	var $DBTYPE = "mySQL";

	// MySQL Connect Function
	function Connect () {
		
		if ($GLOBALS['DBLINK'] == false) {
			echo $this->DBTYPE . " Can't Connect !!\n";
			exit;
		}
	}
  
	// MySQL Close Function
	function Close () {
		@mysqli_close($GLOBALS['DBLINK']);
	}
  
	// MySQL Free Result Function
	function Free($value) {
		@mysqli_free_result($value);
	}

	// MySQL Create Function
	function Create ($value) {
		$create = @mysqli_create_db($value);
		if ($create == false) {
			echo $this->DBTYPE . " Can't Create a DataBase !!\n";
			exit;
		}
	}

	// MySQL Drop Function
	function Drop ($value) {
		$drop = @mysqli_drop_db($value);
		if ($drop == false) {
			echo $this->DBTYPE . " Can't Drop a DataBase !!\n";
			exit;
		}
	}
  
	// MySQL Select Function
	function Select ($value) {
//echo $value;
//echo $GLOBALS['DBLINK'];
		$select = @mysqli_select_db($GLOBALS['DBLINK'], $value);
		if ($select == false) {
			echo $this->DBTYPE . " Can't Select a DataBase !!\n";
			exit;
		}
		$this->Query("SET CHARACTER SET UTF8;");
		$this->Query("SET NAMES UTF8;");
		$this->Query("SET CHARACTER_SET_CLIENT = UTF8;");
		$this->Query("SET CHARACTER_SET_RESULTS = UTF8;");
	}

	function Log($what, $who = '')
	{
		global $_COOKIE;
		$who = ($who) ? $who : $_COOKIE['loginID'];
		$when = date('Y-m-d H:i:s');
		$where = getenv('REMOTE_ADDR');
		if ($who != SYSOP)
		{
			$this->Query("INSERT INTO ". TABLE_LOG ." (".TABLE_LOG."ID, ".TABLE_LOG."Action, ".TABLE_LOG."Datetime, ".TABLE_LOG."IPAddr) VALUES ('". $who ."','". $what ."','". $when ."','". $where ."')");
		}
	}

	// MySQL 取得欄位抬頭函數
	function Head ($value) {
		$head = @mysqli_fetch_field($value);
		return $head;
	}

	// MySQL 取得資料錄、資料列
	function Body ($value) {
		$body = @mysqli_fetch_row($value);
		return $body;
	}

	// MySQL 取得資料錄、資料列
	function Arrays ($value) {
		$body = @mysqli_fetch_array($value, MYSQLI_ASSOC);
		return $body;
	}

	// MySQL Num Function
	function Num ($value) {
		$num = @mysqli_num_rows($value);
		return $num;
	}

	// 檢查 MySQL 是否正常使用指令
	function Query ($value) {
		$query = @mysqli_query($GLOBALS['DBLINK'], $value);
		if ($query == false) {
			echo $this->DBTYPE . " 無法正常使用使令。<br>\n";
			echo "錯誤敘述：".mysqli_error($GLOBALS['DBLINK'])."\n";
			exit;
		}
		return $query;
	}

	// 清空 table
	function Clear($table) {
		$this->Query("TRUNCATE TABLE " . $table);
	}

}

$DB = new DBCTRL;
?>
