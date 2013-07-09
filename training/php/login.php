<html>
<head>
<title>login</title>
<script>
function notify()
{
	alert("Enter valid username/password");
	
	if(true)
		window.location.assign("../index.php")
}
</script>
</head>
</html>


<?php

session_start();

$db_server = mysql_connect('localhost', 'root', '');
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db('info',$db_server)
or die("Unable to select database: " . mysql_error());

if (isset($_POST['fname']) && isset($_POST['upwd']))
{
	$un_temp = mysql_entities_fix_string($_POST['fname']);
	$pw_temp = mysql_entities_fix_string($_POST['upwd']);
	$query = "SELECT * FROM details WHERE Fname='$un_temp'";
	$result = mysql_query($query);
	if (!$result) die("Database access failed: " . mysql_error());
	elseif (mysql_num_rows($result))
	{
		$row = mysql_fetch_row($result);
		$token = md5("$pw_temp");
		if ($token == $row[5])
		{
			$_SESSION['username'] = $un_temp;
			$_SESSION['password'] = $pw_temp;
			header("location:admin.php");
		}
		//Password is wrong
		else 
		echo '<script> notify();</script>';
	}
	//No match found wrong username
	else 
	echo '<script> notify();</script>';

}
//If value not entered
else
{
	header('WWW-Authenticate: Basic realm="Restricted Section"');
	header('HTTP/1.0 401 Unauthorized');
	echo '<script> notify();</script>';

}
function mysql_entities_fix_string($string)
{
	return htmlentities(mysql_fix_string($string));
}
function mysql_fix_string($string)
{
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
}

?>
