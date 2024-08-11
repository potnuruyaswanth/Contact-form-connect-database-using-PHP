<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$job = $_POST['job'];

$con = new mysqli($name,$email,$phonenumber,$message,$subject,$job);
if ($con->connect_error) {
    die('Connection Failed : '. $con->connect_error);
} else {
    $stmt = $con->prepare("insert into form(name,email,phonenumber,message,subject,job) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss", $name, $email,$phonenumber,$message,$subject,$job);
    $stmt->execute();
    echo "registration successfully......";
    $stmt->close();
    $con->close();
}
?>