<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">

    <title>ERROR</title>
    <?php require_once "components/boot.php" ?>
    <style type="text/css">
        .edu {
            font-family: 'Edu NSW ACT Foundation', cursive;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Invalid Request</h1>
        </div>
        <div class="alert alert-warning" role="alert">
            <p>You've made an invalid request. Please <a href="index.php" class="alert-link">go back</a> to index and try again.</p>
        </div>
        <div class='mb-3'>

            <a href="index.php"><button class="btn btn-warning shadow m-1 edu" type="button">BACK</button></a>
        </div>
    </div>

</body>

</html>