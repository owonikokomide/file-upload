<!DOCTYPE html>  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data"> 
    <input type="file" name="file" placeholder="choose file" multiple><br>
    <input type="submit" name="submit">
  </form>
</body>
</html>
<?php include('config.php'); ?>

<?php
if(isset($_POST["submit"])){
  $filename = $_FILES['file']['name'];
  $foldername = "images/";
  $destination = $foldername. $filename;
  $foldernametemp =$_FILES['file']['tmp_name'];
  // echo $foldernametemp; 
  // echo $filename;

  $insert = "INSERT INTO file_table(file)
  VALUES('$filename')";
  $query = mysqli_query($connection, $insert);

if(move_uploaded_file($foldernametemp, $destination)){
  echo "files uploaded successfully";
}
else{
  echo "files not uploaded successfully";
}
}
?>
