<?php
include_once 'lib/airplay.php';
class Stackly
{
    public static function countReffered($refid)
    {
        global $link;
        $sql = "select id from users where ref = '$refid' and paid = 1";
        return mysqli_num_rows($link->query($sql));
    }





    public static function register($firstname, $lastname, $gender, $stateorigin, $phone, $schname, $department, $level, $email, $password, $ref)
    {
        global $link;
        $check = $link->query("select id from users where email = '$email'");
        if (mysqli_num_rows($check) > 0) {
            echo "<div class='alert alert-danger text-center'>This email address has been used on another account</div>";
        } else {
            $tk = self::countReffered($ref);


            if (in_array($tk, range(1, 10))) {
                $amount = 200;
            } elseif (in_array($tk, range(11, 20))) {
                $amount = 300;
            } elseif (in_array($tk, range(21, 30))) {
                $amount = 400;
            } elseif (in_array($tk, range(31, 40))) {
                $amount = 500;
            } else {
                $amount = 500;
            }


            $hased = password_hash($password, PASSWORD_BCRYPT);
            $sql = $link->prepare("insert into users(firstname,lastname,gender,sor,phone,school,department,level,email,password,ref,amount)values(?,?,?,?,?,?,?,?,?,?,?,?)");
            $sql->bind_param("sssssssssssi", $firstname, $lastname, $gender, $stateorigin, $phone, $schname, $department, $level, $email, $hased, $ref, $amount);

            if ($sql->execute()) {
                $_SESSION['regmail'] = $email;
                $_SESSION['regpass'] = $password;
                echo '<div class="alert alert-success text-center">Your account has been created, <a href="' . Inaki::path() . 'payment/new/session">Click here to continue</a> to continue </div>';
            } else {
                echo '<div class="alert alert-danger text-center">OOps, something went wrong </div>';
            }
        }
    }
}



if (isset($_POST['facade']) && !empty($_GET['clone']) && $_POST['facade'] === $_GET['clone']) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        echo '<div class="alert alert-danger text-center">Invalid email address</div>';
    } else {
        if (
            !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['gender']) && !empty($_POST['stateorigin']) && !empty($_POST['phone']) &&
            !empty($_POST['schname']) && !empty($_POST['department']) && !empty($_POST['level']) && !empty($_POST['email']) && !empty($_POST['password'])
        ) {

            $ref = intval(substr($_POST['ref'], 4));
            //echo '<div class="alert alert-danger text-center"> Registration failed</div>';
            Stackly::register(
                ucwords(filter_input(INPUT_POST, 'firstname', FILTER_DEFAULT)),
                ucwords(filter_input(INPUT_POST, 'lastname', FILTER_DEFAULT)),
                filter_input(INPUT_POST, 'gender', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'stateorigin', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'phone', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'schname', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'department', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'level', FILTER_DEFAULT),
                filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
                $_POST['password'],
                $ref
            );
        } else {

            echo '<div class="alert alert-danger text-center">Invalid data submitted</div>';
        }
    }
}
