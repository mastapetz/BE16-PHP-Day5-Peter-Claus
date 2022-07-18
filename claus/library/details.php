<?php

require_once 'actions/db_connect.php';

// if($_GET['id']){
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM products WHERE id = $id";
//     $result = mysqli_query($connect, $sql);
//     if(mysqli_num_rows($result) == 1){
//         $data = mysqli_fetch_assoc($result);
//         $name = $data['name'];
//         $price = $data['price'];
//         $picture = $data['picture'];
//     }else{
//         header("location: error.php");
//     }
//     mysqli_close($connect);
// }else{
//     header("location: error.php");
// }

$sql = "SELECT * from data WHERE id=" . $_GET["id"];
$result = mysqli_query($connect, $sql);
$tbody = '';
$cbody = '';


// var_dump($_GET);


if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "
      <div class='card mb-3 shadow'>
        <img src='pictures/{$row['image']}' class='card-img-top' alt='...'>
        <div class='card-body'>
            
            <h5 class='card-title edu'>{$row['title']}</h5>
            <p class='text-muted edu'>by {$row['author_first_name']}  {$row['author_last_name']} </p>
            <p class='card-text'>{$row['short_description']}</p>
            <p class='card-text'>Published by {$row['publisher_name']}</p>
            <p class='card-text'>{$row['publisher_address']}</p>
            <p class='card-text'>Published in {$row['publish_date']}</p>
            <p class='card-text'><small class='text-muted'><b>STATUS: {$row['available']}</b></small></p>
            <p class='card-text'><small class='text-muted'>1 = Available // 0 = Reserved</small></p>
        </div>
      </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}






mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Library</title>
    <?php require_once 'components/boot.php' ?>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">

</head>

<nav class="navbar navbar-expand-lg bg-light mb-5 shadow">
    <div class="container-fluid w-75">
        <a class="navbar-brand text-success edu" href="index.php">📚 Big Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link edu text-dark active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link edu text-dark" href="index.php#">Books</a>
                <a class="nav-link edu text-dark" href="#">Events</a>
                <a class="nav-link edu text-dark" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>

<body>
    <div class="manageProduct w-75 mt-3 mb-5">

        <p class='h2 edu mb-3'>📙 Detail View</p>


        <div class="container">
            <?= $tbody; ?>
        </div>
        <div class='mb-3'>

        <a href="index.php"><button class="btn btn-warning shadow m-1 edu" type="button">BACK</button></a>
        </div>
    </div>
</body>

<footer class="bg-light shadow-lg p-3 mt-5">
    <div class="container-fluid w-75 text-center">
        <h6 class="edu text-center text-dark">Claus Mersch - Fullstack</h6>
    </div>
</footer>

</html>