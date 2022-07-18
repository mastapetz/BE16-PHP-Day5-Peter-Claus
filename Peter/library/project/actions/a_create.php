<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if($_POST){
    $title = $_POST['title'];
    $picture = file_upload($_FILES['picture']);
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

    $sql = "INSERT INTO library(title, image, ISBN, description, type, author_fName, author_lName, publisher_Name, publisher_Address, publish_Date, status) VALUES ('$title','$picture->fileName','$ISBN','$description','$type','$author_fName','$author_lName','$publisher_Name','$publisher_Address','$publish_Date','$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The Book entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $ISBN </td>
            <td> $description </td>
            <td> $type </td>
            <td> $author_fName </td>
            <td> $author_lName </td>
            <td> $publisher_Name </td>
            <td> $publisher_Address </td>
            <td> $publish_Date</td>
            <td> $status </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
}else {
    header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create</title>
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
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>