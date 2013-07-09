<?php
// Connect
$link = @mysql_connect('localhost', 'root', '');
$Name=$_POST["fname"];
$Phone=$_POST["phone"];
$City=$_POST["city"];
$Email=$_POST["email"];

if (!$link) 
    {
    die('Not connected : ' . mysql_error());
    }

// make foo the current db
$db_selected = mysql_select_db('practice', $link);//enter the database name
if (!$db_selected)
    {
    die ("Database not selected : " . mysql_error());
    }

// Query to insert into table practice
$query = sprintf("INSERT INTO practice (Name, Phone, City,Email)
    VALUES( '%s', '%s','%s','%s')",
    mysql_real_escape_string($Name),
    mysql_real_escape_string($Phone),
    mysql_real_escape_string($City),
    mysql_real_escape_string($Email));

// run the query
if(!mysql_query($query))
    {
     echo 'Query failed '.mysql_error();
     exit();
    }
 else
    {
    $subject = 'Submission';
    $msg= 'Thank you for submitting your information';
    echo $msg;
    //mail($userEmail,$subject,$msg,"From: $userEmail\nReply-To: $userEmail\nX-Mailer: PHP/" . phpversion());
    }
?>
