<?php
    include('dbconnect.php');
    
    $id = $_GET['id'];

    mysqli_query($dbconnection, "DELETE FROM `Persons` WHERE Personid = '$id' ");

    header('location:index.php');
?>