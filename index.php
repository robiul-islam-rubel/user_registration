<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CURD operation</title>
</head>

<body>

    <div class="container">
        <h1 style="text-align: center; color: coral;">Add Information</h1>

        <form style="margin: auto; width: 500px;" name="myform" method="POST" action="add.php" onsubmit="return validateForm()">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">

            <label for="address">Address</label>
            <input type="text" id="address" name="address">


            <input class="button" type="submit" value="Insert">

            <input class="button2" type="reset" value="Reset">

        </form>
    </div>

    <div style="margin-top: 50px;">
        <h1 style="text-align: center; color: rebeccapurple;">Show Information</h1>
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                        include('dbconnect.php');
                        $query = mysqli_query($dbconnection, "SELECT * FROM `Persons`");
                        while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['Personid'];?></td>
                    <td><?php echo $row['FirstName'];?></td>
                    <td><?php echo $row['LastName'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['Personid'];?>">Edit</a>&nbsp;
                        <a href="delete.php?id=<?php echo $row['Personid'];?>">Delete</a>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>

        </table>
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