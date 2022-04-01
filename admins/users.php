<?php
class Users{
    
    public static function asd($user){
        global $link;
        $recon = $link->query("select amount from payment where user = '$user'  ") or die(mysqli_error($link));
     while ($row1 = mysqli_fetch_array($recon)) {
                     echo '&#x20a6;'. $row1['amount'] .' <br/>'  ; 
                    }
    }

    



    public static function allUsers(){
        
        global $link;
        $sql = "select * from users where acc = 0 order by id desc";
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
                $user = trim($row['email']);
                
                echo ' <tr>
                    <td>'. ucwords($row['id']).' </td>
                    <td>'. ucwords($row['ddt']) .'</td>    
                      <td>'. ucwords($row['firstname'] .' '.$row['lastname'] ).' </td>
                         
                      <td>'. $row['email'].'</td>
                      <td>'.$row['phone'].'</td>
                      <td>'. ucwords($row['school']).'  </td>';
                if(intval($row['paid']) == 1){
                echo '<td class="text-success"> Paid <br/> ';
                 self::asd(trim($row['email']));
                
                        echo '</td>';
                }else {
                    echo '<td class="text-danger"> Not paid </td>'; 
                }
                echo '<td>
                          <a class="dinka text-danger" href="#" id="'.$row['id'].'" data-id="'.$row['id'].'"> <span class="icon text-white-50">
                    </span>Delete</a>
                          
</td>
                    </tr>';
            }
        }
    }
    
  
    
}





if(isset($_POST['lana'])){
    Inaki::deleteItem(intval($_POST['idr']), 'users');
}

?>
          <h1 class="h3 mb-2 text-gray-800">Users</h1>
          
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Metrobee Applicants</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                         <th>S/N</th>
                         <th>Date</th>
                      <th>Name</th>
                     <th>Email</th>
                      <th>Telephone</th>
                      <th>School</th>
                      <th>Payment status</th>
                       <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                         <th>Date</th>
                      <th>Name</th>
                     <th>Email</th>
                      <th>Telephone</th>
                      <th>School</th>
                      <th>Payment status</th>
                       <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   
                     <?php Users::allUsers();  ?>
                  </tbody>
                </table>
                  
              </div>
            </div>
          </div>

          <div class="modal fade" id="vader" tabindex="-1" role="dialog" aria-labelledby="vader" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="#">
              <p class="text-center">You are about deleting an account, this action irreversible.</p>
              <input type="hidden" name="idr" id="idw"/>
              <div class="text-center">
                  <button type="submit" name="lana" class="btn btn-secondary"><i class="fa fa-trash"></i> Delete</button>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    
          <script>
      
          $(document).ready(function() {
    $(".dinka").click(function(event) {
        const vade = event.target.id;
        $("#idw").val(vade);
        
       $("#vader").modal('show');
    });
});
          </script>