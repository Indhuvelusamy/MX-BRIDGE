 
 <?php
 

	 
	 $emailid1=$_POST['username'];
         
	 $password=$_POST['password'];
         
        
         
	 $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	
             $result=$mysqli->query("select emailid,password,verified,averified from faculty where emailid='$emailid1' union  select emailid,password,verified,averified from alumni where emailid='$emailid1' union select emailid,password,verified,averified from student where emailid='$emailid1'");
  
	      if(mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
    if($row["password"]==$password)
	{
        
	if ($row['verified']==1)
	{
                if($row['averified']==1){
                        //echo $emailid1;
                        $URL="http://mxbridge.mywebcommunity.org/home.php?emailid=".$emailid1;
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 }
                 else
                 {
                 $URL="http://mxbridge.mywebcommunity.org/adminverify.html";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 }
  }
  else
  {
  $URL="http://mxbridge.mywebcommunity.org/notemailverify.html";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  }
  }
  else
  {
    
  $URL="http://mxbridge.mywebcommunity.org/incorrect.html";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
  }
  }
  }
  else
          {   
          
  $URL="http://mxbridge.mywebcommunity.org/incorrect.html";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
 
 ?>