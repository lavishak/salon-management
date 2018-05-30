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
<h1 align="center" style="color:blue;">EMPLOYEE DETAILS ARE</h1>
<div class="center">
<?php
$error="<h1> Problem Connecting database</h1>";
$conn = mysql_connect('localhost','root');
mysql_select_db("salon") or die("$error");
$sql="SELECT * from employee" ;
$result=mysql_query($sql) or die("query failed: ".mysql_error());
echo "<table border='1'>";
echo "<tr>";
echo"<th>EID</th><th>ENAME</th><th>SALARY</th><th>CONTACT</th><th>DATE OF JOINING</th>";
echo"</tr>";
while($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>",$row['EID'],"</td><td>",$row['ENAME'],"</td><td>",$row['SALARY'],"</td><td>",$row['CONTACT'],"</td><td>",$row['DOJ'],"</td>";
echo "</tr>";
}
?>

</div>
</body>
</html>