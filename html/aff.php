<?php
function affSignUp($name,$email,$password){
    global $link;
    $check = $link->query("select email from users where email = '$email'") or die(mysqli_error($link));
    if(mysqli_num_rows($check) > 0 ){
         echo Inaki::alertError("This email address has been used on another account. If this is you, <a href='".Inaki::path()."login'>login here</a>");
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $acc = 1;
        $paid = 1;
  $sql = $link->query("insert into users (firstname,email,password,acc,paid)values('$name','$email','$hashed','$acc','$paid')");
        if($sql){
            $_SESSION['aff_email'] = $email;
            echo Inaki::alertSuccess("Success your affiliate account has been created, <a href='".Inaki::path()."login'>Continue</a> to see your referral link");
        } else {
            echo Inaki::alertError("OOps something went wrong, please try again");
        }
    }
    
    
}
Inaki::head("Create Affiliate Account, earn extra income");
?><body>
  <div class="body_wrapper">
      <?php Inaki::navbar();
$_SESSION['forge'] = token();


?>
      <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em" data-sec='<?= time(); ?>'>
          <div class="container" style="margin-top: 3em">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 prototype_content">
                        <h3 class="f_size_40 f_700 t_color3 l_height50 pr_70 mb_20 wow fadeInLeft" data-wow-delay="0.3s"><?= Inaki::app_name() ?> Affiliate marketing </h3>
                        <img src="<?= Inaki::path() ?>img/2784130.jpg"/>
                        
                        
                        <p class="f_400 l_height28 mb_40 wow fadeInLeft" data-wow-delay="0.5s"><br/>Refer your friends to register by<br/> sharing your referral link on social media. </p>
                        <p class="f_400 l_height28 mb_40 wow fadeInLeft" data-wow-delay="0.5s">Earn five hundred naira <b>(&#x20A6;500.00) </b> when any of your friends comes through your link and pays the registration fee of three thousand naira <b>(&#x20A6;3,000.00).</b></p>
                    </div>
                    
                    <div class="col-lg-5 col-md-5 col-sm-12 list-group-item" style="padding:3em">
                        <form data-rfc="<?= token(); ?>" method="POST" action="<?= Inaki::path() ?>affiliate/<?= token() ?>" >
                            <h4 class="text-center wow">Get Started </h4>
                            <?php
                            if(isset($_POST['vbx'])){
                              if($_POST['password'] === $_POST['password1']){
                                    if(!empty($_POST['rcf'])){
                                    affSignUp(filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING) ,
 filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL), $_POST['password']);
                                } else {
                                    echo Inaki::alertError("You piece of shit. Try again, this time correctly");
                                }
                              } else {
                                  echo Inaki::alertError("Password do not match");
                              }
                                
                                
                            }
                            
                            
                            
                           ?> <div class="form-group">
                                <label>Full name</label>
                                <input placeholder="Arya Stark" type="text" name="name" class="form-control" required/>
                            </div>
                            <input name="rcf" type="hidden" value="<?= sha1(time()). token() ?>" />
                        <div class="form-group">
                                <label>Email address</label>
                                <input type="email" placeholder="arya_stark@winterfell.got" name="email" class="form-control" required/>
                            </div>
                            
                           <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required/>
                            </div> 
                        <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password1" class="form-control" required/>
                            </div>
                       <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                          <input data-error="Before you continue" required class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>I agree with the
                            <a href="#">Privacy Policy</a>
                          </span>
                        </label>
                          <div class="help-block with-errors text-center text-danger"></div>
                      </div>
                    </div>
                  </div>   
                            
                       
                            <div class="form-group">
                                <button class="btn mbg long-btn" type="submit" name="vbx"><i class="fa fa-long-arrow-right"></i> Create Account</button>
                            </div>
                        </form>
                    </div>     
                    
                    </div>
                </div>
            </div>
        </section>
      
    
<?= Inaki::footer(); ?>
      <script type="text/javascript">

