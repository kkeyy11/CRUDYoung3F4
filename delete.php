<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "productyoung"; 

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM productsyoung3f4 WHERE id=$id";
    $connection->query($sql);
}

    header("location: /PRODUCT/index.php");
    exit;
?>