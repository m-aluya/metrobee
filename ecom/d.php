<?php

if(isset($_POST['addcart'])){
    unset($_POST['addcart']);
    Commerce::save2Cart($_SESSION['raws']['email'],
            $cart_id,
 filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING), 
 intval($_POST['price']),
 intval($_POST['qty']));
    
}


?>
<div class="col-md-6 offset-md-3">
    <div class="card mb-4">
                <div class="card-header">
                 <?= ucfirst($_GET['egret']) ?>
                </div>
                <div class="card-body">
                 <div class="row">
    <?php
if(isset($_GET['n'])){
    Commerce::details(intval($_GET['n']));
}
?>
</div>
                </div>
              </div>
    
    
    <?php
    $cartCount = Commerce::readCart($cart_id, $_SESSION['raws']['email']);
if($cartCount > 0){
    echo '<a class="btn btn-primary" href="'. Inaki::path().'app/cstore?k=3&'. token().'">View your cart ['. $cartCount.']</a><br/><br/><br/>';
}
    
    
    
    ?>
    
</div>