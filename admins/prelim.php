<?php
class Preliminary
{
  public static function LimList()
  {
    global $link;
    $sql = "select DISTINCT user from prelim";
    $result = $link->query($sql);
    //echo mysqli_num_rows($result);
    $count = 1;
    while ($row = mysqli_fetch_array($result)) {
      $user = $row['user'];
      $score = $link->query("select score from prelim where user = '$user' and score = 0");
      $point = mysqli_num_rows($score);
      echo '<tr><td>' . $count++ . '</td> <td>' . $row['user'] . '</td><td>' . $point . '</td> <td><a href="' . Inaki::path() . 'console/prelim?' . time() . sha1(time()) . '&restart=' . $row['user'] . '"  class="btn btn-primary px-5 btn-sm">Restart</a></td></tr>';
    }
  }
}

if (isset($_GET['restart'])) {
  $user = $_GET['restart'];
  $link->query("delete from prelim where user = '$user'");
  $link->query("delete from taken where user = '$user'");
  echo Inaki::alertSuccess('Restart Successful for the selected user.');
}


?>


<div class="row">
  <div class="col-md-6">
    <h1 class="h3 mb-2 text-gray-800">Preliminary</h1>
  </div>
  <div class="col-md-6 text-right">
    <a class="btn btn-danger px-4" onclick="return confirm('Are you sure you want to do it?')" href="<?= Inaki::path() ?>console/prelim?rs=all">Restart Preliminary</a>
  </div>
</div>

<?php
if (isset($_GET['rs']) && $_GET['rs'] == 'all') {

  $link->query("delete from prelim");
  $link->query("delete from taken");

  echo Inaki::alertSuccess('Restart Successful for all.');
}


?>

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
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>S/N</th>
            <th>User</th>
            <th>Score</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>

          <?php Preliminary::LimList()  ?>
        </tbody>
      </table>

    </div>
  </div>
</div>