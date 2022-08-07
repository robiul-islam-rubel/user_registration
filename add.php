<?php
    include('dbconnect.php');

    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    mysqli_query($dbconnection, "INSERT INTO Persons (FirstName, LastName, Email, Phone, Address) VALUES ('$fname', '$lname', '$email', '$phone', '$address')");

    // echo "<h1>You successfully insert data in database</h1>";
    
    header('location:index.php');
?>