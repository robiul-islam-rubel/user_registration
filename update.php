<?php
    include('dbconnect.php');

    $id = $_GET['id'];

    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    mysqli_query($dbconnection, "UPDATE `Persons` SET FirstName = '$fname', LastName = '$lname', Email = '$email' , Phone = '$phone' , Address = '$address' WHERE Personid = '$id'");

    header('location:index.php');
?>