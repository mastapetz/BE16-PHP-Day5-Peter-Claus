<?php 
require_once 'actions/db_connect.php';

$sql= "SELECT * FROM library WHERE id = {$_GET['id']}";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0){
    // $cardStuff = "<span class='text-success border border-1'>Data available</span>"; //testing while loop
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $cardStuff = 
        "<div class='col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12'>
            <div class='card mb-3'>
                <div class='row g-0'>
                    <div class='col-3 col-sm-3 col-md-3 col-lg-4 col-xl-4 col-xxl-4 d-none d-sm-block'>
                        <img src='pictures/{$row['image']}' class='img-fluid rounded-start img-thumbnail d-none d-sm-block' alt='...'>
                    </div>
                    <div class='col-6 col-sm-6 col-md-6 col-lg-8 col-xl-8 col-xxl-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['title']}</h5>
                            <p class='card-text'>Author: {$row['author_fName']} {$row['author_lName']} </p>
                            <p class='card-text'>Publisher: <a href='publisher.php?id={$row['id']}' target='_blank'>{$row['publisher_Name']}</a></p>
                            <p class='card-text'>Type: {$row['type']}</p>
                            <p class='card-text'>Description: {$row['description']}</p>
                            <p class='card-text'>Status:" . ($row['status'] ? 'available' : 'reserved') . "</p>
                        </div>
                    </div>
                    <div class='card-footer text-center'>
                        <a href='index.php'><button class='btn btn-success btn-sm' type='button'>Home</button></a>
                        <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                        <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
                    </div>
                </div>
            </div>
        </div>";
 }
 else{
    $cardStuff = "<span class='text_danger'>No data available</span>";
};
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'components/boot.php' ?>
    <title>Details</title>
</head>
<body>
<?php include_once 'components/navbar.php' ?>
    <div class="container mt-5">
        <div class="row" >

            <?= $cardStuff ?>

        </div>
    </div>
</body>
</html>