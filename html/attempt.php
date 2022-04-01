<?php
if (empty($_SESSION['regmail'])) {
  session_destroy();
  header("Location:" . Inaki::path() . 'signup');
}
function savePayment($user, $amount, $data, $ref)
{
  global $link;
  $ref = time();
  $type = "Registration";
  $sql = "insert into payment(user,amount,type,ref,data)values('$user','$amount','$type', '$ref','$data')";
  $result = $link->query($sql) or die(mysqli_error($link));
  $link->query("update users set paid = 1 where email = '$user' limit 1") or die(mysqli_error($link));
}
Inaki::head("enrol");
?>

<body>

  <div class="body_wrapper">
    <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em" data-sec='<?= time(); ?>'>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 list-group-item">


            <article class="text-center" style="padding-top: 3em; padding-bottom: 3em">
              <?php


              if (isset($_GET['trxref']) && !empty($_GET['reference'])) {
                Validatepayment(mysqli_real_escape_string($link, $_GET['trxref']));
              } else { ?>


                <br />Your account has been created,<br /> Click the button below to make payment<br /> <br />
                <h3><b>&#x20A6;1,000</b></h3>

                <p>
                  <svg enable-background="new 0 0 611.996 611.996" width="64px" version="1.1" viewBox="0 0 612 612" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">


                    <path d="m588.63 113.19-374.82-79.322c-15.858-3.355-31.576 6.876-34.931 22.734l-7.121 45.762 432.48 91.519 7.121-45.762c3.355-15.852-6.87-31.575-22.728-34.931z" />
                    <path d="m431.01 203.59c-4.378-15.766-20.854-25.085-36.615-20.714l-71.154 19.753-167.74-35.5-18.448 87.165-115.26 31.992c-15.76 4.372-25.079 20.848-20.708 36.609l64.958 234.08c4.378 15.76 20.855 25.085 36.615 20.708l372.61-103.4c15.76-4.378 25.079-20.848 20.708-36.615l-11.15-40.184 41.789 8.835c15.858 3.361 31.576-6.87 34.931-22.728l26.439-124.94-150.53-31.853-6.441-23.206zm43.031 118.97 9.215-43.552c1.384-6.521 7.85-10.727 14.37-9.35l43.552 9.221c6.527 1.384 10.733 7.843 9.356 14.37l-9.215 43.552c-1.384 6.521-7.849 10.733-14.37 9.35l-43.552-9.215c-6.533-1.389-10.74-7.855-9.356-14.376zm-445.77-12.913 103.12-28.606 243.3-67.517 26.181-7.274c0.478-0.129 0.955-0.19 1.421-0.19 2.1 0 4.611 1.378 5.345 4.017l3.074 11.07 9.631 34.704-383.19 106.34-12.705-45.768c-0.796-2.872 0.956-5.976 3.827-6.772zm444.33 134.5c0.49 1.776-0.024 3.245-0.545 4.164-0.514 0.918-1.506 2.119-3.282 2.608l-372.6 103.4c-0.471 0.129-0.955 0.196-1.421 0.196-2.1 0-4.611-1.384-5.345-4.023l-37.888-136.53 383.19-106.34 23.371 84.208 14.523 52.32z" />
                    <path d="m156.38 453.48c-1.788-6.429-8.499-10.225-14.928-8.443l-43.515 12.08c-6.423 1.782-10.225 8.499-8.437 14.928l12.074 43.509c1.788 6.429 8.499 10.225 14.928 8.437l43.515-12.074c6.429-1.782 10.225-8.499 8.443-14.928l-12.08-43.509z" />


                  </svg>
                  <br /><br />

                <form>
                  <script src="https://js.paystack.co/v1/inline.js"></script>

                  <button class="btn btn-primary" type="button" onclick="payWithPaystack()"><i class="fa fa-long-arrow-right"></i> Make payment now </button>
                </form>



                <script>
                  // pk_test_4e34560a9e40ce0c5f5759a1220bda654e57a496
                  //pk_live_21266c01f84372304633682e423bc2d6d7536767
                  function payWithPaystack() {
                    var handler = PaystackPop.setup({
                      key: 'pk_test_4e34560a9e40ce0c5f5759a1220bda654e57a496',
                      email: '<?= $_SESSION['regmail'] ?>',
                      amount: 100000,
                      currency: "NGN",
                      ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                      metadata: {
                        custom_fields: [{
                          display_name: "<?= $_SESSION['regtel'] ?>",
                          variable_name: "<?= $_SESSION['regtel'] ?>",
                          value: "MB_reg<?= token(); ?>"
                        }]
                      },
                      callback: function(response) {
                        //alert('success. transaction ref is ' + response.reference);
                        caveRun(response);
                        //console.log(response);
                      },
                      onClose: function() {
                        alert('window closed');
                      }
                    });
                    handler.openIframe();
                  }
                </script>



                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                </p>




              <?php }

              if (isset($_GET['rex'])) {
                savePayment($_SESSION['regmail'], 1000, mysqli_real_escape_string($link, $_GET['rex']), $_GET['data']);
              }



              ?>


              <script>
                function caveRun(resp) {
                  $.ajax({
                    type: 'GET',
                    url: '<?= Inaki::path(); ?>payment/new/session?rex=' + resp,
                    success: function() {
                      console.log(resp);
                      $("#koglo").modal('show');
                    }

                  });
                  return false;



                }
              </script>

            </article>


          </div>
        </div>
      </div>
    </section>


    <div class="modal" tabindex="-1" role="dialog" id="koglo">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= Inaki::path(); ?>login" method="post" accept-charset="utf-8">
              <div class="alert alert-success text-center">Payment has been confirmed, login to your dashboard</div>


              <div class="form-group">
                <label class="f_p text_c f_400">Email Address</label>
                <input autocomplete name="email" type="text" value="<?= $_SESSION['regmail']; ?>" placeholder="email address" required class="form-control">
              </div>
              <div class="form-group">
                <label class="f_p text_c f_400">Password</label>
                <input autocomplete name="password" type="password" class="form-control" required placeholder="******">
              </div>
              <input type="hidden" name="login" value="<?= token(); ?>" />
              <button name="loginx" type="submit" class="btn mbg long-btn">Log in</button>

            </form>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>




</body>

</html>