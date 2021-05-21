<html>
<head>
<title>MX Bridge</title>
<link rel="stylesheet" href="asform.css">
</head>
<body>
<div class="wrap">
	<h2> Student Account</h2>
	<form method="POST" action="">
		<input type="tel" name="mobile_number" placeholder="MOBILE NUMBER" required>
		<input type="text" name="city" placeholder="CITY" required>
		<br><br><br><span class="label"  for="year_of_entry">YEAR OF ENTRY</span>
		<select  name="year_of_entry">
			<option>CHOOSE YEAR</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
		</select>
		<br><br><br><span class="label"  for="year_of_graduation">YEAR OF GRADUATION</span>
		<select  name="year_of_graduation">
			<option>CHOOSE YEAR</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option>2023</option>
			
		</select>
		<br><br>
		<input type="text" name="roll_no" placeholder="ROLL NUMBER" required>
		<input type="submit" value="Create Account" name="submit1">
		
</div>
</body>
</html>


<?php

if(isset($_POST['submit1']))
{
echo $_SESSION['firstname'];
//session_start();
         $firstname=$_SESSION['firstname'];
	 $lastname=$_SESSION['lastname'];
	 $emailid=$_SESSION['emailid'];
	 $password=$_SESSION['password'];
	 $aff=$_SESSION['aff'];
$mysqli= NEW MYSQLi('fdb28.awardspace.net','3733496_user','Connect@123','3733496_user');
 $vkey=md5(time().$firstname);
$phoneno=$_POST['mobile_number'];
$city=$_POST['city'];
$entry=$_POST['year_of_entry'];
$end=$_POST['year_of_gradutaion'];
$rollno=$_POST['roll_no'];

	 if ($aff=="Student")
	 {
         $insert=$mysqli->query("insert into student(emailid,firstname,lastname,password,vkey) values('$emailid','$firstname','$lastname','$password','$vkey')");
          $to=$emailid;
		 //$subject="Email Verification";
		 //$message="<a href='http://mxbridge.mywebcommunity.org/verify.php?vkey=$vkey'>Verify Account</a>";
               //  mail($to, $subject, $message);
                // $URL="http://mxbridge.mywebcommunity.org/thankyou.php";
                // echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                // echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                echo $emailid;
         }
         
	 

}
?>