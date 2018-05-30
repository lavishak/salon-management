<?php     
$log=$_POST['log']; 
$pas=$_POST['pas'];
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("salon")or die("cannot select DB"); 
$query=mysql_query("SELECT * FROM emplog WHERE log='$log' ");
$numrows=mysql_num_rows($query);
if($numrows!==0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dblog=$row['log'];
		$dbpas=$row['pas'];
	}
	if($log==$dblog&&($pas)==$dbpas)
	{
	header('Location: bill.html');
	}
	else
	{
	echo("wrong password");
	}
}
?>
