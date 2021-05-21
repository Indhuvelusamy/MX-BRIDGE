<?php 
         $emailid=$_GET['emailid'];
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("select firstname,lastname,aff from student where emailid='$emailid' union select firstname,lastname,aff from alumni where emailid='$emailid' union select firstname,lastname,aff from faculty where emailid='$emailid'");
         $row = mysqli_fetch_assoc($result);
        $result1=$mysqli->query("select * from student_image where emailid='$emailid'");
         $row1 = mysqli_fetch_assoc($result1);
?>

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


img
{
		box-sizing:border-box;
		width:410px;
		height:250px;
		border-radius:50%;
		border:2px solid gray;
		padding:5px 5px;
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
.wrap{
    
    width: 1350px;
    background:#fff3f3;
    border-radius:10px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
</style>


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
<form action="" method="post" enctype="multipart/form-data">

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
    <center><label><h2>Please Choose Image to Upload</h2>  
</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="submit" name="submit" value="Upload">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mxbridge.mywebcommunity.org/edit_images.php?emailid=<?php echo $emailid; ?>"><SPAN STYLE=" font-size: 13pt">Manage my posts</SPAN></a>		</center>

</form>
<?php  

$db= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, uploaded,emailid) VALUES ('$imgContent', NOW(),'$emailid')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;

?><br><br>

<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>
<?php 

$db= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
        <img id="myImg" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="410" height="300" />&nbsp;&nbsp; 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</div>
</script>
</body>
</html>