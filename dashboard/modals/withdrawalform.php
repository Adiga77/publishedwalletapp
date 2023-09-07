
   
   <!-- withdrawal Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="process_account.php" method="post">
                <div class="form-group mb-3">
                    <label>Amount:</label>
                    <input type="number" name="withdraw" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="withdraw_submit" class="btn btn-primary">Withdraw Fund</button>
                </div>
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>