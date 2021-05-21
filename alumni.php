<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.wrap{
    
    width: 700px;
    
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.header
{
        min-height:100vh;
        width:100%;
        background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img1.png");
        background-position:center;
        background-size:cover;
        position:relative;
        

}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  opacity:0.9;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}


</style>
<head>
<title>MX Bridge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="header">
        <div class="wrap">
<div class="container">
    <div class="title">Alumni Account</div>
    <div class="content">
	<form method="POST" action="">
       <div class="user-details">
          <div class="input-box">
            <span class="details">Roll Number</span>
        <input type="text" name="roll_no" pattern="[1-9]{2}(MX|mx|Mx|mX)[0-9]{3}" placeholder="ROLL NUMBER" required autocomplete="off">
		</div>
          <div class="input-box">
            <span class="details">Mobile Number</span>
               <input type="tel" id="phone" name="mobile_number" pattern="[7-9]{1}[0-9]{9}" placeholder="MOBILE NUMBER" required autocomplete="off">
		</div>
          
          <div class="input-box">
            <span class="details">Joining Year</span>
		 
		<input type="text" name="start-year" pattern="[1-2]{1}[0-9]{3}"  list="start-year" placeholder="Choose Year" autocomplete="off">
		<datalist id="start-year" >
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
		</datalist>
                </div>
          <div class="input-box">
            <span class="details">Leaving Year</span>
		
		<input type="text" name="end-year" pattern="[1-2]{1}[0-9]{3}" list="end-year" placeholder="Choose Year" autocomplete="off">
		<datalist id="end-year" >
		<optgroup>
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
		</optgroup>
		</datalist>
                </div>
                <div class="input-box">
            <span class="details">City</span>
                <input type="text" name="city" placeholder="CITY" required autocomplete="off">
                </div>
        </div>
		<div class="button">
		<input type="submit" value="Create Account" name="submit2">
                </div>
		
		
	</form>
        </div>
</div>
</div>
</section>
</body>
<html>

<?php
if (isset($_POST['submit2']))
 {
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
         $firstname=$_GET['firstname'];
	 $lastname=$_GET['lastname'];
	 $emailid=$_GET['emailid'];
	 $password=$_GET['password'];
         $firstname=$mysqli->real_escape_string($firstname);
	 $lastname=$mysqli->real_escape_string($lastname);
	 $emailid=$mysqli->real_escape_string($emailid);
	 $password=$mysqli->real_escape_string($password);
	 $aff=$_POST['aff'];
         $vkey=md5(time().$emailid);
        $phoneno=$_POST['mobile_number'];
        $city=$_POST['city'];
        $start=$_POST['start-year'];
        $end=$_POST['end-year'];
         $rollno=$_POST['roll_no'];
    $insert=$mysqli->query("insert into alumni(emailid,password,firstname,lastname,mobile,city,joinyear,endyear,vkey,rollno) values('$emailid','$password','$firstname','$lastname','$phoneno','$city','$start','$end','$vkey','$rollno')");
		 $to=$emailid;
		 $subject="Email Verification";
		 $message="<a href='http://mxbridge.mywebcommunity.org/verify.php?vkey=$vkey'>Verify Account</a>";
                 mail($to, $subject, $message);
                 $URL="http://mxbridge.mywebcommunity.org/thankyou.php";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 
                
   

 }
 
?>