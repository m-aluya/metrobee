<?php
// require 'lib/airplay.php';
class Wd
{


    public static function check($word, $table)
    {
        global $link;
        $sql = $link->query("select word from $table where word = '$word'");
        if (mysqli_num_rows($sql) > 0) {
            return 1;
        } else {

            return 0;
        }
    }







    public static function saveOneWord($word, $path, $table)
    {
        global $link;
        if (self::check($word, $table) == 1) {
            echo Inaki::alertError("This word (<strong>" . strtoupper($word) . "</strong>) already exist");
        } else {
            $sql = $link->query("insert into $table(word,path)values('$word','$path')");
            if ($sql) {
                echo Inaki::alertSuccess("Word (<strong>" . strtoupper($word) . "</strong>) saved successfully");
            } else {
                echo Inaki::alertError("Word (<strong>" . strtoupper($word) . "</strong>) not saved successfully");
            }
            // $sql = $link->prepare("insert into $table(word,path)value(?,?)");
            // $sql->bind_param("ss", $word, $path);
            // if ($sql->execute() or die(mysqli_error($link))) {
            //     //echo Inaki::alertSuccess('Word saved');
            // } else {
            //     echo Inaki::alertError("OOps,you entered a nasty word that caused me to malfunction. Please try again with a more cleaner word");
            // }
        }
    }

    public static function wordList($table)
    {

        global $link;
        $sql = $link->query("select id,word,path from $table");
        if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)) {
                echo '<tr><td>' . strtoupper($row['word']) . '</td> <td><a data-ridge="' . strtoupper($row['word']) . '" class="edited"  href="#" id="sjfsfh' . token()  . $row['id'] . '"  data-edit="' . $row['id'] . '">Edit</a></td>  <td><a onclick="return confirm("Are you sure?")" class="text-danger"  href="' . Inaki::path() . 'console/word?' . time() . '&payload=' . $row['path'] . '&type=' . $table . '&delete=' . $row['id'] . '">Delete</a></td></tr>';
            }
        } else {
            echo Inaki::alertError("You\ve not added any word");
        }
    }




    public static function deleteWord($id, $table)
    {
        global $link;

        $sql = $link->query("delete from $table where id = '$id' limit 1");

        if ($sql) {
            echo '<div class="modal" tabindex="-1" role="dialog" id="ddted">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class=" text-center">Success, word deleted</p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
        }
    }


    public static function EditWord($word, $id, $table)
    {
        global $link;
        $ssa = $link->query("update $table set word = '$word' where id = '$id' limit 1");
        if ($ssa) {
            echo Inaki::alertSuccess("success");
        } else {
            echo Inaki::alertError("");
        }
    }
}



?>

<?php
if (isset($_SESSION[Inaki::$anchor]) && !empty($_GET['delete'])) {

    Wd::deleteWord($_GET['delete'], $_GET['type']);
    unlink(trim($_GET['payload']));
}

?>

<h3 class="text-center">Add new words</h3>
<?php
if (isset($_POST['tga']) && !empty($_POST['editer'])) {

    Wd::EditWord(strtoupper(mysqli_real_escape_string($link, $_POST['editer'])), intval($_POST['fg']), $_POST['type']);
}

