<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();

    if (isset($_SESSION['email'])) {

        echo "<center><h1>CUSTOMER PAGE</h1></center>";
        echo "<center><h2> welcome " . $_SESSION['username'] . "</center></h2>";
        echo ("<button onclick=\"location.href='../view/customerprofile.php'\">view profile</button>");
        echo "<br> <br> <br> <br>";
        echo ("<button onclick=\"location.href='../controller/logout.php'\">Logout</button>");
    } else {
        echo "I am so sorry please login again :( ";
        echo (" <button onclick=\"location.href='../view/login.php'\">Login</button>");
    }
    ?>

    <center><?php include '../controller/footer.php'; ?></center>
</body>

</html>