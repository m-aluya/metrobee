<?php
class userEdit{
    public static function User($user){
        global $link;
        $sql = "select * from users where email = '$user'";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            return $result->fetch_assoc();
        }
      
    }
    
  
    
    
    
    public static function editted($userid,$firstname,$lastname,$gender,$stateorigin,$phone,$schname,$department,$level,$email){
        global $link;
        $sql = "update users set firstname= '$firstname',lastname = '$lastname', gender = '$gender', sor = '$stateorigin', phone = '$phone',level = '$level',email = '$email' where id = '$userid' limit 1";
    $result= $link->query($sql);
    if($result){
        $_SESSION['raws']['email'] = $email;
        echo '<div class="text-center alert alert-success">Changes saved</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Something went wrong, please try again</div>';
    }
        
    }
    
    
}

$editor = userEdit::User($_SESSION['raws']['email']);
?>
<div class="row" data-keyframe='<?= token() . sha1(time());?>'>
    <div class="col-md-8 offset-md-2 col-sm-12 col-lg-8 offset-lg-2" style="margin-top: 4em; margin-bottom: 4em">
      
        
<div class="">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit your profile</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body" style="padding-bottom: 2em">
                    <form data-forge="<?php echo token();  ?>" id="enroll" role="form" data-toggle="validator" action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <?php
                     
                        
                        if(isset($_POST['slackt']) ){
                          if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['department'])){
                                userEdit::editted($_SESSION['raws']['id'], 
 filter_input(INPUT_POST,'firstname', FILTER_SANITIZE_STRING), 
                           filter_input(INPUT_POST,'lastname', FILTER_SANITIZE_STRING), 
                                   filter_input(INPUT_POST,'gender', FILTER_SANITIZE_STRING),
                                    filter_input(INPUT_POST,'stateorigin', FILTER_SANITIZE_STRING),
                                    filter_input(INPUT_POST,'phone', FILTER_SANITIZE_STRING), 
                                    filter_input(INPUT_POST,'schname', FILTER_SANITIZE_STRING), 
                                    filter_input(INPUT_POST,'department', FILTER_SANITIZE_STRING), 
                                    filter_input(INPUT_POST,'level', FILTER_SANITIZE_STRING), 
                                    filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL));
                          } else {
                          
                              echo '<div class="alert alert-danger text-center">All fields are required</div>';
                          }
                            
                            
                            
                        }
                        
                        ?>
                        
                        
                        <input type="hidden" name="timestamp" value="<?php echo time();  ?>" />           
                        <input type="hidden" name="facade" value="<?php echo token();  ?>" />  
                             <input type="hidden" name="key" value="<?= token() ?>" />                                                                                                   
                  <small>Profile Information </small>
				  <hr />
				  <div class="row">
					<div class="col-md-6">
					  <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						  </div>
                                                    <input required class="form-control"  value="<?= ucwords($editor['firstname']) ?>" placeholder="First Name" name="firstname" type="text">
						</div>
					  </div>
					  </div>  
					 <div class="col-md-6">
					   <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						  </div>
                                                    <input required class="form-control"  value="<?= ucwords($editor['lastname']) ?>" placeholder="Last Name" name="lastname" type="text">
						</div>
					  </div>
					  </div>
					  
                  </div>
				  
				  
				   <div class="row">
					<div class="col-md-5">
					  <div class="form-group input-group-alternative">
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect03"><i class="ni ni-circle-08"></i>&nbsp;&nbsp;Gender</label>
						</div>
						<select required class="custom-select" name="gender" id="inputGroupSelect03">
                                                    <option selected value="<?= ucwords($editor['gender']) ?>"><?= ucwords($editor['gender']) ?></option> 
						<option value="male">Male</option>
						<option value="female">Female</option>
						</select>
						</div>
					  </div>
					  
					 </div> 
					<div class="col-md-7">
					  <div class="form-group input-group-alternative">
						<div class="input-group mb-3">
						<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect02"><i class="ni ni-world-2"></i>&nbsp;&nbsp;Origin State</label>
						</div>
						<select required class="custom-select" name="stateorigin" id="inputGroupSelect02">
                                                    <option value="<?= ucwords($editor['sor']) ?>" selected><?= ucwords($editor['sor']) ?></option> 
						<option value="Abuja FCT">Abuja FCT</option>
                                                        <option value="Abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
                                                        <option value="Delta">Delta</option>
                                                        <option value="Ebonyi">Ebonyi</option>
                                                        <option value="Edo">Edo</option>
                                                        <option value="Ekiti">Ekiti</option>
                                                        <option value="Enugu">Enugu</option>
                                                        <option value="Gombe">Gombe</option>
                                                        <option value="Imo">Imo</option>
                                                        <option value="Jigawa">Jigawa</option>
                                                        <option value="Kaduna">Kaduna</option>
                                                        <option value="Kano">Kano</option>
                                                        <option value="Katsina">Katsina</option>
                                                        <option value="Kebbi">Kebbi</option>
                                                        <option value="Kogi">Kogi</option>
                                                        <option value="Kwara">Kwara</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Nassarawa">Nassarawa</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Ogun">Ogun</option>
                                                        <option value="Ondo">Ondo</option>
                                                        <option value="Osun">Osun</option>
                                                        <option value="Oyo">Oyo</option>
                                                        <option value="Plateau">Plateau</option>
                                                        <option value="Rivers">Rivers</option>
                                                        <option value="Sokoto">Sokoto</option>
                                                        <option value="Taraba">Taraba</option>
                                                        <option value="Yobe">Yobe</option>
                                                        <option value="Zamfara">Zamfara</option>
						</select>
						</div>
					  </div>
					  
					 </div>  
					  
					  
                  </div>
				  
                  
                  
				  
				 
				 
				   
