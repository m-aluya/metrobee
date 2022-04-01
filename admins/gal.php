<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
                <div class="card-header">
                 Upload photo
                </div>
                <div class="card-body">
                    
               <?php 
if(isset($_POST['save'])){
    $details = $_POST['details'];
                if(!empty($_FILES['uploaded_file'])){
    $path = "box/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        $link->query("insert into gallery(name,details)values('$path','$details')");
      echo Inaki::alertSuccess("The file ".  basename( $_FILES['uploaded_file']['name']). " has been uploaded");
    } else{
        echo Inaki::alertError("There was an error uploading the file, please try again!");
    }
  }   
          
}     
               
               
               
               ?>
                    
                    
                    
                    
                    
              <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <input type="file" name="uploaded_file" required/>
                  </div>
    
   <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <textarea class="form-control" name="details" placeholder="Enter details here ......."></textarea>
  </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>       
        
    </form> 
                </div>
              </div>
        
        
    </div>
    
    
    
    
    <div class="col-md-6">
        <div class="card mb-4">
                <div class="card-header">
                 Upload Video
                </div>
                <div class="card-body">
                    
               <?php 
if(isset($_POST['save'])){
    $details = $_POST['details'];
                if(!empty($_FILES['uploaded_file'])){
    $path = "box/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        $link->query("insert into gallery(name,details)values('$path','$details')");
      echo Inaki::alertSuccess("The file ".  basename( $_FILES['uploaded_file']['name']). " has been uploaded");
    } else{
        echo Inaki::alertError("There was an error uploading the file, please try again!");
    }
  }   
          
}     
               
               
               
               ?>
                    
                    
                    
                    
                    
              <form action="#" method="POST">
                 <?php
            
                 if(isset($_POST['zsaver'])){
                    $vidPath = $_POST['video'];
                    $bv1 = str_replace('watch', 'embed', $vidPath);
                    $bv2 = str_replace('?v=', '/', $bv1);
                    
                     $videoTrue = 1;
                  $vid = $link->query("insert into gallery(name,video)values('$bv2','$videoTrue')") or die(mysqli_errno($link));
                    if($vid){
                        echo Inaki::alertSuccess("Video {$vidPath}     saved");
                    }
                 } else {
                     //echo json_encode($_SERVER);
                 }
                 ?>
    
   <div class="form-group">
    <label for="formGroupExampleInput">Add video</label>
    <input type="text" required  name="video" class="form-control"/>
  </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="zsaver">Save Video</button>
        </div>       
        
    </form> 
                    
                    <div class="alert alert-info">
                        To add video, first upload the video to the MetroBee youtube channel. When video has been uploaded, click on share, then select embed.
                        Copy the code as it is and paste it on the input field above.
                    </div>                
                    
                </div>
              </div>
    </div>
</div>