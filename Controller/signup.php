<?php include '../controller/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <section>
        <center>

            <h1>Signup</h1>

            <form action="../Controller/signupvalidation.php" method="post">

                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>

                <label for="username">Username</label>
                <input type="text" name="username" placeholder="enter username"> <br> <br>


                <?php if (isset($usernameerror)) { ?><?php echo $usernameerror; ?> <br> <?php  } ?>
            <?php if (isset($lettererror)) { ?><?php echo $lettererror; ?> <br> <?php  } ?>


        <br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="enter email"> <br><br>


        <?php if (isset($emailerror)) { ?><?php echo $emailerror; ?> <br> <?php  } ?>
    <?php if (isset($invalidemail)) { ?><?php echo $invalidemail; ?> <br> <?php  } ?>



<br>
<label for="phone">Phone</label>
<input type="text" name="phone" placeholder="enter phone number"> <br><br>


<?php if (isset($phoneerror)) { ?><?php echo $phoneerror; ?> <br> <?php  } ?>
<?php if (isset($numbererror)) { ?><?php echo $numbererror; ?> <br> <?php  } ?>
<?php if (isset($phonelengtherror)) { ?><?php echo $phonelengtherror; ?> <br> <?php  } ?>



<br>
<label for="dob">Date of birth</label>
<input type="date" name="dob" placeholder="enter date of birth"> <br><br>


<?php if (isset($doberror)) { ?><?php echo $doberror; ?> <br> <?php  } ?>


<br>
<label for="usertype"> Usertype:</label>
<select name="usertype">
    <option value="NULL">Select user</option>
    <option value="customer">customer</option>
    
</select> <br><br>
<?php if (isset($usertypeerror)) { ?><?php echo $usertypeerror; ?> <br> <?php  } ?>


<br>
<label for="address">Address</label>
<input type="text" name="address" placeholder="enter address"> <br><br>

<?php if (isset($addresserror)) { ?><?php echo $addresserror; ?> <br> <?php  } ?>


<br>
<label for="userpassword">Password</label>
<input type="password" name="userpassword" placeholder="enter password"> <br><br>


<?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <?php  } ?>
<?php if (isset($passdontmatch)) { ?><?php echo $passdontmatch; ?> <br> <?php  } ?>


<br>
<label for="confirmpassword">Confirm password</label>
<input type="password" name="confirmpassword" placeholder="confirm password"> <br><br>


<?php if (isset($passworderror)) { ?><?php echo $passworderror; ?> <br> <?php  } ?>
<?php if (isset($passdontmatch)) { ?><?php echo $passdontmatch; ?> <br> <?php  } ?>

<br>
<input type="submit" value="signup" name="signup">



            </form>
            <?php include '../controller/footer.php'; ?>
        </center>

    </section>
</body>

</html>