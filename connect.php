<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name,email,phone)
        values(?, ?, ?)");
    $stmt->bind_param("ssi",$name, $email, $phone);
    $stmt->execute();
    echo "Registration successful. Our agent will contact you via our official number 0726177576 to confirm your booking.";
    $stmt->close();
    $conn->close();
    }
?>