<?php
$firstname=$_GET['firstname'];
	 $lastname=$_GET['lastname'];
	 $emailid=$_GET['emailid'];
	 $password=$_GET['password'];
	 $aff=$_GET['aff'];
         
         if ($aff=="Alumni"){
         $URL="http://mxbridge.mywebcommunity.org/alumni.php?firstname=".$firstname."&lastname=".$lastname."&emailid=".$emailid."&password=".$password."&aff=".$aff;
         echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 }
         ?>