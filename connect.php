<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$message = $_POST["message"];
$subject = $_POST["subject"];
$job = $_POST["job"];

var_dump( $name );
$host = "localhost";
$dbname = "student";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
               username: $username,
               password: $password,
               database: $dbname);

if(mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}
$sql = "INSERT INTO form(name,email,phonenumber,message,subject,job) VALUES(?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssisss",$name,$email,$phonenumber,$message,$subject,$job);

mysqli_stmt_execute($stmt);

echo "Record saved.";
?>