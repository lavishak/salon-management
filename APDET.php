<html>
<style>
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 15px;
}
</style>
<body background="salon.png" >
<h1 align="center" style="color:blue;">APPOINTMENT DETAILS ARE</h1>
<div class="center">
<?php
$error="<h1> Problem Connecting database</h1>";
$conn = mysql_connect('localhost','root');
mysql_select_db("salon") or die("$error");
$sql="SELECT CNAME, APPOINTMENTD from customerinfo" ;
$result=mysql_query($sql) or die("query failed: ".mysql_error());
echo "<table border='1'>";
echo "<tr>";
echo"<th>NAME</th><th>APPOINTMENT DETAILS</th>";
echo"</tr>";
while($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>",$row['CNAME'],"</td><td>",$row['APPOINTMENTD'],"</td>";
echo "</tr>";
}
?>

</div>
</body>
</html>