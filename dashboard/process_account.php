<?php
session_start();
include "config/db_connect.php";
include "classes/Account.php";
$account = new Account();
if((isset($_POST['fund_submit'])) || (isset($_POST['withdraw_submit'])) ){
    // A condition to  fund account
    if(isset($_POST['fund_submit'])){
        $amount = $_POST['fund'];
        $user_id = $_SESSION['id'];
        $email = $_SESSION['email'];
        $account->FundingsAmount( $user_id, $amount);
        $updated = $account->FundingUpdateAccounts($amount, $user_id);
        if($updated){
            $_SESSION['success'] = "successfully";
            header('location:index.php?message=Wallet funded successfully');
        }

    }

    if(isset($_POST['withdraw_submit'])){
        $amount = $_POST['withdraw'];
        $user_id = $_SESSION['id'];
        $email = $_SESSION['email'];
        $user = $_SESSION['get_user_balance'];
        $user_balance = $user['balance'];

        // setting validation against withdrawing more than user balance
        if($amount > $user_balance){
            header('location:index.php?withdrawalmessage=you can not withdraw more than your balance');
            exit();
        }
        
        $withdraw = $account->withdrawalFund($user_id, $amount);
        $updated = $account->withdrawUpdateAccounts($amount, $user_id);


        if($updated){
            $_SESSION['success'] = "successfully";
            header('location:index.php?message= Money Withdrawn successfully');
        }

    }


}


?>