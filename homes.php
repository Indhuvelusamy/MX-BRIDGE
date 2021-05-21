<?php

	 $emailid=$_GET['emailid1'];
         echo $emailid;
         $URL="http://mxbridge.mywebcommunity.org/home.php?emailid=".$emailid;
         echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                 
         ?>