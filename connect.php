<?
$host="localhost";
$user="root";
$pw="3479";
$dbname="project_friend";
$c = mysql_connect($host,$user,$pw);
mysql_query("SET NAMES TIS620");
if (!$c) {
	echo "<H3>�������ö�Դ��Ͱҹ��������</H3>";
	exit();
}
?>