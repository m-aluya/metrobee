<?php
if(isset($_GET['udl'])){
    Inaki::deleteItem(intval($_GET['udl']), 'cart');
}
?>
<h3>Your shopping cart</h3>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">QTY</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Remove Item</th>
    </tr>
  </thead>
  <tbody>
   <?php

   
Commerce::readCartContent($cart_id, $_SESSION['raws']['email']);
?> 
      
   
  </tbody>
</table>
<script> 
    var ok = parseInt($("#okrt").data("ok")) * 100;
  
    </script>
<form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button class="btn btn-primary" type="button" onclick="payWithPaystack()"><i class="fa fa-long-arrow-right"></i> Check Out </button> 
</form>
 
<script>
  
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_cfd6325629ab336f9a3e715cd0ec4f3bf8bb4e55',
      email: '<?= $_SESSION['raws']['email'] ?>',
      amount: ok,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "<?= $_SESSION['raws']['phone'] ?>"
            }
         ]
      },
      callback: function(){
          window.location.replace("<?= Inaki::path(); ?>app/cstore?k=4&<?= token() . token(). sha1(time()); ?>&cvb&cart=<?= $cart_id ?>&user=<?= $_SESSION['raws']['email']; ?>");
          
      },
      onClose: function(){
          //alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
