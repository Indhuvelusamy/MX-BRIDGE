
<style>
*{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    letter-spacing:1px;

}
table, th, td{
font-family: 'Poppins', sans-serif;
    letter-spacing:1px;
    border:1px solid grey;
    font-size:15px;
    color:black;


}

td a
{


}
.header
{
        min-height:40vh;
        width:100%;
        background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("home.png");
        background-position:center;
        background-size:cover;
        position:relative;
        

}
nav{
	
	display:flex;
	padding:2% 6%;
	justify-content:space-between;
	align-items:center;
}
nav img{
	width:150px;
		
}
.nav-links{
	
	flex:1;
	text-align:right;
}
.nav-links ul li{
	list-style:none;
	display:inline-block;
	padding:8px 12px;
	position:relative;
}
.nav-links ul li a{
	color:#fff;
	text-decoration:none;
	font-size:15px;
}
.nav-links ul li::after{
	content:'';
	width:0%;
	height:2px;
	background:#f44336;
	display:block;
	margin:auto;
	transition:0.5s;
}
.nav-links ul li:hover::after{
	width:100%;
	
	
	
}

.text-box{
	width:90%;
	color:#fff;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	text-align:center;
	
}
.text-box h1{
	
	font-size:62px;
}
.text-box p{
	
	margin:10px 0 40 px;
	font-size:17px;
	color:#fff;
}
.hero-btn{
	
	display:inline-block;
	text-decoration:none;
	color:#fff;
	border:1px solid #fff;
	padding:12px 34px;
	font-size:13px;
	background:transparent;
	position:realtive;
	cursor:pointer;
	
}

.hero-btn:hover{
	border:1px solid #f44336;
	background:#f44336;
	transition:1s;
}
nav .fa{
        display:none;
}
@media(max-width:700px)
{
	.text-box h1{
	font-size:20px;
	}
	.nav-links ul li{
		display:block;
	}
	.nav-links{
		position:absolute;
		background:#f44336;
		height:100vh;
		width:200px;
		top:0;
		right:-200px;
		text-align:left;
		z-index:2;
                transition:1s;
	}
        
        nav .fa{
		display:block;
		color:#fff;
		margin:10px;
		font-size:22px;
		cursor:pointer;
	}
	.nav-links ul{
		padding:30px;
	}
}

.about{
width:80%;
margin:auto;
text-align:center;
padding-top:100px;

}
.img1
{
		box-sizing:border-box;
		width:150px;
		height:150px;
		border-radius:50%;
		border:2px solid gray;
		padding:2px;
		background-color:white;
		
		
	
	
}

