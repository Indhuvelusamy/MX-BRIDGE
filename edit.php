<?php 
         $emailid=$_GET['id'];
         
         $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
	 $result=$mysqli->query("update alumni set averified=1 where emailid='$emailid'");
         $result=$mysqli->query("update student set averified=1 where emailid='$emailid'");
         $result=$mysqli->query("update facult set averified=1 where emailid='$emailid'");
         $URL="http://mxbridge.mywebcommunity.org/admin.php";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

?>