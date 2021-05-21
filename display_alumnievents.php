<style>
*{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    letter-spacing:1px;

}

.content-table{
border-collapse:collapse;
margin:30px 100px;
font-size:0.9em;
min-width:1300px;
border-radius:5px 5px 0 0;
overflow:hidden;
box-shadow:0 0 20px rgba(0,0,0,0.15);
font-size:15px;

}
.content-table thead tr{
background-color:#A9A9A9;
color:white;
text-align:center;
font-weight:bold;

}
.content-table th,.content-table td{
padding:12px 15px;

}
.content-table tbody tr{
border-bottom:1px solid white;

}
.content-table tbody tr.active-row{
font-weight:bold;
color:	#A9A9A9;

}
.content-table tbody tr:nth-of-type(even)
{

background-color:#f3f3f3;
}
.content-table tbody tr:last-of-type{
border-bottom:1px solid 	#A9A9A9;
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
  padding:20px 20px 20px 20px;
 
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
    
    width: 1350px;
    background:#fff3f3;
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
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
		 $result=$mysqli->query("select firstname,lastname,aff from student where emailid='$emailid' union select firstname,lastname,aff from alumni where emailid='$emailid' union select firstname,lastname,aff from faculty where emailid='$emailid'");
         $row = mysqli_fetch_assoc($result);
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

<table class="content-table">
<thead>
<tr>
<th><strong>Event ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Description</strong></th>
<th><strong>Date</strong></th>
<th><strong>Time</strong></th>
<th><strong>Image</strong></th>
</tr>
</thead>
<form method="post" action="">
<?php
$result = $mysqli->query("Select * from events ORDER BY uploaded");

 if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<td align="center"><?php echo $row['id']; ?></td>
<td align="center"><?php echo $row['name']; ?></td>
<td align="center"><?php echo $row['description']; ?></td>
<td align="center"><?php echo $row['date']; ?></td>
<td align="center"><?php echo $row['time']; ?></td>
<td align="center"><image src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  style="width:100px; height:100px;"></image></td>
</tr>
</tbody>
<?php  } }
?>
</form>
</table>


</body>
</html>
