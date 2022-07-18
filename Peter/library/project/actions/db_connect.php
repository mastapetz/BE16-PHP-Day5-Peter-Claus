<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "be16_cr10_aigner_biglibrary";

try {
    $connect = mysqli_connect($localhost, $username, $password, $dbname);
    // echo "Connected";
} catch (mysqli_sql_exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

// function var_dump_pretty($var){
//     echo "<pre>";
//     var_dump($var);
//     echo "</pre>";
// }