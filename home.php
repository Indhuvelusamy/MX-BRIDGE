<style>
*{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    letter-spacing:1px;

}
.header
{
        min-height:100vh;
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
</style>
<?php 
$emailid1=$_GET['emailid'];
$mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');

             $result=$mysqli->query("select firstname,lastname,aff from student where emailid='$emailid1' union select firstname,lastname,aff from alumni where emailid='$emailid1' union select firstname,lastname,aff from faculty where emailid='$emailid1'"); 
             $row = mysqli_fetch_assoc($result);
             
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
		<li><a href="http://mxbridge.mywebcommunity.org/home.php?emailid=<?php echo $emailid1; ?>">HOME</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allalumni.php?emailid=<?php echo $emailid1; ?>">ALUMNI</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allstudent.php?emailid=<?php echo $emailid1; ?>">STUDENT</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/i1.php?emailid=<?php echo $emailid1; ?>">GALLERY</a></li>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/alumni_post.php?emailid=<?php echo $emailid1; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/student_post.php?emailid=<?php echo $emailid1; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/faculty_post.php?emailid=<?php echo $emailid1; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_alumnievents.php?emailid=<?php echo $emailid1; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_events.php?emailid=<?php echo $emailid1; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_facultyevents.php?emailid=<?php echo $emailid1; ?>">EVENTS</a></li>
		<?php } ?>
                
		
			<li><a href="http://mxbridge.mywebcommunity.org/profile.php?emailid=<?php echo $emailid1; ?>"><span style="text-transform:uppercase;"><?php echo $row['firstname']; ?></span></a></li>
			<li><a href="http://mxbridge.mywebcommunity.org/login.html">LOGOUT</a></li>
		
		
                </ul>
                </div>
                <i class="fa fa-bars" onclick="showeMenu()"></i>
        </nav>

<div class="text-box">
        <h1>MX BRIDGE</h1>
       
        
        <p>PSG College of Technology is one of the most distinctive colleges in Tamilnadu and India. For Alumni, the years spent as a student are among the most exciting and challenging of our lives. We all leave PSG with strong feelings about the College and a sense that we have formed a unique identity. At few other colleges in the country are the alums known by a distinctive name. But all of us, from the moment we enter PSG, become Techians and we stay that way for the rest of our lives</p>
<a href="" class="hero-btn" >Visit Us To Know More</a>
</div>
</section>
<section class="about">
<h1>About</h1>
<p>Department of computer applications</p>
<div class="row">
        <div class="about-col">
        <h3>Department</h3>
        <p>The Department of Computer Applications is more than 30 years old. The department was started in the year 1983. Around 3000 MCA students have been graduated. It is so proud to have many alumni occupying notable senior position in industry and academia. They also guide current year student in various academic and extra curicular activities.</p>			
        </div>
        <div class="about-col">
        <h3>Vision</h3>
        <p>Department of Computer Applications aspires to produce competent Software Professionals, Entrepreneurs and Leader to serve the needs of the society.</p>
	</div>
        <div class="about-col">
        <h3>Mission</h3>
        <p>Our Mission as a department is to provide world class education; foster technical skills to meet the current and emerging trends in the industry, to enable students acquire good academic skills and devotion to knowledge towards research and development, to inculcate the leadership qualities with ethical responsibilities for the betterment of the society and to empower them to become entrepreneurs.</p>
	</div>
</div>
</section>
<section class="footer">
        <div class="icons">
               <i class="fa fa-facebook"></i>
               <i class="fa fa-twitter"></i>
               <i class="fa fa-instagram"></i>
               <i class="fa fa-linkedin"></i>
         </div>
         <p>Made with <i class="fa fa-heart-o"></i> by MX bridge</p>

</section>
<script>
        var navLinks=document.getElementById("navLinks");
        function showMenu()
        {
                navLinks.style.right="0";
        }
        function hideMenu()
        {
                navLinks.style.right="-200px";
        }
  </script>					
						
</body>
</html>