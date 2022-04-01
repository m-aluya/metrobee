<?php
class Profile{
    public static function profiler($user){
        global $link;
        $sql = "select * from users where email = '$user'";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }
    }
}
$userProfile = Profile::profiler($_SESSION['raws']['email']);
?>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User profile</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Name</td>
                      <td><?= ucwords($userProfile['firstname'] .' '. $userProfile['lastname']) ?></td>
                  
                      
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td><?= ucwords($userProfile['gender']) ?></td>
                  </tr>
                  <tr>
                      <td>State of origin</td>
                      <td><?= ucwords($userProfile['sor']) ?></td>
                  </tr>
                  <tr>
                      <td>Phone</td>
                      <td><?= ucwords($userProfile['phone']) ?></td>
                  </tr>
                  
                  <tr>
                      <td>State of origin</td>
                      <td><?= ucwords($userProfile['school']) ?></td>
                  </tr>
                  
                  <tr>
                      <td>Department</td>
                      <td><?= ucwords($userProfile['department']) ?></td>
                  </tr>
                  
                  <tr>
                      <td>Level</td>
                      <td><?= $userProfile['level'] ?></td>
                  </tr>
                  <tr>
                      <td>Email Address</td>
                      <td><?= ucwords($userProfile['email']) ?></td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<a href="#" data-toggle="modal" data-target="#rek" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-refresh"></i>
                    </span>
                    <span class="text">Reset your password</span>
                  </a>

<a href="<?= Inaki::path() ?>app/edit/profile"  class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Reset your password</span>
                  </a>  
   


<div class="modal fade" id="rek" tabindex="-1" role="dialog" aria-labelledby="rek" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset your password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" id="user">
              <p id="msg"></p>
              <div class="form-group">
                  <input placeholder="New password" id="kla" type="password" class="form-control inik form-control-user" id="p1" required >
                    </div>
              
              <div class="form-group">
                  <input placeholder="Confirm New password" id="klaa" type="password" class="form-control inik form-control-user" id="p2" required>
                    </div>
              
              <div class="form-check">
                  <input class="form-check-input" onclick="amak()" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Show password
  </label>
</div>
              
              <div class="form-group" style="margin-top: 2em">
      <button class="btn btn-primary" type="submit" name="dk" id="dk">Save Changes</button>
                    </div>            
              
              
          </form>
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function amak() {
  var x = document.getElementById("kla");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
  var k = document.getElementById("klaa");
  if (k.type === "password") {
    k.type = "text";
  } else {
    k.type = "password";
  } 
  
}


$("#p2").keyup(function(){
             if ($("#p1").val() != $("#p2").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","green");
            }
      });




</script>