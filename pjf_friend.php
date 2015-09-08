<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>
<body>
<table width="1024" align="center" border="1"  cellspacing="0">
<tr>
	<td height="120" align="center" colspan="2" ><img  src="img/apple.jpg" /></td>
</tr>
<tr>
	<td height="30" align="center" colspan="2">title</td>
</tr>
<tr>
	<td width="220" valign="top" >
	
</td>
	<td height="400" align="center" width="804" >
<?
include "connect.php";
$sql="select * From member2";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;

if ($number<>0) {
		echo "
			<P><B>Show Members</B></P>
			<TABLE BORDER='1'>
				<TR BGCOLOR='#E8E8E8'> 
				 <TD><CENTER><B>Sequence</B></CENTER></TD>
				<TD><CENTER><B>Name</B></CENTER></TD>
				<TD><CENTER><B>Email</B></CENTER></TD>
				<TD><CENTER><B>Password</B></CENTER></TD>
		</TR>";
		while($rs=mysql_fetch_array($result)) {
			$id_sstd2=$rs[id_sstd];
			$Name2=$rs[Name];
			$Emai2=$rs[Email];
			$Password2=$rs[Password];

			echo "
				<TR> 
					<TD><CENTER>$no</CENTER></TD>
					<TD>$Name2</TD>
					<TD>$Email2</TD>
					<TD>$Password2</TD>
				
				</TR>";
			$no++;
		}
		echo "</TABLE>";	
		mysql_close();
	} 
?>
</td>
</tr>
<tr>
	<td height="40" align="center" colspan="2" >@ www.friendpage/minions.com</td>
</tr>

</table>
</body>
</html>