<br />
				  <small>Contact Details</small>
				  <hr />
				  
				   <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
						  </div>
						  <input data-minlength="11" data-maxlength="11" class="form-control" placeholder="Phone" value="<?= $editor['phone'] ?>" name="phone" type="text">
						</div>
					  </div>
					  
<br />
				  <small>School Information</small>
				  <hr />
					  <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
						  </div>
                                                    <input required class="form-control" value="<?= $editor['school'] ?>" placeholder="Name of School" name="schname" type="text">
						</div>
					  </div>
					  <div class="row">
					  <div class="col-md-8">
					    <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-address-card-o"></i></span>
						  </div>
						  <input class="form-control" value="<?= $editor['department'] ?>" placeholder="Department" name="department" type="text">
						</div>
					  </div>
					  </div>
					  <div class="col-md-4">
						  <div class="form-group input-group-alternative">
							<div class="input-group mb-3">
							<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01"><i class="ni ni-books"></i>&nbsp;&nbsp;Level</label>
							</div>
							<select class="custom-select" name="level" id="inputGroupSelect01">
                                                            <option value="<?= $editor['level'] ?>" selected><?= $editor['level'] ?></option> 
							<option value="100">100</option>
							<option value="200">200</option>
							<option value="300">300</option>
							<option value="400">400</option>
							<option value="500">500</option>
							<option value="600">600</option>
							</select>
							</div>
						  </div> 
					 </div>
					 </div>
					
					   
					  					  
<br />
				  <small>Login Information</small>
				  <hr />
					  <div class="form-group">
						<div class="input-group input-group-alternative mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
						  </div>
						  <input data-error="That email address is invalid" required class="form-control" value="<?= $editor['email'] ?>" placeholder="Email address" name="email" type="text">
						
                                                </div>
                                              <div class="help-block with-errors text-center text-danger"></div>
					  </div>
		
                  <div class="text-center">
                      <button name="slackt" type="submit" class="btn btn-primary" style="margin-bottom: 2em"><i class="fa fa-long-arrow-right"></i> Save changes</button>
                  </div>
                </form>
            
            
                </div>
              </div>
            </div>
        
    </div>
      

</div>