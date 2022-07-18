<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"; ?>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
    <title>Big Library</title>
</head>

<?php
require_once "actions/db_connect.php";
$publisher_name = $_GET['publisher_name'];
$sql = "SELECT * from data WHERE publisher_name ='$_GET[publisher_name]'";
$result = mysqli_query($connect, $sql);
$tbody = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tbody .= "<tr>
            <td><img class='img-thumbnail shadow' src='pictures/" . $row['image'] . "'</td>
           <td class=' text-center'>" . $row['title'] . "</td>
           <td class=' text-center'>" . $row['author_first_name'] . " " . $row['author_last_name'] . "</td>
           <td class=' text-center'><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm edu shadow m-auto' type='button'>EDIT</button></a>
           <a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm edu shadow m-1' type='button'>DELETE</button></a>
           <a href='details.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm edu shadow m-auto' type='button'>DETAILS</button></a>
           </td>
            </tr>";
    }
} else {
    $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
?>

<body>

    <nav class="navbar navbar-expand-lg bg-light shadow">
        <div class="container-fluid w-75">
            <a class="navbar-brand text-success edu" href="index.php">📚 Big Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link edu text-dark active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link edu text-dark" href="index.php">Books</a>
                    <a class="nav-link edu text-dark" href="#">Events</a>
                    <a class="nav-link edu text-dark" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero mb-5">
        <div class="container w-50 justify-content-center p-5 inside-hero">
            <h1 class="edu text-center text-success">Welcome to Big Library Back-End</h1>
            <h5 class="edu text-center text-dark">Here you can easily manage your products.</h5>
            <h5 class="edu text-center text-dark">You can add, edit & delete products within a few clicks! </h5>
        </div>
    </div>

    <div class="manageProduct w-75 mt-3">

        <p class='h2 edu mb-3'>📖 Works published by <?php echo $publisher_name ?></p>
        <table class='table table-striped rounded overflow-hidden shadow'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody ?>
            </tbody>
        </table>
        <div class='mb-3'>
            <a href="create.php"><button class='btn btn-success edu shadow' type="button">➕ ADD PRODUCT</button></a>
        </div>
    </div>

    <footer class="bg-light shadow-lg p-3 mt-5">
        <div class="container-fluid w-75 text-center">
        <h6 class="edu text-center text-dark">Claus Mersch - Fullstack</h6>
        </div>
    </footer>

</body>



</html>