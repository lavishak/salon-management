<html>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

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
<ul>
  <li><a href="EMPDET.php" target="_blank">EMPLOYEE DETAILS</a></li>
  <li><a href="orderby.php" target="_blank">CUSTOMER DETAILS</a></li>
  <li><a href="APDET.php" target="_blank">APPOINTMENT DETAILS</a></li>
  <li><a href="groupby.php" target="_blank">GROUPED DETAILS</a></li>
</ul>
</body>
</html>