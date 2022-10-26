<?php
$conn = new mysqli('localhost','root','','test');
//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
    //query for registred users. 
    $sql = 'SELECT name, email, phone FROM registration';
    //make querry and get results
    $result = mysqli_query($conn, $sql);
    //fetch the resulitng raws. 
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($users);

?>
