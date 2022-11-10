<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];


    if (empty($email)) {
        $emailerror = "email required";
    } 
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $invalidemail = "Invalid email format";
    }

    if (empty($userpassword)) {
        $passworderror = "password required";
    }

    include('../View/login.php');


    if (empty($emailerror) &&  empty($invalidemail) &&  empty($passworderror)) {


        session_start();
        $dtls = file_get_contents('../Model/signup.json');
        $dtlsok = json_decode($dtls);

        foreach ($dtlsok as $ok) {
            $email= $ok->email;
            $userpassword= $ok->userpassword;
        }


        
            if ($_POST['email'] == $email && $_POST['userpassword'] == $userpassword) {
                $_SESSION['username'] = $username;
                header("location:../view/customer.php");
            } 
            else {
            header("Location: ../View/Login.php?error=Incorect User name or password");
            }
        
    }
}





 






?>