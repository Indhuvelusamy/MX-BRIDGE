<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
	background-color: #f5f5f5;
    font-family: Arial, Helvetica, sans-serif;
    font-size:18px;
	text-align:center;
	background-image:url("home.png");
	background-repeat:no;
	background-size:cover;
	
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
p {
  font-size:15px;
  color:gray;
  font-family:poppins;
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
button {
  font-family:poppins;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  border-radius:5px;
  background-color:gray;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button:hover{
background-color: #c5b358;
}
h4{
color:white;
font-size:25px;
font-family: poppins; 
letter-spacing: 3px;
}
header {
	height: 100px;
	background: #262626;
	
	width: 100%;
	z-index: 10;
	position: relative;
}
nav{
	width:100%;
	height:60px;
	
	
}
nav ul{
	float: center;
	line-height: 70px;
}
nav ul li {
	float:center;
	list-style:none;
	position:relative;
	
}
nav ul li a{
	
	text-decoration:none;
	font-family: poppins;
	letter-spacing: 3px;
	font-size: 20px;
	margin: 0 10px;
	color: black;
	
}
nav ul li ul{
	display:none;
	position:absolute;
	background-color:#262626;
	padding:5px;
	border-radius:0px 0px 4px 4px;
}
nav ul li:hover ul{
	display:block;
	padding:5px;
	
	
}
nav ul li ul li
{
	width:150px;
	height:50px;
	border-radius:4px;
	
	
}
nav ul li ul li a{
	padding:8px 10px;

}
nav ul li ul li a:hover{
	height:50px;
	background-color:gray;
	
	
}
.nav-area li{
	display:inline-block;	
}
.nav-area li a{
	color:#fff;
	text-decoration:none;
	padding:5px 20px;
	font-family:poppins;
	font-size:18px;
	
}
.nav-area li a:hover{
	border-radius:4px 4px 4px 4px;
	background:#fff;
	color:#333;
}
</style>
<html>
<body>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<header>

<?php 
         $emailid=$_GET['emailid'];
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("select firstname,aff from student where emailid='$emailid' union select firstname,aff from alumni where emailid='$emailid' union select firstname,aff from faculty where emailid='$emailid'");
         $row = mysqli_fetch_assoc($result);
        
?>
<div class="wrapper">
			<h4>Welcome to MX Bridge</h4>
				
				<nav>
					<ul class="nav-area">
	<h3>
		
	          <li><a href="http://mxbridge.mywebcommunity.org/home.php?emailid=<?php echo $emailid; ?>">Home</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allalumni.php?emailid=<?php echo $emailid; ?>">Alumni</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/allstudent.php?emailid=<?php echo $emailid; ?>">Student</a></li>
		<li><a href="http://mxbridge.mywebcommunity.org/i1.php?emailid=<?php echo $emailid; ?>">Gallery</a></li>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/alumni_post.php?emailid=<?php echo $emailid; ?>">New Feeds</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/student_post.php?emailid=<?php echo $emailid; ?>">New Feeds</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/faculty_post.php?emailid=<?php echo $emailid; ?>">New Feeds</a></li>
		<?php } ?>
                <?php if($row['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_alumnievents.php?emailid=<?php echo $emailid; ?>">Events</a></li>
		<?php } ?>
                <?php if($row['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_events.php?emailid=<?php echo $emailid; ?>">Events</a></li>
		<?php } ?>
                <?php if($row['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_facultyalumni.php?emailid=<?php echo $emailid; ?>">Events</a></li>
		<?php } ?>
		<li><a href="#"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></a>
		<ul>
			<li><a href="http://mxbridge.mywebcommunity.org/profile.php?emailid=<?php echo $emailid; ?>">Profile</a></li>
			<li><a href="http://mxbridge.mywebcommunity.org/login.html">Logout</a></li>
		
		</ul>
		</li>
                </h3>
	</ul>
				</nav>
			</div>
		</header>
<?php 

	
		
$mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
$result = $mysqli->query("SELECT * FROM student order by firstname"); 
$i=0;
?>
<div class="wrap">
<div class="container">
<?php if($result->num_rows > 0){ ?> 
<?php  while($row = mysqli_fetch_assoc($result)){  
$i++;
$emailid=$row['emailid'];
$result1=$mysqli->query("select * from student_image where emailid='$emailid'");
         $row1 = mysqli_fetch_assoc($result1);
?>
  <div class="block">
    <image src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']); ?>"  style="width:200px; height:200px; padding:30px 30px 0px 30px;"></image>
    <p><?php echo $row['firstname']; echo "  "; echo $row['lastname']; ?></p>
    <p><?php echo $row['rollno'];?></p>
    <p><button>View Profile</button></p>
  </div>
  <?php if ($i==4)
  {
  echo '<br>';
  echo '<br>';
  $i=0; }?>
     <?php } ?> 
    
 
<?php } ?>
</div>
</div>
</body>
</html>