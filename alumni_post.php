<style>
*{
    margin:0;
    padding:0;
    font-family: 'Poppins', sans-serif;
    letter-spacing:1px;

}
.p1
{
	left:400px;
	position:absolute;
        
        color:#8b008b;
	
	
}
.mlabel
{
	
	color:black;
	font-family:Arial, Helvetica, sans-serif;
}
.label1
{
	left:400px;
	top:430px;
	position:absolute;
	
	
}
.label2
{
	left:400px;
	top:490px;
	position:absolute;
	
	
}
.label3
{
	left:650px;
	top:430px;
	position:absolute;
	
	
}
.img2
{
		box-sizing:border-box;
		width:250px;
		height:250px;
		border-radius:50%;
		
		border:5px solid gray;
		padding:3px;
		background-color:white;
		margin-right:1000px;
		
	
	
}
.label4
{
	left:650px;
	top:490px;
	position:absolute;
	
	
}
.label11
{
	left:460px;
	top:430px;
	position:absolute;
	
	
}
.label22
{
	left:460px;
	top:490px;
	position:absolute;
	
	
}
.label33
{
	left:730px;
	top:430px;
	position:absolute;
	
	
}
.label44
{
	left:780px;
	top:490px;
	position:absolute;
	
	
}
.post-actions__publish {
  width: 120px;
left:1180px;
top:400px;
position:absolute;
  background-color: #008391;
  color: #fff;

  border-radius: 1.5em;
}
.sp
{
top:600px;
left:1000px;
position:absolute;
display:inline-block;
	text-decoration:none;
	color:#8b008b;
	border:1px solid grey;
	padding:10px 20px;
	font-size:12px;
	background:transparent;
	position:realtive;
	cursor:pointer;
	
}
.sp:hover{
border:1px solid skyblue;
	background:#8b008b;
	transition:1s;
        color:white;
}
.link
{
top:600px;
left:1200px;
position:absolute;
color:#8b008b;
}

.widget-post__textarea {
  width: 20%;
  height: 30%;
  padding: .5em;
	left:1000px;
	top:370px;
  border-color: gray;
  
  resize: none;
  position:absolute;
}

.widget-post__textarea1 {
  width: 50%;
  height:10%;
  padding: .5em;
	left:400px;
	
  border-color: black;
  
  resize: none;
  position:absolute;
}
.widget-post__textarea:focus {
  outline: none;
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
    
    width: 1250px;
    background:#fff3f3;
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.input-box h4{
    padding-bottom: 5px;
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
    padding-bottom: 5px;
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
.input-box1:last-child{
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
.input-box  .input-box1 select{
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
.input-box .input-box1 select:focus{
    background-color: #7ed321;
    color: #fff;
    text-align: center;
}
.input-box .input-box1 button{
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
.input-box .input-box1 button:hover{
    cursor: pointer;
    background: #5eb105;
}
.star{
color:red;
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
         $result = $mysqli->query("select * from alumni where emailid='$emailid'");
	$result1 = $mysqli->query("select * from post order by id DESC");
        $result2=$mysqli->query("select * from alumni_image where emailid='$emailid'");
        $row2 = mysqli_fetch_assoc($result2);
        $row3 = mysqli_fetch_assoc($result);
        
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
                <?php if($row3['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/alumni_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row3['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/student_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row3['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/faculty_post.php?emailid=<?php echo $emailid; ?>">NEW FEEDS</a></li>
		<?php } ?>
                <?php if($row3['aff']=="alumni") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_alumnievents.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row3['aff']=="student") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_events.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                <?php if($row3['aff']=="faculty") { ?>
                
		<li><a href="http://mxbridge.mywebcommunity.org/display_facultyevents.php?emailid=<?php echo $emailid; ?>">EVENTS</a></li>
		<?php } ?>
                
		
			<li><a href="http://mxbridge.mywebcommunity.org/profile.php?emailid=<?php echo $emailid; ?>"><span style="text-transform:uppercase;"><?php echo $row3['firstname']; ?></span></a></li>
			<li><a href="http://mxbridge.mywebcommunity.org/login.html">LOGOUT</a></li>
		
		   
		</ul>
		</div>
	<i class="fa fa-bars" onclick="showeMenu()"></i>
        </nav>
        
</section>
	<div class="wrap">
        <h3>
 <span>PERSONAL INFO</span></h3>
<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row2['image']); ?>" class="img2">
<form method="POST" action="">
	

<div class="mlabel"><div class="label1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name : </div>
<div class="label11" name="name" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row3['firstname']; ?></div>
<div class="label2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email :</div>
<div class="label22" name="email" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row3['emailid']; ?></div>
<div class="label3" >&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;Batch :</div>
<div class="label33" name="batch" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;<?php echo $row3['joinyear']; ?></div>
<div class="label4"  >&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;Mobile :</div>
<div class="label44" name="phonenumber" >&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;<?php echo $row3['mobile']; ?></div>
</div>
<textarea name="post1" id="post-content" class="widget-post__textarea" placeholder="Share your post...."></textarea>
<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="share" value="share" class="sp" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mxbridge.mywebcommunity.org/edit_post.php?emailid=<?php echo $emailid; ?>" class="link">Edit my posts</a>
 <?php 
	if($result1->num_rows > 0){
	while($row = $result1->fetch_assoc()){
        $e=$row['emailid'];
	 $r= $mysqli->query("select firstname,lastname from alumni where emailid='$e' union select firstname,lastname from faculty where emailid='$e'");
         $row1 = $r->fetch_assoc();
         $r4= $mysqli->query("select * from alumni_image where emailid='$e' union select * from faculty_image where emailid='$e'");
         $row4 = $r4->fetch_assoc();
	?>
        <br>
        <div class="p1">posted by&nbsp;&nbsp;<?php echo $row1['firstname']; echo " "; echo $row1['lastname']; ?>&nbsp;&nbsp;&nbsp;on&nbsp;&nbsp;<?php echo $row['date_posted'];?></div>
        <br><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row4['image']); ?>" class="img1">
	<textarea name="post"class="widget-post__textarea1" readonly><?php echo $row['content']; ?></textarea>
	
	<br><br><br>
        <?php }
	}	?>
        
</form>
</div>
</body>
</html>
        
<?php

if(isset($_POST['share']))
{
$post1=$_POST['post1'];
$insert=$mysqli->query("insert into post(emailid,content,date_posted) values('$emailid','$post1',NOW())");
$URL="http://mxbridge.mywebcommunity.org/alumni_post.php?emailid=".$emailid;
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}

?>
        
       	 
           