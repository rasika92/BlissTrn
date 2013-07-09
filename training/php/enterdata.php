<?php
include_once 'mail.php';
$conn=mysql_connect('localhost','root','');

  if(!$conn)
  {
  	echo 'Connection not established';
  }
  
  $db_select=mysql_select_db('info',$conn);
  
  if(!$db_select)
  {
  	die("Error :".mysql_errno($conn));
  }
  
  $fname=$_POST['fn'];
  $lname=$_POST['ln'];
  $phone=$_POST['cno'];
  $dte=$_POST['date'];
  $email=$_POST['eid'];
  $password=$_POST['pwd'];
  $country=$_POST['country'];
  
  $paswrd = md5($password);
     
  $query=sprintf("INSERT INTO details(Fname,Lname,Phone,Date,Email,Password,Country)
  		VALUES('%s','%s','%s','%s','%s','%s','%s') ",
  		mysql_real_escape_string($fname),
  		mysql_real_escape_string($lname),
  		mysql_real_escape_string($phone),
  		mysql_real_escape_string($dte),  		
  		mysql_real_escape_string($email),
  	  mysql_real_escape_string($paswrd),
  		mysql_real_escape_string($country));
  
  if(!mysql_query($query))
  {
  	echo 'Query Failed!'.mysql_errno();
  }
  else
  {
    send($_POST['eid']);
  }
  
  
?>
