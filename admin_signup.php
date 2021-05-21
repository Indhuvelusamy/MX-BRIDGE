<?php
 

	 
	 $name=$_POST['username'];
	 $password=$_POST['password'];
         
	 $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $emailid1=$mysqli->real_escape_string($emailid1);
	 $password=$mysqli->real_escape_string($password);
             $result=$mysqli->query("select * from admin where name='$name' and password='$password'");
      
	      if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                        $URL="http://mxbridge.mywebcommunity.org/admin.php?name=".$name;
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 }
                 }
                 else
                 {
                 $URL="http://mxbridge.mywebcommunity.org/admin_login.php";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 }
                 
                 ?>