<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $picture = $data['image'];
        $ISBN = $data['ISBN'];
        $description = $data['description'];
        $type = $data['type'];
        $author_fName = $data['author_fName'];
        $author_lName = $data['author_lName'];
        $publisher_Name = $data['publisher_Name'];
        $publisher_Address = $data['publisher_Address'];
        $publish_Date = $data['publish_Date'];
        $status = $data['status'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/boot.php' ?>
    <title>Update</title>
</head>
<body>
    <?php include 'components/navbar.php' ?>
<fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Book Title" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text"  name="description" placeholder ="Book description" value="<?php echo $description ?>"  /></td>
                    </tr>
                    <tr>
                        <th>ISBN-13</th>
                        <td><input class="form-control" type= "text" name="ISBN" step="any"  placeholder="ISBN" value ="<?php echo $ISBN ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type="text"  name="type" placeholder ="Media type" value="<?php echo $type ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><input class="form-control" type="text"  name="author_fName" placeholder ="First Name" value="<?php echo $author_fName ?>"  /></td>
                        <td><input class="form-control" type="text"  name="author_lName" placeholder ="Last Name" value="<?php echo $author_lName ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type="text"  name="publisher_Name" placeholder ="Publisher Name" value="<?php echo $publisher_Name ?>"  /></td>
                        <td><input class="form-control" type="text"  name="publisher_Address" placeholder ="Publisher Address" value="<?php echo $publisher_Address ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class="form-control" type="text"  name="publish_Date" placeholder ="YYYY-MM-DD" value="<?php echo $publish_Date?>"  /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input class="form-control" type="text"  name="status" placeholder ="0 - Reserved \n <br> 1 - available" value="<?php echo $status ?>"  /></td>
                    </tr>
                    <tr>

                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
</body>
</html>