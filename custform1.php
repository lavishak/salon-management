<?php
$error="<h1> Problem Connecting database</h1>";
$conn = mysql_connect('localhost','root');
mysql_select_db("salon") or die("$error");
$Name=  $_POST["Name"];
$Email=  $_POST["Email"];
$no= $_POST["no"];
$app= $_POST["app"];
$gen= $_POST["gen"];
$sql="INSERT INTO customerinfo (CNAME,EMAILID,MOB,APPOINTMENTD,GENDER) VALUES ('$Name', '$Email','$no','$app','$gen')" ;
$result=mysql_query($sql) or die("query failed: ".mysql_error());
?>
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
    padding: 20px;
}
</style>
<body background="salon.png" >
<h1 align="center" style="color:blue;">YOUR DETAILS ARE</h1>
<div class="center">
NAME:<?php $Name; echo $_POST["Name"]; ?><br>
GENDER:<?php $Email; echo $_POST["Email"]; ?><br>
MOBILE NO:<?php $no; echo $_POST["no"]; ?><br>
GENDER:<?php $gen; echo $_POST["gen"]; ?><br>
<?php $app; $_POST["app"]; ?>
WE WILL CONTACT YOU SHORTLY AND LET YOU KNOW IF THE APPOINTMENT HAS BEEN SET
</div>
</body>
</html>