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
include "config/db_connect.php";
include "includes/header.php";
?>
<?php
    if(!isset($_GET['withdrawalmessage'])){
    unset($_GET['withdrawalmessage']);
    }  
?> 

   <!-- alert section -->

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="text-center"><strong></strong><?php if(isset($_GET['withdrawalmessage'])){ echo 'Hello!' . ' ' . '<strong>'.$_SESSION['email'] .'</strong>'.' '. $_GET['withdrawalmessage']; session_abort(); }else{ echo "Dashboard data was refreshed successfully"; } ?>
        <?php if(isset($_GET['message'])){ echo $_GET['message'];} ?> 
        </p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
   
    <p class="h6"><strong>Hello!</strong><?php if(isset($_SESSION['email'])){ echo ' '. $_SESSION['email']; }?></p>
    
    <ol class="breadcrumb mb-4">
    
        <div class="ms-auto">
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Fund Wallet</a>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Withdraw From Wallet</a>
        </div>
    </ol>
    <div class="row g-3">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4 w-100 h-100">
                <div class="card-header">
                    <h4 class="text-center">Balance</h4>
                </div>  
                <div class="card-body">
                    <p class="h4 text-center"><?php echo 'N' . $_SESSION['get_user_balance']['balance']; ?></p>
                </div> 
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4 w-100 h-100">
                    <div class="card-header">
                        <h4 class="text-center">Total Transaction</h4>
                    </div>
                    <div class="card-body">
                        <p class="small">fundings in numbers here</p>
                        <p class="small">withdrawals in numbers here</p>
                    </div>   
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 w-100 h-100">
                <div class="card-header">
                    <h4 class="text-center">Total Withdrawals</h4>
                </div>
                <div class="card-body">
                    <p class="lead text-center">Amount here</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4 w-100 h-100 ">
                <div class="card-header">
                    <h4 class="text-center">Total Fundings</h4>
                </div>
                <div class="card-body">
                    <p class="h6 text-center"><?php echo COUNT($user_total_fundings) ; ?></p>
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