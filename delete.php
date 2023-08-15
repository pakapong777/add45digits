<?php
include_once('functions.php');

if(isset($_GET['del'])){
	$userid = $_GET['del'];
	$deletedata =  new DB_con();
	$sql = $deletedata->delete($userid);

	if($sql){
		echo "<script> alert('ลบแล้วคะ');</script>";
		echo "<script>window.location.href='insert.php'</script>";
	}
}
?>
