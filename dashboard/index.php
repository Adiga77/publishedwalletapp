<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('location: ../index.php');
    exit();
}

include "classes/Account.php";
$account = new Account();
$user_id = $_SESSION['id'];
// i stored this in a sesson bcus i want to use it else where(that is in my process_account file)
$_SESSION['get_user_balance'] = $account->getUserByUserId($user_id);
// $get_user_balance = $_SESSION['user_balance'];
$user_total_fundings = $account->userFundingsSum($user_id);
$user_total_withdrawals = $account->withdrawalsSum($user_id);
include "config/db_connect.php";
include "includes/header.php";
?>
<?php
    if(!isset($_GET['withdrawalmessage'])){
    unset($_GET['withdrawalmessage']);
    }  
?> 

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
   
    <p class="h6"><strong>Hello!</strong><?php if(isset($_SESSION['email'])){ echo ' '. $_SESSION['email']; }?></p>
    
    <ol class="breadcrumb mb-4">

        <!-- modal trigger button -->
        <div class="ms-auto">
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Fund Wallet</a>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Withdraw From Wallet</a>
        </div>
    </ol>
    <div class="row g-3">

        <!-- user Balance -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4 w-100 h-100">
                <div class="card-header">
                    <h4 class="text-center">Balance</h4>
                </div>  
                <div class="card-body">
                    <p class="h4 text-center"><?php echo 'N' . $_SESSION['get_user_balance']['balance']; ?></p>
                </div> 
            </div>
        </div>

            <!--user total withdrawal -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4 w-100 h-100">
                <div class="card-header">
                    <h4 class="text-center">Total Withdrawals</h4>
                </div>
                <div class="card-body">
                    <p class="h4 text-center"><?php echo array_sum($user_total_withdrawals); ?></p>
                </div>
            </div>
        </div>

        <!-- user total fundings -->
        <div class="col-xl-4 col-md-6">
            <div class="card bg-secondary text-white mb-4 w-100 h-100 ">
                <div class="card-header">
                    <h4 class="text-center">Total Fundings</h4>
                </div>
                <div class="card-body">
                    <p class="h4 text-center"><?php echo 'N' . array_sum($user_total_fundings) . '.' . '00'; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include "transhistory/withdrawal_hist.php";
include "transhistory/fundings_hist.php";
include "modals/fundform.php";
include "modals/withdrawalform.php";
include "includes/footer.php";
include "includes/scripts.php";
?>