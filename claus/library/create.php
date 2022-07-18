<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
    <title>Big Library</title>
    <?php require_once "components/boot.php" ?>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .edu {
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2 edu mb-3'>Add Product</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
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
                    <td><textarea class="form-control" type="text" name="short_description" rows="4" placeholder="Short Description" value="<?php echo $description ?>" ></textarea></td>
                </tr>
                <tr>
                    <th>Available = 1, Reserved = 0</th>
                    <td><input class="form-control" type="number" name="available" placeholder="0 or 1" value="<?php echo $available ?>" /></td>
                </tr>

                <tr>
                    <th>Image</th>
                    <td><input class="form-control" type="file" name="image" /></td>
                </tr>

                <tr>
                    <td><button class='btn btn-success shadow edu' type="submit">✔️ INSERT PRODUCT</button></td>
                    <td><a href="index.php"><button class='btn btn-warning shadow edu' type="button">BACK</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>