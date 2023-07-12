<?php
$con = mysqli_connect("localhost", "root", "031244", "qrcode");
if (!$con) {
    echo "Connection failed";
}
mysqli_query($con, "SET NAMES UTF8");
$sql = "SELECT Assort,Name,Nest_Sealing,Quantity,PET,TEMP,TIME FROM Data";
$result = mysqli_query($con, $sql);
?>