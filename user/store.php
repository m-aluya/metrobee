<?php

include_once 'classes/Classess.php'; 
$cart_id = sha1($_SESSION['raws']['email']);
if(isset($_GET['k'])){
    
    switch (intval($_GET['k'])) {
        case 1: include_once 'ecom/f.php';


            break;
        
        case 2 : include_once 'ecom/d.php';


            break;
        case 3 : include_once 'ecom/cart.php';


            break;
        case 4 : include_once 'ecom/final.php';


            break;

        default:
            break;
    }
}


?>

<script>
$(".add-cart").click(function(event){
   let item = event.target.id;
  let id = '#'+ item;
  //alert($(id).data('price'));
  //alert("#item2")
});


</script>