

<!DOCTYPE html>
<html>
<head>
    <title>Insert Image into MySQL Database using PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<style> 
input[type=submit] {
  background-color: #87CEFA;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<br/>
<div class="container">
    <div class="col-xs-8 col-xs-offset-2 well" style="background:none;">
    <form action="" method="post" enctype="multipart/form-data">
        <center><legend><h2>Please Choose Image to Upload</h2></legend>
        <div class="form-group">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="glryimage" accept="image/*" /><br><br>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Upload Image" class="btn btn-danger"/>
        </div>
        </center>
        <?php if(isset($_GET['st'])) { ?>
            <div class="alert alert-danger text-center">
            <?php if ($_GET['st'] == 'success') {
                    echo "Image uploaded successfully!!!";
                }
                else
                {
                    echo 'Error uploading image...';
                } ?>
            </div>
        <?php } ?>
    </form>
    </div>
</div>
<br><br>
</body>
</html>

<?php
$con= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');

//check if form submitted
if (isset($_POST['submit']))
{
    $img_name = $_FILES['glryimage']['name'];

    //upload file
    if ($img_name!='')
    {
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $allowed = ['png', 'gif', 'jpg', 'jpeg'];
    
        //check if it is valid image type
        if (in_array($ext, $allowed))
        {
            $created = @date('Y-m-d H:i:s');

            // read image data into a variable for inserting
            $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
                    
            // insert image into mysql database
            $sql = "INSERT INTO tbl_gallery(name, imagedata, created) VALUES('$img_name', '$img_data', '$created')";
            mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
            $URL="http://mxbridge.mywebcommunity.org/images.php";
                 echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                 echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
            
        }
    }
    else
        $statusMsg = 'Please select an image file to upload.<br><br>'; 
}
echo $statusMsg; 
?>
<?php
$con= NEW MYSQLi('fdb27.runhosting.com','3733521_user','Connect@123','3733521_user');
// fetch image from database
$sql = 'select * from tbl_gallery';
$result = mysqli_query($con, $sql) or die('Error ' . mysqli_error($con));
while($row = mysqli_fetch_array($result)){
 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imagedata']).'"width="450" height="300"/>';
   
 }?>