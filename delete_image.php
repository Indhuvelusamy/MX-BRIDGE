<?php 
   $mysqli= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
         $id=$_GET['id'];
          $result1=$mysqli->query("select *  from images where id='$id'");
          $row1 = mysqli_fetch_assoc($result1);
   $emailid=$row1['emailid'];
        
         $result=$mysqli->query("delete from images where id='$id'");

   
         $URL="http://mxbridge.mywebcommunity.org/edit_images.php?emailid=".$emailid;
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        
        
?>