?>
<div class="row" style="margin-top: 4em">
    <div class="col-xl-6 col-lg-6 mx-auto">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add multiple files</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form method="POST" action="#" enctype="multipart/form-data">
                    <?php
                    // Check if form was submited 
                    if (isset($_POST['savewordbulk'])) {

                        // Configure upload directory and allowed file types 
                        $upload_dir = 'bcf4c/';
                        $allowed_types = array('mp3');

                        // Define maxsize for files i.e 2MB 
                        $maxsize = 2 * 1024 * 1024;

                        // Checks if user sent an empty form  
                        if (!empty(array_filter($_FILES['files']['name']))) {

                            // Loop through each file in files[] array 
                            foreach ($_FILES['files']['tmp_name'] as $key => $value) {

                                $file_tmpname = $_FILES['files']['tmp_name'][$key];
                                $file_name = $_FILES['files']['name'][$key];
                                $file_size = $_FILES['files']['size'][$key];
                                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                                // Set upload file path 
                                $filepath = $upload_dir . $file_name;

                                // Check file type is allowed or not 
                                if (in_array(strtolower($file_ext), $allowed_types)) {

                                    // Verify file size - 2MB max  
                                    if ($file_size > $maxsize)
                                        echo "<div class='text-danger'>Error: File size is larger than the allowed limit.</div>";

                                    // If file with name already exist then append time in 
                                    // front of name of the file to avoid overwriting of file 
                                    if (file_exists($filepath)) {
                                        $newfilename = sha1(token() . basename($file_name, ".mp3") . time()) . '.' . $file_ext;
                                        $filepath = $upload_dir . time() . $newfilename;
                                        //echo $filepath . '<br/>';

                                        $word = strtoupper(basename($file_name, ".mp3"));
                                        if (move_uploaded_file($file_tmpname, $filepath)) {
                                            //$dbpath = Inaki::path().$filepath;

                                            Wd::saveOneWord($word, $filepath, $_POST['type']);
                                            // echo "<span class='small text-success'>" . basename($file_name, ".mp3") . " successfully uploaded</span><br />";
                                        } else {
                                            echo "<span class='small text-danger'>Error uploading {$file_name} </span><br />";
                                        }
                                    } else {

                                        if (move_uploaded_file($file_tmpname, $filepath)) {
                                            echo "{$file_name} successfully uploaded <br />";
                                        } else {
                                            echo "Error uploading {$file_name} <br />";
                                        }
                                    }
                                } else {

                                    // If file extention not valid 
                                    echo "Error uploading {$file_name} ";
                                    echo "({$file_ext} file type is not allowed)<br / >";
                                }
                            }
                        } else {

                            // If no files selected 
                            echo "No files selected.";
                        }
                    }
                    ?>
                    <div class="form-group">
                        <label class="mb-0">Select type</label>
                        <select name="type" class="custom-select" id="type">
                            <option value="practice">Practice</option>
                            <option value="wordmap">Preliminary</option>
                            <option value="regionals">Regionals</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="small">Hold down select key to add multiple files</label>
                        <input accept="audio/mp3,audio/*;capture=microphone" type="file" name="files[]" multiple class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="savewordbulk" class="btn btn-primary px-5"><i class="fa fa-check"></i> Save</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


<div class="row" style="margin-top: 5em">

    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow p-3 bg-white rounded">
                <h2>Preliminary [<?= mysqli_fetch_array($link->query("select count(id) as np from wordmap"))['np'] ?>]</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Word</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            Wd::wordList('wordmap');

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6 shadow p-3 bg-white rounded">
                <h2>Regionals [<?= mysqli_fetch_array($link->query("select count(id) as np from regionals"))['np'] ?>]</h2>
                <div class="table-responsive">
                    <table class="table table-bordered dataTable daTable" style="width:100%" id="myTable">
                        <thead>
                            <tr>
                                <th>Word</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            Wd::wordList('regionals');

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5 shadow p-3 rounded bg-white">
                <h2>Practice [<?= mysqli_fetch_array($link->query("select count(id) as np from practice"))['np'] ?>]</h2>
                <div class="table-responsive">
                    <table class="table table-bordered dataTable daTable" style="width:100%" id="myTable">
                        <thead>
                            <tr>
                                <th>Word</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            Wd::wordList('practice');

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</div>






<div class="modal" tabindex="-1" role="dialog" id="vlad">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit a word</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="#">
                    <div class="form-group">
                        <input id="ratef" type="text" name="editer" required class="form-control text-uppercase" />
                        <input id="fg" type="hidden" name="fg" />
                    </div>
                    <button type="submit" name="tga" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>