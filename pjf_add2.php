<?
$Name2=$_POST[Name];
$Email2=$_POST[Email];
$Password2=$_POST[Password];
include "connect.php";
$sql="INSERT INTO member2 VALUES('','$Name2','$Email2','$Password')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<script>alert('เพิ่มสมาชิกเรียบร้อยแล้ว')</script>";
	echo"<script language='javascript'>window.location.href='pjf_friend.php'</script>";
} else {
	echo "<script>alert('ไม่สามารถเพิ่มสมาชิกได้')</script>";
	echo"<script language='javascript'>window.location.href='pjf_add.php'</script>";
}	
mysql_close();
?>
