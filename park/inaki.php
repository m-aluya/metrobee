<?php
ini_set("zlib.output_compression", 1);
session_start();
include_once 'lib/airplay.php';

try {
    //$link = new mysqli("localhost", "metrobeeorg", "5sgh763NQftEyq9", "metrobeeorg_lark");
    $link = new mysqli("127.0.0.1", "root", "", "metrobee");
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
}

error_reporting(0);
//$link = new mysqli("localhost","root","","mb") or die(mysqli_error($link));
class Inaki
{
    public static $anchor = 'agrabbah';

    public static function path()
    {
        //return '/mb1/';
        return 'http://localhost:5000/';
    }

    public static function render($pathtofile)
    {
        include_once $pathtofile . '.php';

        return FALSE;
    }

    public static function app_name()
    {
        echo ucwords('MetroBee');
    }

    public static function email()
    {
        echo 'hello@mavericklegalservices.com';
    }



    public static function innakki()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
        $uri = '/' . trim($uri, '/');
        return strtolower($uri);
    }

    public static function head($title)
    {
        include_once 'partials/head.php';
    }
    public static function navbar()
    {
        include_once 'partials/nav.php';
    }

    public static function footer()
    {
        include_once 'partials/footer.php';
    }

    public static function lognav()
    {
        include_once 'partials/userloggedNav.php';
    }

    public static function orgnav()
    {
        include_once 'partials/orgnav.php';
    }

    public static function logout()
    {
        session_destroy();
        header("Location:" . Inaki::path());
    }

    public static function isAuthenticated($anchor)
    {
        if (empty($_SESSION[$anchor])) {
            Inaki::logout();
        };
    }


    public static function refcode($userid)
    {
        $arbit = 9814;
        return $arbit . $userid;
    }





    public static function author()
    {
        return '@applever';
    }





    public static function alertSuccess($alert)
    {
        return '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">' . $alert . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';;
    }
    public static function alertError($alert)
    {
        return '<div class="alert alert-danger text-center alert-dismissible fade show"  role="alert">' . $alert . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';;
    }

    public static function deleteItem($id, $table)
    {
        global $link;
        $sql = $link->query("delete from {$table} where id = '$id' limit 1");
        if ($sql) {
            echo self::alertSuccess("Delete successful");
        } else {
            self::alertError("Somethin went wrong, please try again");
        }
    }
}



//user's ip address
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

//token genrator
function token($length = 32)
{
    // Create random token
    $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678930_';

    $max = strlen($string) - 1;

    $token = '';

    for ($i = 0; $i < $length; $i++) {
        $token .= $string[mt_rand(0, $max)];
    }

    return $token;
}


class Login
{
    public static function flux_login($username, $password)
    {
        global $link;

        $sql = "select * from admin where email = '$username' and password = '$password'";
        $result = $link->query($sql);
        if (mysqli_num_rows($result) > 0) {
            $drax = mysqli_fetch_assoc($result);
            session_regenerate_id();
            unset($drax['password']);

            $_SESSION['regmail'] = $drax['email'];
            $_SESSION[Inaki::$anchor] = $drax;
            header("Location:" . Inaki::path() . 'console?' . token());
        } else {
            header("Location:" . Inaki::path() . 'edge?er=' . urlencode('incorrect login deails, please try again'));
        }
    }
}
