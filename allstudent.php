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
    border:1px solid white;
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
    background-color: #fff3f3;
    width: 1250px;
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
</style>
<?php 
         $emailid=$_GET['emailid'];
         $emailid3=$_GET['emailid'];
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("select firstname,aff from student where emailid='$emailid' union select firstname,aff from alumni where emailid='$emailid' union select firstname,aff from faculty where emailid='$emailid'");
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
  
<div class="container">
<table id="myTable" class="table table-striped" >  
      
	  <thead>  
          <tr>  
            <th>Profile</th>  
            <th>Name</th>  
            <th>Batch</th>  
            <th>RollNumber</th>
            <th>View Profile</th>			
          </tr>  
        </thead>  

        <tbody>  
        		<?php 
		$emailid=$_GET['emailid'];         
$mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
$result = $mysqli->query("SELECT * FROM student where averified=1 order by firstname"); 
if($result->num_rows > 0){
 while($row = mysqli_fetch_assoc($result)){  
$emailid=$row['emailid'];
$result1=$mysqli->query("select * from student_image where emailid='$emailid'");
         $row1 = mysqli_fetch_assoc($result1);

?>
          <tr> 
<td><image src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']); ?>"  style="width:150px; height:100px; padding:0px 0px 0px 50px; position:center;"></image></td>
<td><?php echo $row['firstname']; echo "  "; echo $row['lastname']; ?></td>		
<td><?php echo $row['joinyear'];?></td>
<td><?php echo $row['rollno'];?></td> 
<td><a href="http://mxbridge.mywebcommunity.org/studentdetail.php?emailid=<?php echo $emailid3; ?>&profile=<?php echo $row['emailid']; ?>">View Profile</a></td>
 
            </tr>    
        
<?php } }?>	
</tbody> 
      </table>  
	  
  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</div>

</body>
</html>