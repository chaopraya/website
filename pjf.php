<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<a href="pjf_add.php">เพิ่มข้อมูลสมาชิก</a>
<?
include "connect.php";
$sql="select * from member2";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;

if ($number<>0) {
		echo "
			<P><B>แสดงสมาชิก</B></P>
			<TABLE BORDER='1'>
				<TR BGCOLOR='#E8E8E8'> 
				 <TD><CENTER><B>ลำดับ</B></CENTER></TD>
				<TD><CENTER><B>Nmae</B></CENTER></TD>
				<TD><CENTER><B>Email</B></CENTER></TD>
				<TD><CENTER><B>Password</B></CENTER></TD>
		</TR>";
		while($rs=mysql_fetch_array($result)) {
			$id_2=$rs[id_name];
			$Name2=$rs[Name];
			$Email2=$rs[Email];
			$Password2=$rs[Password];

			echo "
				<TR> 
					<TD><CENTER>$no</CENTER></TD>
					<TD>$Name2</TD>
					<TD>$Email2</TD>
					<TD>$Password2</TD>
					</A></TD>
				</TR>";
			$no++;
		}
		echo "</TABLE>";	
		mysql_close();
	} 
?>
</body>
</html>
