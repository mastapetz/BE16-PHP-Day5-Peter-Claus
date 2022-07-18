<?php
require_once "actions/db_connect.php";
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $image = $data['image'];
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
    <title>Big Library</title>
    <?php require_once "components/boot.php"; ?>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
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
        <legend class='h2 mb-3 edu'>Delete request <img class='img-thumbnail rounded-circle shadow' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?php echo $title ?> by <?php echo $author_first_name . " " . $author_last_name ?> </td>
            </tr>
        </table>

        <h3 class="mb-4 edu">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="picture" value="<?php echo $image ?>" />
            <button class="btn btn-danger shadow edu" type="submit">DELETE</button>
            <a href="index.php"><button class="btn btn-warning shadow m-1 edu" type="button">BACK</button></a>
        </form>
    </fieldset>

</body>

</html>