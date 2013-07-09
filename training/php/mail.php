<!DOCTYPE HTML>
<html>
<head>
<title>mail</title>
<script>
function submit()
{
	alert("Your details are submitted successfully");
	if(true)
		window.location.assign("../index.php")
}
</script>
</head>
<body>

<?php
function send($eid)
{
ini_set("SMTP","aspmx.l.google.com");
$to = $eid;
$subject = "Confirmation mail";
$txt = "You have been registered successfully";
$from = "rasika.phanse@rediffmail.com";
$headers = "From:" . $from;
if(function_exists('mail')){
mail($to,$subject,$txt,$headers);
echo "<script> submit(); </script>";
//echo "Mail sent";
}
else {
	echo 'failed';
}
  
}
?>

</body>
</html>        
      