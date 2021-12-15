<?php  
$un=$_POST['username'];  
$pw=md5($_POST['password']);  
//connect to the db  
require_once('../site/connection.php');
require_once('../site/def.php');
//run the query to search for the username and password the match  
$query = "SELECT * FROM ".constant("USER_TABLE")." WHERE ".constant("USER_ID")." = '$un' AND ".constant("USER_PASSWORD")." = '$pw'";  
$result = mysql_query($query) or die("Unable to verify user because : " . mysql_error());  
//this is where the actual verification happens  
if(mysql_num_rows($result) > 0){
$_SESSION['user'] = $un;
$_SESSION['loggedin'] = "YES"; 
echo "<meta http-equiv=\"refresh\" content=\"0;url=../user/".$un."\" />";
}  
else {
echo "<script>alert('Login gagal!')</script>";
echo "<meta http-equiv=\"refresh\" content=\"0;url=../home\" />";
}  // for incorrect login response  
?>  