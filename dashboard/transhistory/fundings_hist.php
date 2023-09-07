<?php
$fundingsHistory = $account->allWithdrawalsHistory($user_id);
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
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Fundings History
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> 
              <table id="example" class="table table-striped table-responsive" style="width:100%">
                        <thead>
                          <tr>
                              <th>id</th>
                              <th>user id</th>
                              <th>Amount</th>
                              <th>date of transaction</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach($fundingsHistory as $fund){?>
                          <tr>
                              <td><? echo $fund['id'] ?></td>
                              <td><? echo $fund['user_id'] ?></td>
                              <td><? echo $fund['amount'] ?></td>
                              <td><? echo $fund['date_of_transaction'] ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody> 
                  </table>
              </div>
            </div>
          </div>
      </div>
  </div>
</body>
</html>