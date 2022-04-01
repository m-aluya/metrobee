<?php
 header("Access-Control-Allow-Origin: *"); 
 include_once 'park/inaki.php';
 global $routes;
  $anglebar = Inaki::innakki();
    $routes = array();
    $routes = explode('/', filter_var($anglebar,FILTER_SANITIZE_STRING).'/');
function savematerialPayment($userid,$email,$ref,$data){
        global $link;
        $type = "Study material";
        $link->autocommit(FALSE);
        $amount = 2000;
    $sql = "insert into payment (user,amount,type,ref,data) values ('$email','$amount','$type', '$ref','$data')";
    $link->begin_transaction();
    $link->query($sql);
    $link->query("insert into material(userid,email)values('$userid','$email')");
     
    $run = $link->commit();
    if($run){
        echo 'success';
    } else {
    echo mysqli_error($link);    
    }
    }

if(isset($routes[1])){
        switch ($routes[1]) {
            case 'index.php': include_once 'html/homex.php';
                break;
            
            case '': include_once 'html/homex.php';


                break;
                
 case 'gallery': include_once'html/gallery.php';


                break;    
                
      case 'update': include_once 'html/upd.php';
                break;           
            
            case 'payment': include_once 'html/attempt.php';
                break;
            
            
             case 'edge': include_once'html/asd.php';


                break;
           
            case 'console': include_once'html/atom.php';


                break;
            case 'test': include_once 'html/test.php';
                break;
            case 'api': if(isset($_GET['rex']) && !empty($_GET['rex'])){
                                    // Validatepayment(mysqli_real_escape_string($link,$_GET['trxref']));
                                     
                                    savematerialPayment($_SESSION['raws']['id'], $_SESSION['raws']['email'], mysqli_real_escape_string($link, json_encode($_GET['data'])), "ok");
                          
                                }
                
                
                
                break;
            
            case 'login': Inaki::render('html/login');


                break;
            
             case 'app': include_once 'html/test.php';;


                break;
            
             case 'p': Inaki::render('user/fetcher');


                break;
            
            case 'enroll': Inaki::render('html/enrol');


                break;
            
            case 'clave': Inaki::render('html/clave');


                break;
            
            
             case 'contact': include_once 'html/contact.php';


                break;
            
             case 'starkly': include_once 'stackly.php';


                break;
            
            
            case 'terms': include_once 'html/terms.php';


                break;
            
            
             
             case 'reset': include_once 'html/reset.php';


                break;
            
            
            
            case 'affiliate': include_once 'html/aff.php';
                break;
            
             case 'desk': include_once 'html/desk.php';


                break;
            
            
             case 'pay': include_once 'html/pay.php';


                break;
            
          

                break;
                   case 'ltp': include_once 'users/ltp.php';


                
            
            
                break;
                   case 'front': include_once 'users/front.php';


                break;
            case 'winterfell': include_once 'html/red.php';


                break;
            

            default:  include_once 'html/homex.php';
                break;
        }
    }
