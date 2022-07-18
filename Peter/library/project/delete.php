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
    <?php include_once 'components/boot.php' ?>
    <title>Delete Entry</title>
</head>
<body>
    
<fieldset>
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this book from the database?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>



</body>
</html>