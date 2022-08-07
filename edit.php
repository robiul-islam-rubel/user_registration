<?php
    include('dbconnect.php');

    $id = $_GET['id'];

    $query = mysqli_query($dbconnection, "SELECT * FROM `Persons` WHERE Personid = '$id'");

    $row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Edit</title>
</head>

<body>

    <div class="container">
        <h1 style="text-align: center; color: coral;">Update Information</h1>
        <form style="margin: auto; width: 500px;" method="POST" action="update.php?id=<?php echo $id;?>" name="myform" onsubmit="return validateForm()">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $row['FirstName'];?>">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" value="<?php echo $row['LastName'];?>">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="<?php echo $row['Email'];?>">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['Phone'];?>">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $row['Address'];?>">

            <input class="button" type="submit" value="Update">
            <!-- <input class="button2" type="reset" value="Reset"> -->
            <a href="index.php" style="text-decoration: none; background-color: red; padding: 6px; border-radius: 4px; color:white;">Back</a>

        </form>
    </div>

    <script>
        function validateForm() {
            // ^ --> start with, + --> one or more occurrences, $ --> end with
            let pattern = /^[A-Za-z]+$/;
            let pattern2 = /^[0-9]+$/;

            let fname = document.forms['myform']['fname'].value;
            let lname = document.forms['myform']['lname'].value;
            let phone = document.forms['myform']['phone'].value;

            if (pattern.test(fname) && pattern.test(lname) && pattern2.test(parseInt(phone))) {
                // alert("Your name have accepted");
                return true;
            } else {
                alert("Please FirstName, LastName should be alphabet characters only and Phone must be Number");
                return false;
            }
        }
    </script>

</body>

</html>