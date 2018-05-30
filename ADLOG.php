<?php     
$login=$_POST['login']; 
$password=$_POST['password'];
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("salon")or die("cannot select DB"); 
$query=mysql_query("SELECT * FROM adlog WHERE login='$login' ");
$numrows=mysql_num_rows($query);
if($numrows!==0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dblog=$row['login'];
		$dbpas=$row['password'];
	}
	if($login==$dblog&&($password)==$dbpas)
	{
	header('Location: adminform1.php');
	}
	else
	{
	echo("wrong password");
	}
}
?>
