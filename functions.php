<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud');

class DB_con{
function __construct(){
	$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$this->dbcon=$conn;
	if(mysqli_connect_errno()){
		echo "เชื่อมต่อsql ไม่สำเร็จ :" .mysqli_connect_error();
			}
}
public function insert($name,$number45,$Price) {
	$result = mysqli_query($this->dbcon,"INSERT INTO tblusers(name,number45,Price)VALUES('$name','$number45','$Price')");
		return $result;
}


public function fetchdata(){
$result = mysqli_query($this->dbcon,"SELECT * FROM tblusers" );
return $result;

}


public function fetchonerecord($userid){
	$result = mysqli_query($this->dbcon,"SELECT * FROM tblusers WHERE id = '$userid'" );
	return $result;
}


public function delete($userid){
    $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers WHERE id = '$userid'");
    return $deleterecord;
}

}

?>