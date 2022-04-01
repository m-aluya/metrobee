
<div class="card">
  <div class="card-body">
    <form action="#" method="POST">
        <h4 class="text-center">Manually verify user's account</h4>
        <p class="alert alert-warning text-center">Ensure that payment was made before proceeding with this operation</p>
        
        <?php
if(isset($_POST['bvnx'])){
    $refc = time();
$user = $_POST['user'];
$amount = $_POST['amount'];
$type = $_POST['type'];
$sql = "INSERT INTO payment (user, amount, type, ref)
VALUES ('$user', '$amount', '$type', '$refc' )";

if($type ==  'Registration'){
    if ($link->query($sql) === TRUE) {
    $sql_update = "UPDATE users SET paid = 1 WHERE email = '$user'";
    if($link->query($sql_update) === TRUE){
        echo "<div class='alert alert-success text-center'>Payment verified</div>";
    }else{
        //echo "Error: " . $sql_update . "<br>" . $link->error;
    }
    
} else {
    //echo "Error: " . $sql . "<br>" . $link->error;
}
}
elseif ($type == 'Study material') {
   function GetUser($email){
       global $link;
       $query = $link->query("select id,email from users where email = '$email' limit 1");
       return mysqli_fetch_assoc($query);
   }

   $Tres = GetUser($user);
   $tid = $Tres['id'];
   $tuser = $Tres['email'];
   $sd = $link->query("insert into material(userid,email)values('$tid', '$tuser')");
   
   
   if($sd){
        echo "<div class='alert alert-success text-center'>Payment verified</div>";
   }
}




}


?>
        <div class="form-group">
            <label>Email address</label>
            <input class="form-control" name="user" value="" required/>
        </div>
        <div class="form-group">
             <label>Amount paid</label>
              <input class="form-control" name="amount" value="" required/>
        </div>
        <div class="form-group">
             <label>Payment</label>
             <select class="form-control" name="type" required>
            <option value="">-Please select Payment-</option>
            <option value="Registration">Registration</option>
            <option value="Study material">Study Material</option>
        </select>
        </div>

        <input name="bvnx" class="btn btn-primary" type="submit" value="Save" />
    </form>
  </div>
</div>
    

