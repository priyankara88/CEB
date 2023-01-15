<?php require_once 'connection.php'?>
<?php
session_start();
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Error Connection failed: " . $conn->connect_error);
}


$accNumber = $conn -> real_escape_string($_POST['accNumber']);
$LMUnit =  $conn -> real_escape_string($_POST['LMUnit']);
$TUnit = $conn -> real_escape_string($_POST['TUnit']);



$sql = "insert into details(accNo,lastMonthUnit,thisMonthUnit,numberOfUnits,totalBill) values('$accNumber','$LMUnit','$TUnit','$TUnit','$TUnit')";

if ($conn->query($sql ) === TRUE) {
    // echo "OK";
    //$_SESSION["id"] = "දත්ත ඈතුලත් කරන ලදි"; 
    $_SESSION["name"] = "TEST";
    header("location:home.php");
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//  $row3 =mysqli_fetch_array($result3);
//  $stateid=$row3['id'];

//  echo $stateid; 
?>