h1{
font-size:36px;
font-weight:600;
}
p{
color:#777;
font-size:14px;
font-weight:300;
line-heoght:22px;
padding:10px;
}
.row{
margin-top:5%;
display:flex;
justify-content:space-between;
}
.about-col{
flex-basis:31%;
background:#fff3f3;
border-radius:10px;
margin-bottom:5%;
padding:20px 12px;
box-sizing:border-box;

}
h3{

text-align:center;
font-weight:600;
margin:10px 0;
}
.about-col:hover
{
box-shadow:0 0 20px 0px rgba(0,0,0,0.2);
}
@media(max-width:700px){
.row{
flex-direction:column;
}

}
.footer{
width:100%;
text-align:center;
padding:30px 0;
}
.footer h4{
margin-bottom:25px;
margin-top:20px;
font-weight:600;

}
.block {
  border-radius:10px;
  display: inline-block;
  width: 250px;
  height: 250px;
  top:150px;
box-sizing:border-box;
  background-color:white;
  text:gray;
  
  border-color:gray;
}
.container {
  padding:2px 2px 2px 2px;
         width:100%;
  text-align: center;
  top:100px;
  opacity:.9;
}
.block img {
top:10px;
 width: 100px;
 height: 120px;
}
.wrap{
    background-color: #fff;
    width: 1250px;
    
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.input-box h4{
    padding-bottom: 4px;
    padding-left:2px;
    color: black;
    display: flex;
    flex-direction: row;
	letter-spacing:1px;
	font-size:15px;
}
.input-box h6{
    
    color: red;
    
}
.input-box1 h4{
    padding-bottom: 4px;
    padding-left:2px;
    color: black;
    display: flex;
    flex-direction: row;
	letter-spacing:1px;
	font-size:15px;
}
.input-box2 h4{
    padding-bottom: 4px;
    padding-left:2px;
    color: black;
    display: flex;
    flex-direction: row;
	letter-spacing:1px;
	font-size:15px;
}
.wrap .input-group{
    margin-bottom: 8px;
    width: 100%;
    
    position: relative;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    padding: 5px 0;
}
.input-box{
   width: calc(100% / 3 - 20px);
    margin-right:15px;
    position: relative;
}
.input-box1{
   width: calc(100% / 4 - 20px);
    margin-right:15px;
    position: relative;
}
.input-box2{
   width: calc(100% / 5 - 20px);
    margin-right:15px;
    position: relative;
}
.input-box1:last-child{
    margin-right: 0;
}
.input-box2:last-child{
    margin-right: 0;
}
.input-box:last-child{
    margin-right: 0;
}
.name{
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #00000033;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}
.name:focus, .dob:focus{
    -webkit-box-shadow:0 0 2px 1px #7ed32180;
    -moz-box-shadow:0 0 2px 1px #7ed32180;
    box-shadow: 0 0 2px 1px #7ed32180;
    border: 1px solid #EE82EE;
}
.input-box .icon{
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000033;
    border-right: none;
}
.input-box1 .icon{
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000033;
    border-right: none;
}
.input-box2 .icon{
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000033;
    border-right: none;
}
.name:focus + .icon{
    background-color: #7ed321;
    color: #fff;
    border-right: 1px solid #7ed321;
    border: none;
    transition: 1s;
}
.dob{
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}
.radio{
    display: none;
}
.input-box label{
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}
.input-box1 label{
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}
.input-box2 label{
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-right: none;
}
.input-box label:last-of-type{
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
.input-box1 label:first-of-type{
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-right: none;
}
.input-box1 label:last-of-type{
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
.radio:checked + label{
    background-color: #5eb105;
    color: #fff;
    transition: 0.5s;
}
.input-box  .input-box1 .input-box2 select{
    display: inline-block;
    width: 50%;
    padding: 12px;
    background-color: #fcfcfc;
    float: left;
    text-align: center;
    font-size: 16px;
    outline: none;
    border: 1px solid #c0bfbf;
    cursor: pointer;
    transition: all 0.2s ease;
}
.input-box .input-box1 .inupt-box2 select:focus{
    background-color: #7ed321;
    color: #fff;
    text-align: center;
}
.input-box .input-box1 .input-box2 button{
    width: 50%;
    background: transparent;
    position:center;
    border: none;
    background: gray;
    color: #fff;
    padding: 15px;
    border-radius: 4px;
    font-size: 16px;
    transition: all 0.35s ease;
}
.input-box .input-box1 .input-box2 button:hover{
    cursor: pointer;
    background: #5eb105;
}
.star{
color:red;
}
 .button{
   height: 45px;
   margin: 30px 400px 30px 400px;
 }
 .button input{
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
 .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 form .button{
   height: 45px;
   margin: 30px 400px 30px 400px;
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
 table, th, td{
font-family: 'Poppins', sans-serif;
    letter-spacing:1px;
    border:1px solid grey;
    font-size:15px;
    color:black;


}

td button
{
 width:100%;
 height:100%;

}
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
h4{
color:white;
font-size:25px;
font-family: poppins; 
letter-spacing: 3px;
}
</style>
<?php 
         $emailid=$_GET['emailid'];
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("select * from alumni where emailid='$emailid'");
         $row = mysqli_fetch_assoc($result);
         $result1=$mysqli->query("select * from alumni_image where emailid='$emailid'");
         $row1 = mysqli_fetch_assoc($result1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="with=device-width,initial-scale=1.0" >
	<title>MX Bridge</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="header">
        <nav>
	
        <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
	<ul>
	     
		<li><a href="http://mxbridge.mywebcommunity.org/home.php?emailid=<?php echo $emailid; ?>">HOME</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allalumni.php?emailid=<?php echo $emailid; ?>">ALUMNI</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allstudent.php?emailid=<?php echo $emailid; ?>">STUDENT</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/i1.php?emailid=<?php echo $emailid; ?>">GALLERY</a></li>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/alumni_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/student_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/faculty_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_alumnievents.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_events.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_facultyevents.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                
		
			<li><a href="http://mxbridge.mywebcommunity.org/profile.php?emailid=<?php echo $emailid; ?>"><span style="text-transform:uppercase;"><?php echo $row['firstname']; ?></span></a></li>
			<li><a href="http://mxbridge.mywebcommunity.org/login.html">LOGOUT</a></li>
		
		   
		</ul>
		</div>
	<i class="fa fa-bars" onclick="showeMenu()"></i>
        </nav>
        
</section>
  
	
<div class="wrap">
        <h2>
Edit Profile</h2>
<form method="post" action="update_alumniprofile.php" enctype="multipart/form-data">
 <div class="input-group">
               
   <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']); ?>"class="img1"> 
                    

</div>     
<div class="input-group">
               <div class="input-box">
                
                <h4>
First Name<div class="star">*</div></h4>
                    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" class="name" >
                    
                </div>
<div class="input-box">
<h4>Last Name<div class="star">*</div></h4>
                    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" class="name" >
                    
                </div>

                <div class="input-box">
                <h4>Email ID<div class="star">*</div></h4>
                     <input type="text" name="emailid" value="<?php echo $row['emailid']; ?>" class="name" readonly >
                    
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                <h4>Password<div class="star">*</div></h4>
                   <input type="text" name="password" value="<?php echo $row['password']; ?>" class="name" >
                    
                </div>

                <div class="input-box">
                <h4>Mobile Number<div class="star">*</div></h4>
                    <input type="tel" name="mobile" value="<?php echo $row['mobile']; ?>" class="name" >
                    
                </div>
<div class="input-box">
                <h4>Roll number<div class="star">*</div></h4>
                   <input type="text" name="rollno" value="<?php echo $row['rollno']; ?>" class="name" >
                    
                </div>
</div>
<div class="input-group">

                <div class="input-box1">
                   <h4>
Date of Birth</h4>
<input type="text" class="dob" value="<?php echo $row['dd']; ?>" name="dd" list="DD"  autocomplete="off">
	<datalist id="DD">
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
</datalist>

<input type="text" class="dob" value="<?php echo $row['mm']; ?>" name="mm" list="MM"  autocomplete="off">
	<datalist id="MM">
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	
</datalist>

                    
<input type="text" class="dob" name="yyyy" value="<?php echo $row['yyyy']; ?>" list="YY"  autocomplete="off">
	<datalist id="YY" class="dob">
	
	<option>1995</option>
			<option>1975</option>
			<option>1976</option>
			<option>1977</option>
			<option>1978</option>
			<option>1979</option>
			<option>1980</option>
			<option>1981</option>
			<option>1982</option>
			<option>1983</option>
			<option>1984</option>
			<option>1985</option>
			<option>1986</option>
			<option>1987</option>
			<option>1988</option>
			<option>1989</option>
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			
</datalist>
</div>
                
<div class="input-box1">
                    <h4>
City</h4>
<input type="text" name="city" value="<?php echo $row['city']; ?>" required class="name">
                  
                </div>

<div class="input-box1">
<h4>
Joining Year<div class="star">*</div></h4>
                    <input type="text" class="name" name="start-year" value="<?php echo $row['joinyear']; ?>" list="start-year"  autocomplete="off">
					
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
<div class="input-box1">
<h4>
Leaving Year<div class="star">*</div></h4>
                    <input type="text" class="name" name="end-year"  value="<?php echo $row['endyear']; ?>" list="end-year"  autocomplete="off">
		<datalist id="end-year" >
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
</div>
<div class="input-group">
                <div class="input-box2">
                  <h4>
Organization Name</h4></div>
<div class="input-box2">
                    <h4>
Experience in year</h4>
</div>
<div class="input-box2">
                    <h4>
Designation</h4>
</div>
<div class="input-box2">
                    <h4>
From</h4>
</div>
<div class="input-box2">
                    <h4>
To</h4>
</div>


</div>

              
<div class="input-group">
                <div class="input-box2">
				

<input type="text"  name="cmp1" value="<?php echo $row['cmp1']; ?>"  class="name">
                    
                </div>
<div class="input-box2">
                    <input type="text" name="exp1" value="<?php echo $row['exp1']; ?>" class="name">
                    
                </div>
				<div class="input-box2">
                    <input type="text"  name="des1" value="<?php echo $row['des1']; ?>" class="name">
                    
                </div>
                <div class="input-box2">
                    <input type="text"  name="from1" value="<?php echo $row['from1']; ?>" class="name">
                    
                </div>
                <div class="input-box2">
                    <input type="text"  name="to1" value="<?php echo $row['to1']; ?>" class="name">
                    
                </div>
</div>
<div class="input-group">
                <div class="input-box2">
				

<input type="text" name="cmp2" value="<?php echo $row['cmp2']; ?>" class="name">
                    
                </div>
<div class="input-box2">
                    <input type="text" name="exp2" value="<?php echo $row['exp2']; ?>" class="name">
                    
                </div>
				<div class="input-box2">
                    <input type="text"  name="des2" value="<?php echo $row['des2']; ?>" class="name">
                    
                </div>
                 <div class="input-box2">
                    <input type="text"  name="from2" value="<?php echo $row['from2']; ?>" class="name">
                    
                </div>
                <div class="input-box2">
                    <input type="text"  name="to2" value="<?php echo $row['to2']; ?>" class="name">
                    
                </div>
</div>
<div class="input-group">
                <div class="input-box2">
				

<input type="text"  name="cmp3" value="<?php echo $row['cmp3']; ?>" class="name">
                    
                </div>
<div class="input-box2">
                    <input type="text" name="exp3" value="<?php echo $row['exp3']; ?>" class="name">
                    
                </div>
				<div class="input-box2">
                    <input type="text"  name="des3" value="<?php echo $row['des3']; ?>" class="name">
                    
                </div>
                 <div class="input-box2">
                    <input type="text"  name="from3" value="<?php echo $row['from3']; ?>" class="name">
                    
                </div>
                <div class="input-box2">
                    <input type="text"  name="to3" value="<?php echo $row['to3']; ?>" class="name">
                    
                </div>
</div>
                           <div class="input-group">
                <div class="input-box">
                <h4>Change Profile<div class="star"></div></h4>
                   <input type="file" name="image" >
                    
                </div>
                     </form>  
               
                    



				
                <div class="button">
                
                    <input type="submit" name="submit" value="Update">
          </div>    
</div>
</form>
</div>
</body>
</html>
<script>  
