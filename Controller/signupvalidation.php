<?php

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $usertype = $_POST['usertype'];
    $address = $_POST['address'];
    $userpassword = $_POST['userpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    

    if (empty($username)) {
        $usernameerror = 'username required';
    }

    elseif(!preg_match("/^[A-Za-z][A-za-z0-9]{5,21}$/", $username)){
        $lettererror="username invalid";
    }

    if(empty($phone)){
        $phoneerror="phone required";
    }

    elseif(!is_numeric($phone)){
        $numbererror="Provide numbers only";
    }
    
    elseif((strlen($phone)!=11)){
        $phonelengtherror="provide 11 digit number";
    }

    if($usertype=="NULL"){
        $usertypeerror="Usertype required";
    }

    if(empty($dob)){
        $doberror="date of birth required";
    }

    if(empty($email)){
        $emailerror="email required";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $invalidemail = "Invalid email format";
    }

    if(empty($address)){
        $addresserror="address required";
    }

    if(empty($userpassword)){
        $passworderror="password required";
    }

    if(empty($confirmpassword)){
        $passworderror="password required";
    }

    elseif($userpassword != $confirmpassword){
        $passdontmatch="password don't match";
    }

    include('../View/signup.php');


    if (empty($usernameerror) &&  empty($lettererror) &&  empty($phoneerror) &&  empty($numbererror) &&  empty($phhonelengtherror) &&  empty($usertypeerror) &&  empty($doverror) &&  empty($emailerror) &&  empty($invalidemail) &&  empty($addresserror) &&  empty($passworderror) &&  empty($passdontmatch)) {

        if (file_exists('../Model/signup.json')) {
            $current_data = file_get_contents('../Model/signup.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'username'     =>     $username,
                'email'          =>     $email,
                'phone'     =>     $phone,
                'dob'               =>     $dob,
                'usertype'          =>     $usertype,
                'address'     =>     $address,
                'userpassword'     =>     $userpassword,
                'confirmpassword'     =>     $confirmpassword
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if (file_put_contents('../controller/signup.json', $final_data)) {
                header("location: ../View/login.php");
            }
        } else {
            $error = 'JSON File not exits';
        }
    }

    
}





?>