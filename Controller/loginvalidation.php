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
        $dtls = file_get_contents('../controller/signup.json');
        $dtlsok = json_decode($dtls);

        foreach ($dtlsok as $ok) {
            $email= $ok->email;
            $userpassword= $ok->userpassword;
            $username= $ok->username;
            $address= $ok->address;
            $phone= $ok->phone;
            $dob= $ok->dob;
            $usertype= $ok->usertype;
           
        }


        
            if ($_POST['email'] == $email && $_POST['userpassword'] == $userpassword) {
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $username;
                $_SESSION['address'] = $address;
                $_SESSION['phone'] = $phone;
                $_SESSION['dob'] = $dob;
                $_SESSION['usertype'] = $usertype;
                setcookie('status', 'true', time() + 30000, '/');

                header("location:../view/customer.php");
            } 
            else {
            header("Location: ../View/Login.php?error=Incorect User name or password");
            }
        
    }
}





 






?>