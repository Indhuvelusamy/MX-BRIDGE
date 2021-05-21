

<?php
	
	$conn = NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user'); 
	$sql="SELECT * from images";

$count=0;
    
    //Get image data from database
    $result = mysqli_query($conn,$sql);
  
			while($row=mysqli_fetch_assoc($result)){
			echo '<br>';
			
			
				 echo $row['image'];; 
				  }

?>
