<?php 
require_once "db_connect.php";
require_once "file_upload.php"; 

if($_POST){
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
    if($image->error === 0){
        $_POST["image"] == "product.png" || unlink("../pictures/$_POST[image]");
        $sql = "UPDATE data SET title = '$title', ISBN = '$isbn', type = '$type', image = '$image->fileName', author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name = '$publisher_name', publisher_address = '$publisher_address', publish_date = '$publish_date', short_description = '$short_description', available = '$available' WHERE id = '$id'";
    }else{
        $sql = "UPDATE data SET title = '$title', ISBN = '$isbn', type = '$type', author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name = '$publisher_name', publisher_address = '$publisher_address', publish_date = '$publish_date', short_description = '$short_description', available = '$available' WHERE id = '$id'";
    }
    if(mysqli_query($connect, $sql)){
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }else{
       $class = "danger";
       $message = "Error while updating record : <br>" . mysqli_connect_error();
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
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
    <title>A-Update</title>
    <?php require_once "../components/boot.php" ?>
</head>
<body>
<div class="container">
           <div class="mt-3 mb-3">
               <h1>Update request response</h1>
           </div>
           <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <!-- <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a> -->
               <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
           </div>
       </div>

</body>
</html>