+function(a){"use strict";function b(b){return b.is('[type="checkbox"]')?b.prop("checked"):b.is('[type="radio"]')?!!a('[name="'+b.attr("name")+'"]:checked').length:b.is("select[multiple]")?(b.val()||[]).length:b.val()}function c(b){return this.each(function(){var c=a(this),e=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b),f=c.data("bs.validator");(f||"destroy"!=b)&&(f||c.data("bs.validator",f=new d(this,e)),"string"==typeof b&&f[b]())})}var d=function(c,e){this.options=e,this.validators=a.extend({},d.VALIDATORS,e.custom),this.$element=a(c),this.$btn=a('button[type="submit"], input[type="submit"]').filter('[form="'+this.$element.attr("id")+'"]').add(this.$element.find('input[type="submit"], button[type="submit"]')),this.update(),this.$element.on("input.bs.validator change.bs.validator focusout.bs.validator",a.proxy(this.onInput,this)),this.$element.on("submit.bs.validator",a.proxy(this.onSubmit,this)),this.$element.on("reset.bs.validator",a.proxy(this.reset,this)),this.$element.find("[data-match]").each(function(){var c=a(this),d=c.attr("data-match");a(d).on("input.bs.validator",function(){b(c)&&c.trigger("input.bs.validator")})}),this.$inputs.filter(function(){return b(a(this))&&!a(this).closest(".has-error").length}).trigger("focusout"),this.$element.attr("novalidate",!0)};d.VERSION="0.11.9",d.INPUT_SELECTOR=':input:not([type="hidden"], [type="submit"], [type="reset"], button)',d.FOCUS_OFFSET=20,d.DEFAULTS={delay:500,html:!1,disable:!0,focus:!0,custom:{},errors:{match:"Does not match",minlength:"Not long enough"},feedback:{success:"glyphicon-ok",error:"glyphicon-remove"}},d.VALIDATORS={"native":function(a){var b=a[0];return b.checkValidity?!b.checkValidity()&&!b.validity.valid&&(b.validationMessage||"error!"):void 0},match:function(b){var c=b.attr("data-match");return b.val()!==a(c).val()&&d.DEFAULTS.errors.match},minlength:function(a){var b=a.attr("data-minlength");return a.val().length<b&&d.DEFAULTS.errors.minlength}},d.prototype.update=function(){var b=this;return this.$inputs=this.$element.find(d.INPUT_SELECTOR).add(this.$element.find('[data-validate="true"]')).not(this.$element.find('[data-validate="false"]').each(function(){b.clearErrors(a(this))})),this.toggleSubmit(),this},d.prototype.onInput=function(b){var c=this,d=a(b.target),e="focusout"!==b.type;this.$inputs.is(d)&&this.validateInput(d,e).done(function(){c.toggleSubmit()})},d.prototype.validateInput=function(c,d){var e=(b(c),c.data("bs.validator.errors"));c.is('[type="radio"]')&&(c=this.$element.find('input[name="'+c.attr("name")+'"]'));var f=a.Event("validate.bs.validator",{relatedTarget:c[0]});if(this.$element.trigger(f),!f.isDefaultPrevented()){var g=this;return this.runValidators(c).done(function(b){c.data("bs.validator.errors",b),b.length?d?g.defer(c,g.showErrors):g.showErrors(c):g.clearErrors(c),e&&b.toString()===e.toString()||(f=b.length?a.Event("invalid.bs.validator",{relatedTarget:c[0],detail:b}):a.Event("valid.bs.validator",{relatedTarget:c[0],detail:e}),g.$element.trigger(f)),g.toggleSubmit(),g.$element.trigger(a.Event("validated.bs.validator",{relatedTarget:c[0]}))})}},d.prototype.runValidators=function(c){function d(a){return c.attr("data-"+a+"-error")}function e(){var a=c[0].validity;return a.typeMismatch?c.attr("data-type-error"):a.patternMismatch?c.attr("data-pattern-error"):a.stepMismatch?c.attr("data-step-error"):a.rangeOverflow?c.attr("data-max-error"):a.rangeUnderflow?c.attr("data-min-error"):a.valueMissing?c.attr("data-required-error"):null}function f(){return c.attr("data-error")}function g(a){return d(a)||e()||f()}var h=[],i=a.Deferred();return c.data("bs.validator.deferred")&&c.data("bs.validator.deferred").reject(),c.data("bs.validator.deferred",i),a.each(this.validators,a.proxy(function(a,d){var e=null;!b(c)&&!c.attr("required")||void 0===c.attr("data-"+a)&&"native"!=a||!(e=d.call(this,c))||(e=g(a)||e,!~h.indexOf(e)&&h.push(e))},this)),!h.length&&b(c)&&c.attr("data-remote")?this.defer(c,function(){var d={};d[c.attr("name")]=b(c),a.get(c.attr("data-remote"),d).fail(function(a,b,c){h.push(g("remote")||c)}).always(function(){i.resolve(h)})}):i.resolve(h),i.promise()},d.prototype.validate=function(){var b=this;return a.when(this.$inputs.map(function(){return b.validateInput(a(this),!1)})).then(function(){b.toggleSubmit(),b.focusError()}),this},d.prototype.focusError=function(){if(this.options.focus){var b=this.$element.find(".has-error:first :input");0!==b.length&&(a("html, body").animate({scrollTop:b.offset().top-d.FOCUS_OFFSET},250),b.focus())}},d.prototype.showErrors=function(b){var c=this.options.html?"html":"text",d=b.data("bs.validator.errors"),e=b.closest(".form-group"),f=e.find(".help-block.with-errors"),g=e.find(".form-control-feedback");d.length&&(d=a("<ul/>").addClass("list-unstyled").append(a.map(d,function(b){return a("<li/>")[c](b)})),void 0===f.data("bs.validator.originalContent")&&f.data("bs.validator.originalContent",f.html()),f.empty().append(d),e.addClass("has-error has-danger"),e.hasClass("has-feedback")&&g.removeClass(this.options.feedback.success)&&g.addClass(this.options.feedback.error)&&e.removeClass("has-success"))},d.prototype.clearErrors=function(a){var c=a.closest(".form-group"),d=c.find(".help-block.with-errors"),e=c.find(".form-control-feedback");d.html(d.data("bs.validator.originalContent")),c.removeClass("has-error has-danger has-success"),c.hasClass("has-feedback")&&e.removeClass(this.options.feedback.error)&&e.removeClass(this.options.feedback.success)&&b(a)&&e.addClass(this.options.feedback.success)&&c.addClass("has-success")},d.prototype.hasErrors=function(){function b(){return!!(a(this).data("bs.validator.errors")||[]).length}return!!this.$inputs.filter(b).length},d.prototype.isIncomplete=function(){function c(){var c=b(a(this));return!("string"==typeof c?a.trim(c):c)}return!!this.$inputs.filter("[required]").filter(c).length},d.prototype.onSubmit=function(a){this.validate(),(this.isIncomplete()||this.hasErrors())&&a.preventDefault()},d.prototype.toggleSubmit=function(){this.options.disable&&this.$btn.toggleClass("disabled",this.isIncomplete()||this.hasErrors())},d.prototype.defer=function(b,c){return c=a.proxy(c,this,b),this.options.delay?(window.clearTimeout(b.data("bs.validator.timeout")),void b.data("bs.validator.timeout",window.setTimeout(c,this.options.delay))):c()},d.prototype.reset=function(){return this.$element.find(".form-control-feedback").removeClass(this.options.feedback.error).removeClass(this.options.feedback.success),this.$inputs.removeData(["bs.validator.errors","bs.validator.deferred"]).each(function(){var b=a(this),c=b.data("bs.validator.timeout");window.clearTimeout(c)&&b.removeData("bs.validator.timeout")}),this.$element.find(".help-block.with-errors").each(function(){var b=a(this),c=b.data("bs.validator.originalContent");b.removeData("bs.validator.originalContent").html(c)}),this.$btn.removeClass("disabled"),this.$element.find(".has-error, .has-danger, .has-success").removeClass("has-error has-danger has-success"),this},d.prototype.destroy=function(){return this.reset(),this.$element.removeAttr("novalidate").removeData("bs.validator").off(".bs.validator"),this.$inputs.off(".bs.validator"),this.options=null,this.validators=null,this.$element=null,this.$btn=null,this.$inputs=null,this};var e=a.fn.validator;a.fn.validator=c,a.fn.validator.Constructor=d,a.fn.validator.noConflict=function(){return a.fn.validator=e,this},a(window).on("load",function(){a('form[data-toggle="validator"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery);
      </script>
      <script type="text/javascript">
      $(document).ready(function(){
        
          
          
          
          
          
          $("#enroll").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    $.ajax({
           type: "POST",
           url: "<?= Inaki::path() ?>starkly?key=<?php echo md5(time()); ?>&token=<?= sha1(time()); ?>&clone=<?= $_SESSION['forge'] ?>&stack=<?= token(); ?>",
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {$("#dere").html(data);
               $("#forgelad").modal('show');
               //alert(data); // show response from the php script.
           }
         });

return false;
});
      });
      
      $(".june").click(function(){
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
  $("#dere").modal("hide");
      });

      </script>
</body>

</html>