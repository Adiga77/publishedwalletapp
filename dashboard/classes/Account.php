<?php
class Account{
    // function create user account on register
    public function createAccount($user_id){
        include "dashboard/config/db_connect.php";
        $sql = "INSERT INTO accounts (user_id, balance) VALUES (?, 0)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$user_id]);
        return $result;
    }
    //function to  create funding account on register
    public function createFundings($user_id){
        include "dashboard/config/db_connect.php";
        $sql = "INSERT INTO fundings (user_id, amount) VALUES (?, 0)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$user_id]);
        return $result;
    }
    // function tocreate withdrawal account on register
    public function createWithdrawals($user_id){
        include "dashboard/config/db_connect.php";
        $sql = "INSERT INTO withdrawals (user_id, amount) VALUES (?, 0)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$user_id]);
        return $result;
    }
    // function for all fundings history
    public function allFundingsHistory($user_id){
       include "config/db_connect.php";
       $sql = "SELECT * FROM fundings WHERE user_id=?";
       $stmt = $pdo->prepare($sql);
       $stmt->execute([$user_id]);
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $result;

    }
    // function to get all withdrawal history
    public function allWithdrawalsHistory($user_id){
        include "config/db_connect.php";
        $sql = "SELECT * FROM withdrawals WHERE user_id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
 
     }
    //  function to fund amount column in fundigs table
     public function FundingsAmount($user_id, $amount){
        include "config/db_connect.php";
        $sql = "INSERT INTO fundings (user_id, amount) VALUES (?, ?)";
        $stmt =$pdo->prepare($sql);
        $update = $stmt->execute([$user_id, $amount]);
        return $update;
     }
    //  function to update account balance after funding it
     public function fundingUpdateAccounts($amount, $user_id){
        include "config/db_connect.php";
        $sql = "UPDATE accounts SET balance = balance + ? WHERE user_id =?";
        $stmt =$pdo->prepare($sql);
        $update = $stmt->execute([$amount,  $user_id]);
        return $update;
     }

        // function to insert into withdrawal table for withdrawals made
     public function withdrawalFund($user_id, $amount){
        include "config/db_connect.php";
        $sql = "INSERT INTO withdrawals (user_id, amount) VALUES (?, ?)";
        $stmt =$pdo->prepare($sql);
        $update = $stmt->execute([$user_id, $amount]);
        return $update;
     }
        // function to update Account balance after withdrawal
     public function withdrawUpdateAccounts($amount, $user_id){
        include "config/db_connect.php";
        $sql = "UPDATE accounts SET balance = balance - ? WHERE user_id =?";
        $stmt =$pdo->prepare($sql);
        $update = $stmt->execute([$amount,  $user_id]);
        return $update;
     }

    //  selecting user from account table to display Account balance of user
    public function getUserByUserId($user_id){
        include "config/db_connect.php";
        $sql = "SELECT * FROM accounts WHERE user_id = ?";
        $stmt =$pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return  $user;
    }

    // total funding by an individual
    public function userFundingsSum($user_id){
        include "config/db_connect.php";
        $sql = "SELECT SUM(amount) FROM fundings WHERE user_id=?";
        $stmt =$pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return  $user;
    }

     // total withdrawal by an individual
     public function withdrawalsSum($user_id){
      include "config/db_connect.php";
      $sql = "SELECT SUM(amount) FROM withdrawals WHERE user_id=?";
      $stmt =$pdo->prepare($sql);
      $stmt->execute([$user_id]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      return  $user;
  }

}

?>