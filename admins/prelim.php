<?php
class Preliminary {
    public static function LimList(){
        global $link;
        $sql = "select DISTINCT user from prelim";
        $result = $link->query($sql);
        //echo mysqli_num_rows($result);
       $count = 1;
        while ($row = mysqli_fetch_array($result)) {
            $user = $row['user'];
            $score = $link->query("select score from prelim where user = '$user' and score = 0");
           $point = mysqli_num_rows($score);
            echo '<tr><td>'. $count++ .'</td> <td>'.$row['user'].'</td><td>'. $point .'</td>';
            
        }
    }
}




?>


 <h1 class="h3 mb-2 text-gray-800">Preliminary</h1>
          
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Preliminary Results</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                         <th>S/N</th>
                         <th>User</th>
                      <th>Score</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S/N</th>
                         <th>User</th>
                      <th>Score</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   
                     <?php Preliminary::LimList()  ?>
                  </tbody>
                </table>
                  
              </div>
            </div>
          </div>