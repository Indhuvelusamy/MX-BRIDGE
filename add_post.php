<?php 
         $emailid=$_GET['emailid'];
         $content=$_
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("select * from alumni where emailid='$emailid'");
         $row = mysqli_fetch_assoc($result);
         $result1=$mysqli->query("select * from alumni_image where emailid='$emailid'");
         $row1 = mysqli_fetch_assoc($result1);
?>