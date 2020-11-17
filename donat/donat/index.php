
<!doctype html>
<html>
<head>
<title>Donation Form </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Donation Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600italic,600,700,700italic' rel='stylesheet' type='text/css'><!-- /font files -->
<link rel='stylesheet' type='text/css' href="pop/pop1.css">
</head>
<body>
<h1 class="header-agileits w3 w3l agile-info">Donation Form</h1>

<div class="content-w3ls">
	<div class="form-w3layouts">
		<form action="" method="post">
			<div class="form-control"> 
				<label class="header">Name <span>*</span> </label>
				<input type="text" id="name" name="name" placeholder="Your Name" title="Please enter your Full Name" required="">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Email <span>*</span> </label>
				<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Address </label>
				<input type="text" id="bill" name="address" placeholder="Address" title="Please enter Your Address" required="">
				<div class="clear"></div>
			</div>
		
			<div class="form-control">	
				<label class="header">Phone Number <span>*</span> </label>	
				<input type="tel" id="usrtel" name="pn" placeholder="Your Phone Number" title="Please enter Your Phone Number" required="">
				<div class="clear"></div>
			</div>	
			<div class="form-control">	
				<label class="header">Donation amount(Rs) <span>*</span> </label>	
				<input type="tel" id="usrtel" name="amt" placeholder="20" title="Please enter Your Amount" required="">
				<div class="clear"></div>
			</div>	
			<div class="form-control">
				<label class="enquiry">Donation comments  </label>
				<textarea id="message" name="message" placeholder="Your Queries" title="Please enter Your Queries"></textarea>
				<div class="clear"></div>
			</div>
			<div class="form-control">	
				<label class="header header-1">Verification Code <span>*</span> </label>	
				<input type="tel" id="usrtel" name="vcode" placeholder="Verification Code" title="Please enter Verification Code" required="">
				<div class="clear"></div>
			</div>	
			<div class="agile-w3ls">	
				<p class="be-wls">The verification code is given below</p>
				
<img src="demo_captcha.php"/>
			</div>
			
			<div class="form-control">
				<input type="submit" class="register" value="Send">
				<div class="clear"></div>
			</div>




	</div>
</div>
<?php
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) 
{
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$pn=$_POST['pn'];
$address=$_POST['address'];
$amt=$_POST['amt'];
$msg=$_POST['message'];
$vcode=$_POST['vcode'];

$vcode=md5($vcode);	
$str=$_SESSION['vcode'];
$str=md5($str);
$con=pg_connect("host=localhost  dbname=postgres user=postgres") or die("cannot connect");
if($vcode===$str)
{
$q0="create sequence dno start 1 increment 1";
$q1="insert into donat values(nextval('dno'),'$name','$email','$address','$pn','$amt','$msg')"; 
$p=pg_query($q1) or die("query execution failed !"); 
pg_close($con);
header('location:pay/index.html');
}
else
{
?>
<div class=overlay>
<div class=popup>
<p>cannot proccess farther , please fill all details correct.</p>
<div class=text-right>
<a href="index.php"><button class=btn btn-primary>Ok</button></a>
</div>
</div>
</div>
<?php
}
}
?>
</form>
</body>
</html>
