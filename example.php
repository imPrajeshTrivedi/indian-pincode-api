<!--/*
Github : https://github.com/imPrajeshTrivedi
PRAJESH TRIVEDI
source : http://api.rbpt.tech/pincode
*/-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pincode Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- your own css path<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body style="background-color: #EEE;">
    <div class="container" style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; background-color: #FFF;">
		<h1>All India Pincode Directory</h1>
		<span class="small pull-left" style="padding-right: 10px;">for pincode 1.0</span>
		<hr>
				<div style='float:left;'>
			<a href='https://github.com/imPrajeshTrivedi/indian-pincode-api' target="_blank">
				<button class='btn btn-success' style='margin: 2px 3px;' type='button'>GitHub Repo</button>
			</a>
			<a href='https://github.com/imPrajeshTrivedi/indian-pincode-api.git' target="_blank">
				<button class='btn btn-warning' style='margin: 2px 3px;' type='button'>Download</button>
			</a>
		</div>
		<br><br>
<h3>API of Postal Index Numbers (PIN) of India Post is a webservices providing access to metada of PIN code numbers of Post Offices in India. The API accepts HTTP GET/POST calls and returns JSON formatted responses.</h3>
<br>
<form action="example.php" method="post">
<input type="text" name="pincode" placeholder=" Pincode Here !" />

<input type="text" name="key" placeholder=" Key Here !" />

<input type="submit" name="sub">
</form>
<?php
if(isset($_POST['pincode']) && isset($_POST['key'])){
$pin = curl_init('http://api.rbpt.tech/pin.php?pin='.$_POST['pincode'].'&key='.$_POST['key'].'');

curl_setopt($pin, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($pin);

echo $result;
}
else
{
	echo "Enter Pincode and Key to the Texbox";
}
?>

<hr>
		<div class="pull-right">
			<i>This page is powered by <a href="">RBPT.TECH</a></i>
		</div>
		<a href="https://github.com/imPrajeshTrivedi/indian-pincode-api" target="_blank">GitHub Repo</a><br>
		Example page by <a href="https://github.com/imPrajeshTrivedi" target="_blank">imPrajeshTrivedi</a>
	</div>
	
	<!--Version 1.0--> 
  </body>
</html>
