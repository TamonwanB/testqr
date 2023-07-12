<?php
include('dbconnect.php');

$id = $_POST['id'];
$assort = $_POST['assort'];
$name = $_POST['name'];
$nest = $_POST['nest_sealing'];
$num = $_POST['quantity'];
$pet = $_POST['pet'];
$temp = $_POST['temp'];
$time  = $_POST['time'];

$sql = "INSERT INTO Data(Assort, Name, Nest_Sealing, Quantity, PET, TEMP, TIME) VALUES 
('$assort','$name','$nest','$num','$pet','$temp','$time')";

$result = mysqli_query($con,$sql) or die("Error in query");
mysqli_close($con);

if($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Successfuly!');";
    echo "window.location = 'datatable.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "window.location = 'datatable.php';";
    echo "</script>";
}//update error ก็เด้งเข้าหน้า home
?>