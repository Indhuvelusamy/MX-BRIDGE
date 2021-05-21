<?php
$con= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
$sql = 'select * from tbl_gallery '; // change this id as per your need
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
?>
<html>
<head>
    <title>Retrieve Image from MySQL Database in PHP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
    <div class="container text-center">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"/>'; ?>
    </div>
</body>
</html>
<?php } ?>