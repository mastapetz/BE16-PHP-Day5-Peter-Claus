<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if($_POST){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $ISBN = $_POST['ISBN'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $author_fName = $_POST['author_fName'];
    $author_lName = $_POST['author_lName'];
    $publisher_Name = $_POST['publisher_Name'];
    $publisher_Address = $_POST['publisher_Address'];
    $publish_Date = $_POST['publish_Date'];
    $status = $_POST['status'];
    $uploadError = '';

    $picture = file_upload($_FILES['picture']); //calls fileupload from file_upload.php
    if($picture->error===0){
        ($_POST["picture"]=="book-cover.png")?: unlink("../pictures/$_POST[image]");

        $sql = "UPDATE `library` SET `title`='$title',image = '$picture->fileName', `ISBN`='$ISBN', description = '$description', `type`='$type',`author_fName`='$author_fName',`author_lName`='$author_lName',`publisher_Name`='$publisher_Name',`publisher_Address`='$publisher_Address',`publish_Date`='$publish_Date',`status`='$status' WHERE id ={$id}";

    }else{
        $sql = "UPDATE library SET title='$title', ISBN='$ISBN', description = '$description', `type`='$type',`author_fName`='$author_fName',`author_lName`='$author_lName',`publisher_Name`='$publisher_Name',`publisher_Address`='$publisher_Address',`publish_Date`='$publish_Date',`status`='$status' WHERE id ={$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect); 
}  else {
    header("location: ../error.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>