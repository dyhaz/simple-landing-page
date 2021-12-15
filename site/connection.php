<?php
function dbConnect()
{
	$link = mysql_connect("mysql.idhostinger.com","u716719265_root","03422.com");
	if(!$link)
		return false;
	
	if(!mysql_select_db("u716719265_dbdyhaz")){
		mysql_close($link);
		return false;
	}
return true;
}
dbConnect();
?>