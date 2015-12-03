<!DOCTYPE html>
<html lang="en">
<head>
	<title>Electoral Roll for a Graduates</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script  src="js/input_method.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		  <img src="images/images.jpeg" alt="Logo" />
		  <a class="title" href="#"></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
<!--
			<li><a href="about.html">About Us</a></li>
			<li><a href="#">Application Form</a></li>
-->
			</ul>
	  </div>
	</div>
</nav>

<div class="container">
	<h1 class="text-center">Application Form</h1>
<?php
$name = $_POST['I_sec1_1'];
$sex = $_POST['I_sec1_2'];
$gardian = $_POST['I_sec1_3'];
$checkList = $_POST['list'];
$qualification = $_POST['I_sec1_4'];
$occupation = $_POST['I_sec1_5'];
$address = $_POST['I_sec1_6'];
$houseNum = $_POST['I_sec1_7'];
$street = $_POST['I_sec1_8'];
$town = $_POST['I_sec1_9'];
$PostOffice = $_POST['I_sec1_10'];
$taluk = $_POST['I_sec1_11'];
$district = $_POST['I_sec1_12'];
$age = $_POST['I_sec1_13'];
$university = $_POST['I_sec2_1a'];
$year1 = $_POST['I_sec2_1b'];
$sub = $_POST['I_sec2_2a'];
$year2 = $_POST['I_sec2_2b'];
$nummber = $_POST['II_sec2_1'];
$cname = $_POST['II_sec2_2'];
$part = $_POST['II_sec3_1'];
$psnum = $_POST['II_sec3_2'];
$DBday = $_POST['II_sec4_1'];
$DBmonth = $_POST['II_sec4_2'];
$DByear = $_POST['II_sec4_3'];
$epic_num = $_POST['II_sec5_1'];
$mobile = $_POST['II_sec6_1'];
$telephone = $_POST['II_sec6_2'];
$email = $_POST['II_sec7_1'];
$year = '';
if($year1)
{
	$year = $year1;
}
else
{
	$year = $year2;
}
$file = fopen("test.xml","w");

echo fwrite($file,"<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE voters_list SYSTEM \"voters_list.dtd\">\n
<voters_list>\n\t<entry>
\t\t<name>
\t\t\t<applicant>$name</applicant>\n");
if($checkList == 'Father')
{
	echo fwrite($file,"\t\t\t<father>$gardian</father>\n\t\t\t<mother />\n\t\t\t<husband />\n");
}
elseif($checkList == 'Mother')
{
	echo fwrite($file,"\t\t\t<father />\n\t\t\t<mother>$gardian</mother>\n\t\t\t<husband />\n");
}
elseif($checkList == 'Husband')
{
	echo fwrite($file,"\t\t\t<father />\n\t\t\t<mother />\n\t\t\t<husband>$gardian</husband>\n");
}
else
{
	echo fwrite($file,"\t\t\t<father />\n\t\t\t<mother />\n\t\t\t<husband />\n");
}
echo fwrite($file, "\t\t</name>
\t\t<sex>$sex</sex>
\t\t<dob>$DBday-$DBmonth-$DByear</dob>
\t\t<age>$age</age>
\t\t<qualification>$qualification</qualification>
\t\t<occupation>$occupation</occupation>
\t\t<address>
\t\t\t<house_num>$houseNum</house_num>
\t\t\t<street>$street</street>
\t\t\t<town>$town</town>
\t\t\t<post_office>$PostOffice</post_office>
\t\t\t<taluk>$taluk</taluk>
\t\t\t<district>$district</district>
\t\t\t<mobile>$mobile</mobile>
\t\t\t<telephone>$telephone</telephone>
\t\t\t<email>$email</email>
\t\t</address>
\t\t<graduation_details>
\t\t\t<subject>$sub</subject>
\t\t\t<university>$university</university>
\t\t\t<year>$year</year>
\t\t</graduation_details>
\t\t<constituency_details>
\t\t\t<nummber>$nummber</nummber>
\t\t\t<cname>$cname</cname>
\t\t\t<part>$part</part>
\t\t\t<psnum>$psnum</psnum>
\t\t\t<epic_num>$epic_num</epic_num>
\t\t</constituency_details>
\t</entry>
</voters_list>\n");
fclose($file);
echo "File generated";
?>
</div>
</body>
</html>