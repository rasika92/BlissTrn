<html>
<body>

<?php
$x=$_POST["fno"];
$y=$_POST["sno"];
$z = $x+$y;
$txt1= 'Addition is';
print ($txt1.$z)."\n";
$z = $x-$y;
$txt1= 'Subtraction is';
print ($txt1.$z)."\n";
$z = $x/$y;
$txt1= 'Division is';
print ($txt1.$z)."\n";
$z = $x*$y;
$txt1= 'Multiplication is';
print ($txt1.$z)."\n";
?>

</body>
</html>