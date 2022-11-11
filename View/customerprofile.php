<?php

session_start();

if (isset($_SESSION['email'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer profile</title>
    </head>

    <body>
        <center>
            <h1> Customer profile</h1>
        </center>
        <h1>username : <?php echo  "" . $_SESSION['username'] . ""; ?> </h1>
        <h1>email : <?php echo  "" . $_SESSION['email'] . ""; ?> </h1>
        <h1>address : <?php echo  "" . $_SESSION['address'] . ""; ?> </h1>
        <h1>date of birth : <?php echo  "" . $_SESSION['dob'] . ""; ?> </h1>
        <h1>phone : <?php echo  "" . $_SESSION['phone'] . ""; ?> </h1>
        <h1>usertype : <?php echo  "" . $_SESSION['usertype'] . ""; ?> </h1>

        <br>
        <button><a href="customer.php">Go BACK</a></button>

        <center><?php include '../controller/footer.php'; ?></center>

    </body>

    </html>

<?php
}
?>