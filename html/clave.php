<?php
if (empty($_GET['t'])) {
    header("Location:https://blavitch.com?utm=" . token());
}
Inaki::head("Set new password");
class Reset
{
    public static function saveNewPassword($id, $password)
    {
        global $link;
        $hashed =  password_hash($password, PASSWORD_BCRYPT);
        $sql = $link->query("update users set password = '$hashed' where id = '$id' limit 1") or die(mysqli_error($link));

        if ($sql) {
            echo Inaki::alertSuccess('Password reset successful, <a href="https://metrobee.org.ng/login">login to continue</a>');
        }
    }
}
?>

<body>
    <div class="body_wrapper">
        <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em" data-sec='<?= time(); ?>'>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 list-group-item">
                        <form id="atlas" data-forge="<?php echo token();  ?>" action="#" method="post" accept-charset="utf-8">
                            <article style="padding-top: 3em; padding-bottom: 3em">
                                <?php
                                if (isset($_POST['ci'])) {

                                    if ($_POST['p1'] === $_POST['p2']) {
                                        Reset::saveNewPassword(intval($_GET['t']), $_POST['p1']);
                                    } else {
                                        echo Inaki::alertError("Password do not match");
                                    }
                                }



                                ?>


                                <h5 class="text-center">Set new password </h5><br />
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" required focus name="p1" />
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" required focus name="p2" />
                                </div>



                                <button id="xta" name="ci" type="submit" class="btn mbg w-100"><i class="fa fa-check"></i> Set new Password</button>


                                <br />

                                <br />
                                <p><a href="<?= Inaki::path() ?>login">I remember my password</a></p>



                            </article>

                        </form>
                    </div>
                </div>
            </div>
        </section>


</body>

</html>