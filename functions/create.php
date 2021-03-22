<?php
include "/xampp/htdocs/STTAL/functions/connect.php";
include "/xampp/htdocs/STTAL/components/form.php";

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];

    $query = "INSERT INTO books VALUES ('', '$title', '$author', '$publisher')";
    mysqli_query($conn, $query);

    header("location: ../components/form.php");
}
