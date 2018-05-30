
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
<h1 align="center" style="color:blue;">BILL PAYMENT</h1>
<div class="center">
CUSTOMER NAME :<?php $cust; echo $_POST["cust"]; ?><br>
SERVICE USED 1: <?php $sera; echo $_POST["sera"];?><br> 
SERVICE USED 2:<?php $serb; echo $_POST["serb"]; ?><br>
SERVICE USED 3:<?php $serc;  echo $_POST["serc"]; ?><br>
TOTAL AMOUNT IS: <?php 
$ama;$_POST["ama"];
$amb;$_POST["amb"];
$amc;$_POST["amc"];
$tot=$_POST["ama"]+$_POST["amb"]+$_POST["amc"];
echo $tot; ?>
</div>
</div>
</body>
</html>