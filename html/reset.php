<?php
Inaki::head("recover your password");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function checkEmail($email){
    global $link;
    $sql = "select id,email,firstname from users where email = '$email'";
    $result = $link->query($sql);
    if(mysqli_num_rows($result) > 0){
        
        $ejk = mysqli_fetch_assoc($result);
        $ahref = 'https://metrobee.org.ng/clave?t='.$ejk['id'].'&token='. token() . '&wreck='. token();
                require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$mail = new PHPMailer; //From email address and name 
$mail->From = "support@metrobee.com.ng"; 
$mail->FromName = Inaki::app_name() .' account'; //To address and name 
$mail->addAddress($ejk['email'], ucfirst($ejk['firstname']));//Recipient name is optional
$mail->addAddress($ejk['email']); //Address to which recipient will reply 
$mail->addReplyTo("support@metrobee.com.ng", "Reply"); //CC and BCC 
$mail->addCC("support@metrobee.com.ng"); 
$mail->addBCC("support@metrobee.com.ng"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = "Reset your password"; 
$mail->Body = '<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }

      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */

      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }

      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: #3498db;
        text-decoration: underline; 
      }

      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }

      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }

      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }

    </style>
  </head>
  <body class="">
    <span class="preheader">Reset your metrobee pasword</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                       
                        <p>We recieved a request you want to reset your password. Click on the button below to set a new password for your metrobee account</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td> <a href="'.$ahref .'" target="_blank">Set new password</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>Ignore this email you did not request password reset</p>
                        <p>Metrobee </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">FAMOUS METRO INTERNATIONAL LIMITED, suite 4 EDPA shopping complex ugbowo benin city edo state</span>
                 
                  </td>
                </tr>
                <tr>
                  <td class="content-block powered-by">
                    Powered by <a href="http://evertry.xyz">EverTry</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>'
      
        ;
//$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
//echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo Inaki::alertSuccess("Check your inbox/spam on instructions to reset your password"); 
}
if(!$mail->send()) 
{ 
echo Inaki::alertError("Something went wrong, please try again");
} 
else 
{ 
//echo "Message has been sent successfully"; 






        
    }
    } else {
        
        echo Inaki::alertError("Account not found");
    }

}


?><body>
  <div class="body_wrapper">
  <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em" data-sec='<?= time(); ?>'>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 list-group-item">
                        <form id="atlas" data-forge="<?php echo token();  ?>"  action="#"  method="post" accept-charset="utf-8">
                         <article class="text-center" style="padding-top: 3em; padding-bottom: 3em">
                           <?php
                           if(isset($_POST['xtac'])){
                        
                               if(!empty($_POST['email'])){
                                  
                                       checkEmail(filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL));
                                 
                               }
                           }
                           
                           
                           
                           ?>
                             
                             
                             
                           <p>
<svg enable-background="new 0 0 512 512" width="64px" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<path d="m230.79 354.31-6.729 60.51c-0.333 3.01 0.635 6.031 2.656 8.292 2.021 2.26 4.917 3.552 7.948 3.552h42.667c3.031 0 5.927-1.292 7.948-3.552s2.99-5.281 2.656-8.292l-6.729-60.51c10.927-7.948 17.458-20.521 17.458-34.313 0-23.531-19.135-42.667-42.667-42.667s-42.667 19.136-42.667 42.667c0 13.792 6.532 26.365 17.459 34.313zm25.208-55.646c11.76 0 21.333 9.573 21.333 21.333 0 8.177-4.646 15.5-12.125 19.125-4.073 1.979-6.458 6.292-5.958 10.781l6.167 55.427h-18.833l6.167-55.427c0.5-4.49-1.885-8.802-5.958-10.781-7.479-3.625-12.125-10.948-12.125-19.125-1e-3 -11.76 9.572-21.333 21.332-21.333z"/>
			<path d="m437.33 192h-32v-42.667c0-82.343-66.989-149.33-149.33-149.33s-149.33 66.99-149.33 149.33v42.667h-32c-5.896 0-10.667 4.771-10.667 10.667v266.67c0 23.531 19.135 42.666 42.667 42.666h298.67c23.531 0 42.666-19.135 42.666-42.667v-266.67c0-5.896-4.771-10.667-10.667-10.667zm-309.33-42.667c0-70.583 57.417-128 128-128s128 57.417 128 128v42.667h-21.333v-42.667c0-58.813-47.854-106.67-106.67-106.67s-106.67 47.855-106.67 106.67v42.667h-21.333v-42.667zm213.33 0v42.667h-170.67v-42.667c0-47.052 38.281-85.333 85.333-85.333s85.333 38.281 85.333 85.333zm85.334 320c0 11.76-9.573 21.333-21.333 21.333h-298.67c-11.76 0-21.333-9.573-21.333-21.333v-256h341.33v256z"/>
		</svg><br/>
                
                
                
<br/>Enter your email address to reset your password <br/>
                                  
                                    <div class="form-group">
                                        <input placeholder="arya_stark@winterfell.com" class="form-control" type="email" required focus name="email" id="reset-email"/>
                                    </div>                     
                                    
                                    
<button id="xta" name="xtac" type="submit" class="btn mbg"><i class="fa fa-long-arrow-right"></i> Reset Password</button>
</p>
                                    
                                    

         <br/>
         <p><a href="<?= Inaki::path() ?>login">I remember my password</a></p>
                                

                            
                            </article>
			
                </form>
                    </div>
                </div>
            </div>
        </section>
 
      
</body>

</html>