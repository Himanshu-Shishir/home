<?php

$conn = mysqli_connect('localhost','root','','mcit');

$sname = $_POST['sname'];
$faname = $_POST['faname'];
$moname = $_POST['moname'];
$date = $_POST['date'];
$pwd = $_POST['pwd'];
$mobile = $_POST['mobile'];
$amobile = $_POST['amobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$caddress = $_POST['caddress'];
$gender = $_POST['gender'];

$sql = "INSERT INTO form (sname,faname,moname,date,pwd,mobile,amobile,email,address,caddress,gender)
	VALUES ('$sname','$faname','$moname','$date','$pwd','$mobile','$amobile','$email','$address','$caddress','$gender')";


$result = mysqli_query($conn,$sql);

if ($result)
	echo "Successfully inserted ";
else
	echo "Something Went Wrong ";

$conn->close();

?>