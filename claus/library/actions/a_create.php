<?php 
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {  
   $id = $_POST['id'];
   $title = $_POST['title'];
   $isbn = $_POST['isbn'];
   $type = $_POST['type'];
   $author_first_name = $_POST['author_first_name'];
   $author_last_name = $_POST['author_last_name'];
   $publisher_name = $_POST['publisher_name'];
   $publisher_address = $_POST['publisher_address'];
   $publish_date = $_POST['publish_date'];
   $short_description = $_POST['short_description'];
   $available = $_POST['available'];
   $uploadError = '';
   //this function exists in the service file upload.
   $image = file_upload($_FILES['image']);

   $sql = "INSERT INTO data (title, ISBN, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, short_description, available, image) VALUES
   ('$title', '$isbn', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$short_description', '$available', '$image->fileName')";

   if(mysqli_query($connect, $sql) === TRUE){
    $class = "success";
    $message = "
        The entry below was successfully created
        <br>
        <table class='table w-50'><tr>
        <td> $title </td>
        <td> $type </td>
        </tr></table><hr>
        ";
        $uploadError = ($image->error !== 0) ?
        $image->ErrorMessage : '';
   }else{
    $class = "danger";
    $message = "Error while creating record. Try again: <br>" . $connect->error;
    $uploadError = ($image->error != 0)?
    $image->ErrorMessage :'';
   }
   mysqli_close($connect);
}else{
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <?php require_once "../components/boot.php" ?>
</head>
<body>
<div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? '' ?></p>
               <p><?php echo ($uploadError) ?? '' ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>

</body>
</html>