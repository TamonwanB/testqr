<?php 
include('dbconnect.php');

//ตรวจสอบค่าว่าง ถ้าไม่มี id จะส่งกลับหน้าhome//
if($_POST['id'] == ''){
    echo "<script type='text/javascript'>";
    echo "alert('Error Contact Admin!!');";
    echo "window.location = 'datatable.php';";
    echo "</script>";
}

$id = $_POST['id'];
$assort = $_POST['assort'];
$name = $_POST['name'];
$nest = $_POST['nest_sealing'];
$num = $_POST['quantity'];
$pet = $_POST['pet'];
$temp = $_POST['temp'];
$time  = $_POST['time'];

$sql = "UPDATE Data SET assort = '$assort', name = '$name', nest_sealing = '$nest', quantity = '$num', pet = '$pet', temp = '$temp', time = '$time' WHERE id = $id ";
$result = mysqli_query($con, $sql) or die("Error in query");
mysqli_close($con);

//update เสร็จ เด้งเข้าหน้า home
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