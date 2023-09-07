<?php
$user_id = $_SESSION['id'];
$withdrawalsHistory = $account->allWithdrawalsHistory($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <div class="container mt-5">
       <div class="accordion accordion-flush " id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                withdrawal History
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> 
                  <table id="example" class="table table-striped table-responsive" style="width:100%">
                        <thead>
                          
                          <tr>
                              <th>id</th>
                              <th>user_id</th>
                              <th>amount</th>
                              <th>date of transaction</th>
                          </tr>
                      </thead>
                      <tbody>
                       <?php foreach($withdrawalsHistory as $withdrawal){?>
                          <tr>
                              <td><?php $withdrawal['id'] ?></td>
                              <td><?php $withdrawal['user_id'] ?></td>
                              <td><?php $withdrawal['amount'] ?></td>
                              <td><?php $withdrawal['date_of_transaction'] ?></td>
                          </tr>
                          <?php
                        }?>
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
      </div>
  </div>
</body>
</html>



 