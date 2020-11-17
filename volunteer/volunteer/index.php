
<!DOCTYPE html>
<html lang="en">
<head>
<title> volunteer enrollment form Widget a Flat Responsive Widget Template::w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content=" volunteer enrollment form Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
<link href="//fonts.googleapis.com/css?family=Heebo:300" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link rel="stylesheet" href="pop/pop1.css" type="text/css">
</head>
<body>

<audio controls autoplay loop hidden>
<source src="images/psong.mp3" type="audio/mpeg">
</audio
	<section class="agile-volt">
		<div class="agile-voltheader">
			<h1>volunteer <label>enrollment</label> form</h1>
		</div>
		<div class="agile-voltsub">
			<h2>volunteer form</h2>
				<form action="index.php" method="post" enctype=multipart/form-data>
					<div class="agile-name">
						<p>name</p>
						<input type="text" name="name" placeholder="enter a user name" required="" autofocus>
					</div>
					<div class="clear"></div>
					<div class="agile-email">
						<p>email</p>
						<input type="email" name="email" placeholder="email address" required="">
					</div>
<div class="clear"></div>

<div class="agile-email">
						<p>gender</p>
<p><input type="radio" name="g" value="male">Male<input type="radio" name="g" value="female">Female<p>						

					</div>
					<div class="agile-email">
						<p>contact number</p>
						<input type="text" name="pn" placeholder="phone number" required="">
					</div>
					
					<div class="clear"></div>
					<div class="agile-address">
						<p>street address</p>
						<input type="text" name="address" placeholder="street address" required="" >
					</div>
<div class="clear"></div>
					<div class="agile-address">
						<p>area</p>
						<input type="text" name="area" placeholder="area" required="" >
					</div>
					<div class="clear"></div>
					<div class="agile-city">
						<p>city</p>
						<input type="text" name="city" placeholder="city" min="1" max="12"/>
					</div>
					<div class="clear"></div>
					<div class="agile-state">
						<p>state</p>
						<input type="text" name="state" placeholder="state">
					</div>
					<div class="clear"></div>
					<div class="agile-pin">
						<p>pincode</p>
						<input type="text" name="pincode" placeholder="pin code" />
					</div>
					<div class="clear"></div>
					<div class="agile-country">
						<p>country</p>
						<select option : name=country>
							<option value="country">Please Select</option>
							<option value="india">INDIA</option>
							<option value="USA">USA</option>
							<option value="UK">UK</option>			
						</select>
					</div>


					<div class=clear></div>
					<div class="agile-country">
					<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
					<p>upload your image : <input  name="userfile" type="file" size="25"/></p>
					</div>
					

			
					<div class="clear"></div>
					<div class="agile-work">
						<p>how many days of the week do you work</p>
							<div class="agile-days">
								<span class="Monday">
									<input type="checkbox" name="week" value="monday">monday<br>	
								</span>
								<span class="Tuesday">
									<input type="checkbox" name="week" value="Tuesday">tuesday<br>					
								</span>
								<span class="Wednesday">
									<input type="checkbox" name="week" value="Wednesday">wednesday<br>
								</span>
								<span class="Thursday">
									<input type="checkbox" name="week" value="thursday">thursday<br>
								</span>
								<span class="Friday">
									<input type="checkbox" name="week" value="friday">friday<br>
								</span>
								<span class="Saturday">
									<input type="checkbox" name="week" value="saturday">saturday<br>
								</span>
								<span class="Sunday">
									<input type="checkbox" name="week" value="sunday">sunday<br>
								</span>
							</div>
					</div>
					<div class="clear"></div>
					<div class="agile-week">
						<p>how many hours do you work per day </p>
						 <div class="agile-from">
						 <p>from (morning)</p>
						<input type="number" name="stime" min="1" max="12" placeholder="AM">
						 </div>
						 <div class="agile-to">
						 <p>to(Evening)</p>
							<input type="number" name="etime" min="1" max="12" placeholder="PM">
						 </div>
					</div>
					<div class="clear"></div>
					<input type="submit" value="submit" >

<?php
if(isset($_POST['name'])||isset($_POST['address'])||isset($_POST['country'])||isset($_POST['week']))
{
$uploaddir = '/var/www/html/animal1/volunteer/images/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

$name=$_POST['name'];
$_SESSION['name']=$name;
$email=$_POST['email'];
$g=$_POST['g'];
$pn=$_POST['pn'];
$address=$_POST['address'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$week=$_POST['week'];
$sdate=$_POST['stime'];
$edate=$_POST['etime'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{    echo "File is valid, and was successfully uploaded.\n";
}
else   {   echo "File size greater than 300kb!\n\n";   }


$con=pg_connect("host=localhost  dbname=postgres user=postgres") or die("cannot connect");
$q0="create sequence vno start 1 increment 1";
$q1="insert into v values(nextval('vno'),'$name','$email','$g','$pn','$address','$area','$city','$state','$pincode','$country',lo_import('$uploadfile'),'$week','$sdate','$edate','now')"; 
$p=pg_query($q1) or die("query failed !");

pg_close($con);
if(!$p)
{
?>
<div class=overlay>
<div class=popup>
<b>login is failed.</b>
<div class=text-right>
<a href="index.php"><button class=btn btn-primary>Ok</button></a>

</div>
</div>
</div>
<?php
}
else
{
?>
<div class=overlay>
<div class=popup>
<b>successfully filled form.</b>
<div class=text-right>
<a href="index.php"><button class=btn btn-primary>Ok</button></a>
<a href="profile.php"><button class=btn btn-primary>profile</button></a>
</div>
</div>
</div>
<?php
}

pg_close($con);
}
?>

				</form>

		</div>
	
	</section>

</body>
</html>
<!--postgres=# create table v( vno int,name char(40) primary key,email varchar(30),grnder char(10),contact_no numeric(10),address text,area char(20),city char(20),state char(20),pincode int,country char(15),image OID not null,working_days char(10),s_time int,e_time int,day date);

-->
