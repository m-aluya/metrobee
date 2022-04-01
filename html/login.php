<?php
function login($username,$password){
         global $link;
        
        $sql = "select * from users where email = '$username'";
        $result = $link->query($sql);
       
        if(mysqli_num_rows($result) > 0 ){
            $drax = mysqli_fetch_assoc($result);
            
        
if (password_verify($password, $drax['password'])){
  if((int)$drax['acc'] === 1){
               $_SESSION['aff'] = $drax;
     header("Location:".Inaki::path().'desk/'. strtoupper(token())); 
  } else {
      
        if(intval($drax['paid']) == 0){
        $_SESSION['regmail'] = $username;
        $_SESSION['regpass'] = $password;
        header("Location:".Inaki::path().'payment/new/retry/encore?'. strtoupper(token()) );
    } else {
           unset($drax['password']);
    session_regenerate_id();
              
              $_SESSION['raws'] = $drax;
     header("Location:".Inaki::path().'app'); 
        
    }
  }
    
    
 
    
} else {
    header("Location:".Inaki::path().'login?er='.urlencode('incorrect login deails, please try again'));
}
              
              
           
        }
 else {
     header("Location:".Inaki::path().'login?er='.urlencode('incorrect login details, please try again'));
     
 }
    }
    


if(isset($_POST['login']) ){
    login(filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL), $_POST['password']);
    
}    
    
Inaki::head("login");
?>
<body>
   
<div class="body_wrapper">
    <?= Inaki::navbar(); ?>
    <section class="login_area" style="margin-top: 12em; margin-bottom: 4em">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 list-group-item">
                        <form action="<?= Inaki::path();?>login" class="login-form mt_60" id="ddf" method="post" accept-charset="utf-8" style="margin-bottom: 3em">
                            <?php
                            if(isset($_GET['er'])){
                                echo '<div class="alert alert-danger text-center">'. urldecode($_GET['er']).' </div>';
                            }
                            
                            
                            ?>
                                <div class="form-group">
                                    <label class="f_p text_c f_400">Email Address</label>
                                    <input name="email" type="text" placeholder="email address" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="f_p text_c f_400">Password</label>
                                    <input name="password" type="password" class="form-control" required placeholder="******">
                                </div>
                            <input type="hidden" name="login" value="<?= token(); ?>"/>
                                <div class="extra">
                                    <div class="checkbox remember">
                                        <label>
                                            <input type="checkbox"> Keep me Signed in
                                        </label>
                                    </div>
                                    <!--//check-box-->
                                    <div class="forgotten-password">
                                        <a href="<?= Inaki::path() ?>reset/password">Forgot Password?</a>
                                    </div>
                                </div>
                            <button name="login" type="submit" class="btn mbg long-btn">Log in</button>
                                <div class="alter-login text-center mt_30">
                                    New user? <a class="login-link" href="<?= Inaki::path() ?>enroll">Enroll now</a>
                                </div>
                            </form>
                    </div>
                   
                </div>
            </div>
        </section>

       <?= Inaki::footer(); ?>
    
</body>


</html>