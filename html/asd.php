<?php
if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
 Login::flux_login(mysqli_real_escape_string($link, $_POST['email']), $_POST['password']);
}
Inaki::head("Admin cave");
?>


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col-md-6 offset-md-3">
                  <div class="p-5" style="padding: 2em">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <form action="#" class="user" data-ref="<?= token(); ?>" method="POST">
                        <?php
                        
                        if(isset($_GET['er'])){
                           echo Inaki::alertError(strip_tags(urldecode($_GET['er'])));
                        }
                        
                        
                        
                        
                        
                        ?>
                        
                        
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                        <input name="token" type="hidden" value="<?= token(); ?>"/>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input name="key_auth" type="hidden" value="<?= token(); ?>"/>
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                      <button type="submit" name="login" class="btn btn_three long-btn btn-user btn-block">
                      Login
                    </button>
                   
                   
                  </form>
                 
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</body>

</html>
