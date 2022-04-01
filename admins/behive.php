<h3 class="text-center">Study Materials</h3>

<div class="row" style="margin-top: 4em">
   <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upload</h6>
                 </div>
                <!-- Card Body -->
                <div class="card-body">
                   <form method="POST" action="#" enctype="multipart/form-data">
                       <?php
 function saveUpload($name,$path){
     global $link;
     $sql = "insert into files(name,path)values('$name','$path')";
     $result = $link->query($sql);
     
 }                      
                       
                       
                       
if(isset($_POST['bgh'])){
    if(!empty($_FILES['uploaded_file']))
  {
    $path = "bcf4c/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        saveUpload($_POST['label'], $path);
      echo Inaki::alertSuccess("The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded");
    } else{
        echo Inaki::alertError("There was an error uploading the file, please try again!");
    }
  }
}
  

?>
                         
           <div class="form-group">
              
               <input type="text" name="label" placeholder="Label" required class="form-control" />
  </div>                    
                       
          <div class="form-group">
              
              <input type="file" name="uploaded_file" multiple class="form-control-file" id="exampleFormControlFile1">
  </div>
                         
                         <div class="form-group">
                             <button type="submit" name="bgh" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                         </div>                    
                         
                         
          </form>
                </div>
              </div>
            </div>
    <div class="col-xl-6 col-lg-6">
        <?php
        
        function agrax(){
            global $link;
            $sql = "select * from files";
            $result = $link->query($sql);
            $counter = 1;
            while ($row = mysqli_fetch_array($result)) {
                  echo ' <tr>
    <td>'.$counter++  .'</td>
    <td>'. ucfirst($row['name']).' </td>
    <td>'.$row['downloads'] .' </td>
  </tr>';
            }
        }
        
        
        
        
        ?>
        
   <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Study materials download history</h6>
                 </div>
                <!-- Card Body -->
                <div class="card-body">      
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <tr>
      <th>S/N</th>
      <th>Name</th>
      <th>Downloads</th>
  </tr>
  <?php agrax();  ?>
 
</table>             
     </div>
              </div>      
    </div>
    
    
</div>







