<?php
class WordFetcher
{

    public static function gateKeeper($user)
    {
        global $link;
        $sql = "select id from taken where user = '$user'";
        return mysqli_num_rows($link->query($sql));
    }

    public static function save($word, $user, $score)
    {
        global $link;
        $link->query("insert into prelim(user,word,score)value('$user','$word','$score')");
        return false;
    }

    public static function writeTaken($user, $wid)
    {
        global $link;

        $sql = "insert into taken(user,wid)values('$user','$wid')";
        $link->query($sql);
    }





    public static function check($user)
    {
        global $link;
        $data = [];
        $sql = "select wid from taken where user = '$user'";
        $result = $link->query($sql);

        return mysqli_fetch_assoc($result);
    }

    public static function fetch($user)
    {
        global $link;


        $sql = "select id,path from practice order by rand() limit 1";
        $result = $link->query($sql);







        $data = [];


        $etap = mysqli_fetch_assoc($result);
        $data['counter'] = self::gateKeeper($user);
        $data['id'] = $etap['id'];
        $data['path'] = $etap['path'];
        $data['time'] = $_SERVER['REQUEST_TIME'];
        $data['pik'] = $etap['id'];
        //$data['taken'] = $taken;
        //$data['wordpool'] = $wordPool;
        return $data;
    }

    public static function grader($id, $word, $user)
    {
        global $link;
        $ida = $link->query("select word from practice where id = '$id' limit 1");
        $result = mysqli_fetch_assoc($ida);

        $word1 = strtoupper(trim($result['word']));

        $word2 = strtoupper(trim($word));
        $dh = strcmp($word1, $word2);
        $data = [];
        if ($dh == 0) {
            $score = 0;
            $data['type'] = 0;
            $data['msg'] = 'Correct';
        } else {
            $score = 1;
            $data['type'] = 1;
            $data['msg'] = 'Incorrect';
        }



        //self::save($word, $user, $score);



        return json_encode($data);
    }

    public static function score($user)
    {
        global $link;
        $sql = "select score from prelim where user = '$user' and score = 0";
        $result = $link->query($sql) or die(mysqli_error($link));
        echo mysqli_num_rows($result);
    }

    public static function attemped($user)
    {
        global $link;
        $sql = $link->query("select id from prelim where user = '$user'");
        echo mysqli_num_rows($sql);
    }
}

if (isset($_GET['slug'])) {

    // if(WordFetcher::gateKeeper($_SESSION['raws']['email']) > 14){
    //     $exhausted = [];
    //     $exhausted['error'] = 'You\'ve completed your Preliminary';
    //     echo json_encode($exhausted);
    // } else {

    // }

    echo json_encode(WordFetcher::fetch($_SESSION['raws']['email']));
}

if (isset($_POST['dave']) && isset($_GET['truestynm'])) {
    header('Content-Type: application/json');
    $vlader = WordFetcher::grader(intval($_POST['id']), strtoupper(filter_input(INPUT_POST, 'ans', FILTER_SANITIZE_STRING)), $_SESSION['raws']['email']);
    echo $vlader;
}



//total score
if (isset($_GET['isa'])) {
    WordFetcher::score($_SESSION['raws']['email']);
}
//attempted
if (isset($_GET['isas'])) {
    WordFetcher::attemped($_SESSION['raws']['email']);
}
