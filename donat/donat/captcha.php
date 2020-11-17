<html>
<body>
<form action=captcha.php method="post">
<input type="text" name="str">
<img src="demo_captcha.php"/>
<!input type="text" name="str1">
<input type="submit" name="sumbit">
<button type="submit" name="ss">CHECK</button>
</form></body>
</html>

<?php
//if(isset($_POST['submit']))
//{
//session_start();
if(isset($_POST['ss']))
{

session_start();
$name=($_POST['str']);



$name=md5($name);	
//$str=$_POST['str1'];
//echo "<br>$name";
$str=$_SESSION['vercode'];
$str=md5($str);
//echo "<br>$str";


if($name!=NULL)
{
if($name==$str)
//echo "aucceaa";
header('location:bcert.php');
else 
echo "not";

}
}
//}
?>
