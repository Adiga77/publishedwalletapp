<?php 
session_start();
 include "dashboard/classes/Validation.php";
 include "dashboard/classes/Account.php";
 $validation = new Validation();
 $account = new Account();
if((isset($_POST['login'])) || (isset($_POST['register'])) || (isset($_POST['email']))){
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $user = $validation->getUserByEmail($email);

        if(!$user){
            header('location:login.php?message=you are not a registered user please register');
        }else{
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['id'];
            header('location:dashboard/index.php');
        }
    }

    // register
    if(isset($_POST['register'])){
        $email = $_POST['email'];
        // remove illegal character
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

         //validation against empty email
         if(empty($email)){
            header('location:register.php?msg1=empty email');  
            exit(); 
        }

        $user = $validation->getUserByEmail($email);
        if(in_array($email, $user)){
            header('location:register.php?msg2=email exists');
            exit();
        }
        

         //validation for valid email and sending the value to an account table
         $validation->registerUser($email);
         $user = $validation->getUserByEmail($email);
        /*  $_SESSION['email'] is storing the newly created user email and $_SESSION['id']
            is storing the newly created user id which is been stored in $user_id variable
            for it to be passed as th id to be stored in the user_id ithe account table in
            walletapp database.
            note the $user_id hold the id of the user which help to instantenousely create 
            accross the accounts, fundings and withdrawal
        */
         $_SESSION['email'] = $user['email'];
         $_SESSION['user_id'] = $user['id'];
         $user_id = $_SESSION['user_id'];
         $account->createAccount($user_id);
        //  $account->createFundings($user_id);
        //  $account->createWithdrawals($user_id);
         if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('location:login.php?msg3=Registration successful');
            exit();
        }    

    }
}
?>