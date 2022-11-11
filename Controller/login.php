<?php require_once'../controller/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <h1>Login</h1>

        <?php if (isset($_GET['error'])) { ?>
            <p><?php echo $_GET['error']; ?></p> <br>
        <?php } ?>

        <form action="../Controller/loginvalidation.php" method="POST">


            <label for="email">Email</label>
            <input type="text" name="email" placeholder="enter email"> <br><br>


            <?php if (isset($emailerror)) { ?><?php echo $emailerror; ?> <br> <?php  } ?>
        <?php if (isset($invalidemail)) { ?><?php echo $invalidemail; ?> <br> <?php  } ?>
    <br>

    <label for="userpassword">Password</label>
    <input type="password" name="userpassword" placeholder="enter password"> <br> <br>


    <?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <?php  } ?>
<br>
<input type="submit" value="login" name="login">






        </form>
        <?php include '../controller/footer.php'; ?>
    </center>
</body>

</html>