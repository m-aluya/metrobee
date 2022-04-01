<?php
if(isset($_GET['cvb'])){
    Commerce::CheckOut($_SESSION['raws']['email'], $cart_id);
}
  
if(isset($_POST['ad'])){
    Commerce::saveAddress($cart_id, $_SESSION['raws']['email'], $_POST['address']);
}
?>
<div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">Delivery Address</h5>
    <div class="alert alert-success text-center">Payment successful</div>
    <form method="POST" action="#">
        <div class="form-group">
            <label >Enter your address</label>
            <textarea class="form-control" name="address"></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" name="ad" class="btn btn-primary">Save</button>
        </div>
    </form>
  </div>
  
 
</div>