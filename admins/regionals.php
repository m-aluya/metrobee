<?php
class Preliminary
{
    public static function LimList()
    {
        global $link;
        $sql = "select DISTINCT user from regionals_score";
        $result = $link->query($sql);
        //echo mysqli_num_rows($result);
        $count = 1;
        while ($row = mysqli_fetch_array($result)) {
            $user = $row['user'];
            $score = $link->query("select score from regionals_score where user = '$user' and score = 0");
            $point = mysqli_num_rows($score);
            echo '<tr><td>' . $count++ . '</td> <td>' . $row['user'] . '</td><td>' . $point . '</td> <td><a href="' . Inaki::path() . 'console/prelim?' . time() . sha1(time()) . '&restart=' . $row['user'] . '"  class="btn btn-primary px-5 btn-sm">Restart</a></td></tr>';
        }
    }
}

if (isset($_GET['restart'])) {
    $user = $_GET['restart'];
    $rst = $link->query("delete from regionals_score where user = '$user'");
    echo Inaki::alertSuccess('Restart Successful');
}


?>


<h1 class="h3 mb-2 text-gray-800">Regionals</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Regionals Results</h6>
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