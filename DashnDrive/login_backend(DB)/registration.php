<?php

session_start();
header('location:index.php');
$server="sql201.epizy.com";
$username="epiz_31338754";
$password="1wEC6cvjMd";
$dbname="epiz_31338754_user_reg";
$con = mysqli_connect($server, $username, $password, $dbname);



mysqli_select_db($con, 'user_reg');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already taken";
}
else{
    $reg = " insert into usertable(name , password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo " Registration Sucessfull";
}

?>