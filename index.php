<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to database failed due to: ".mysqli_connect_error());
    }
    echo "Connection to database successful";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
echo $sql;

if($con->query($sql) == true){
    echo "Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
?>

