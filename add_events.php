<?php 

 $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
    $status = $statusMsg = ''; 
    $status = 'error'; 
   
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
          
     $update = $mysqli->query("INSERT into event (image,emailid) VALUES ('$imgContent','$emailid')"); 
          if($update){
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
    echo $statusMsg;
         $name=$_POST['event-title'];
         
         $descr=$_POST['event-description'];
         
         $date=$_POST['event-date'];
         
         $time=$_POST['event-time'];
         
        
	 $result=$mysqli->query("insert into events (name,description,date,time) values");
         $row = mysqli_fetch_assoc($result);
         
        
?>	
