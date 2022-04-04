<?php

session_start();
$server="sql201.epizy.com";
$username="epiz_31338754";
$password="1wEC6cvjMd";
$dbname="epiz_31338754_user_reg";
$con = mysqli_connect($server, $username, $password, $dbname);



mysqli_select_db($con, 'user_reg');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
   header('location:https://withmohit.github.io/dashndrive2.github.io/'); //here location work of home page
}
else{
    header('location:index.php');
}

?>