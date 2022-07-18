<?php

require_once "actions/db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $isbn = $data['ISBN'];
        $type = $data['type'];
        $image = $data['image'];
        $authorFName = $data['author_first_name'];
        $authorLName = $data['author_last_name'];
        $pubName = $data['publisher_name'];
        $pubAddress = $data['publisher_address'];
        $pubDate = $data['publish_date'];
        $description = $data['short_description'];
        $available = $data['available'];
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
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">

    <title>Big Library</title>
    <?php require_once "components/boot.php" ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        .edu {
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2 edu'>Update <?php echo $title ?> <img class='img-thumbnail rounded-circle shadow' src='pictures/<?php echo $image ?>' alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Title" value="<?php echo $title ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class="form-control" type="text" name="ISBN" placeholder="ISBN" value="<?php echo $isbn ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class="form-control" type="text" name="type" placeholder="Type" value="<?php echo $type ?>" /></td>
                </tr>
                <tr>
                    <th>Author First Name</th>
                    <td><input class="form-control" type="text" name="author_first_name" placeholder="First Name" value="<?php echo $authorFName ?>" /></td>
                </tr>
                <tr>
                    <th>Author Last Name</th>
                    <td><input class="form-control" type="text" name="author_last_name" placeholder="Last Name" value="<?php echo $authorLName ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Name</th>
                    <td><input class="form-control" type="text" name="publisher_name" placeholder="Publisher" value="<?php echo $pubName ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher Address</th>
                    <td><input class="form-control" type="text" name="publisher_address" placeholder="Publisher Addresss" value="<?php echo $pubAddress ?>" /></td>
                </tr>
                <tr>
                    <th>Publish Date</th>
                    <td><input class="form-control" type="text" name="publish_date" placeholder="yyyy-mm-dd" value="<?php echo $pubDate ?>" /></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><textarea class="form-control" type="text" name="short_description" rows="4" placeholder=" ... " value="<?php echo $description ?>" ></textarea></td>
                </tr>
                <tr>
                    <th>Available = 1, Reserved = 0)</th>
                    <td><input class="form-control " type="number" name="available" placeholder="0 or 1" value="<?php echo $available ?>" /></td>
                </tr>

                <tr>
                    <th>Image</th>
                    <td><input class="form-control" type="file" name="image" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />

                    <input type="hidden" name="image" value="<?php echo $image ?>" />
                    <td><button class="btn btn-success shadow edu" type="submit">✔️ SAVE CHANGES</button></td>
                    <td><a href="index.php"><button class="btn btn-warning shadow edu" type="button">BACK</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>