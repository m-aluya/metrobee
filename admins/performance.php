 <?php 
 function unpaid(){
     global $link;
     $sql = "select id from users where acc = 0 and paid = 0";
     $result = $link->query($sql);
     $et = mysqli_num_rows($result);
     return $et * 3000;
 }
function sumly(){
    global $link;
    $sql = "select SUM(amount) as xum from payment";
    return mysqli_fetch_assoc($link->query($sql));
}
$df = sumly();
$df1 = intval($df['xum']) + 6000;

$vb = unpaid();
 $indexc = $df1 / $vb;
 
 
 
 
 function premResult(){
     global $link;
     $sql = $link->query("select DISTINCT user from prelim");
     return mysqli_num_rows($sql);
    
 }
 
 
 function Khronos($tabale,$fields){
     global $link;
     $sql = "select ". $fields ." from ". $tabale;
     return mysqli_num_rows($link->query($sql));
 }
 
 
 function unpaidUsers(){
     global $link;
     return mysqli_num_rows($link->query("select id from users where paid = 0"));
 }
 
 ?>
        
<span class="small">Financial</span>

<div class="row">

       
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total paid</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">&#x20A6;<span class="encore"><?= $df1 ?></span></div>
                    </div>
                    <div class="col-auto">
<!--                      <i class="fas fa-calendar fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Unpaid</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">&#x20A6;<span class="encore"><?= unpaid(); ?></span></div>
                    </div>
                    <div class="col-auto">
<!--                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Payment index</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= ceil($indexc) ?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?= ceil($indexc) ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
          </div>

<span class="small">User Count</span>
     <div class="row">

       
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="<?= Inaki::path() ?>console/users/<?= token() ?>">Total registered</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="encore"><?= Khronos('users', 'id') ?></span></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Users that paid nothing</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><span class="encore"><?= unpaidUsers(); ?></span></div>
                    </div>
                    <div class="col-auto">
<!--                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

          

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="<?= Inaki::path() ?>console/prelim/<?= token() ?>">Preliminary Results</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= premResult() ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





<script>
    $.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    });
}



$(".encore").digits();
</script>