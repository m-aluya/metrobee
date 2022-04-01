<?php Inaki::head("enroll to get started");
?>

<body>
  <div class="body_wrapper">
    <?php Inaki::navbar();
    $_SESSION['forge'] = token();


    ?>
    <section class="sign_in_area bg_color sec_pad" style="margin-top: 4em" data-sec='<?= time(); ?>'>
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 list-group-item">



            <form data-forge="<?php echo $_SESSION['forge'];  ?>" id="enroll" role="form" data-toggle="validator" action="<?= Inaki::path() ?>enroll?<?= token(); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <input type="hidden" name="timestamp" value="<?php echo time();  ?>" />
              <input type="hidden" name="facade" value="<?php echo $_SESSION['forge'];  ?>" />
              <input type="hidden" name="ref" value="<?php
                                                      if (isset($_GET['ref'])) {
                                                        echo strip_tags($_GET['ref']);
                                                      } else {
                                                        //NULL;
                                                      }

                                                      ?>" />
              <input type="hidden" name="key" value="<?= token() ?>" />
              <small>Profile Information </small>
              <hr />
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input required class="form-control text-capitalize" value="" placeholder="First Name" name="firstname" type="text">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>
                      <input required class="form-control text-capitalize" value="" placeholder="Last Name" name="lastname" type="text">
                    </div>
                  </div>
                </div>

              </div>


              <div class="row">
                <div class="col-md-5">
                  <div class="form-group input-group-alternative">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect03"><i class="ni ni-circle-08"></i>&nbsp;&nbsp;Gender</label>
                      </div>
                      <select required class="custom-select" name="gender" id="inputGroupSelect03">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="col-md-7">
                  <div class="form-group input-group-alternative">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect02"><i class="ni ni-world-2"></i>&nbsp;&nbsp;Origin State</label>
                      </div>
                      <select required class="custom-select" name="stateorigin" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        <option value="Abuja FCT">Abuja FCT</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nassarawa">Nassarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
                      </select>
                    </div>
                  </div>

                </div>


              </div>







              <br />
              <small>Contact Details</small>
              <hr />

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                  </div>
                  <input data-minlength="11" data-maxlength="11" class="form-control" placeholder="Phone" value="" name="phone" type="text">
                </div>
              </div>

              <br />
              <small>School Information</small>
              <hr />
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                  </div>
                  <input required class="form-control text-capitalize" value="" placeholder="Name of School" name="schname" type="text">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card-o"></i></span>
                      </div>
                      <input class="form-control text-capitalize" value="" placeholder="Department" name="department" type="text">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group input-group-alternative">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01"><i class="ni ni-books"></i>&nbsp;&nbsp;Level</label>
                      </div>
                      <select required class="custom-select" name="level" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>



              <br />
              <small>Login Information</small>
              <hr />
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                  </div>
                  <input data-error="That email address is invalid" required class="form-control text-lowercase" value="" placeholder="Email address" name="email" type="text">

                </div>
                <div class="help-block with-errors text-center text-danger"></div>
              </div>


              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  </div>
                  <input id="inputPassword" required class="form-control" placeholder="Password" name="password" type="password">
                </div>
              </div>


              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  </div>
                  <input id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="oops, these don't match" required class="form-control" placeholder="Confirm Password" name="retypepassword" type="password">
                </div>
                <div class="help-block with-errors text-center text-danger"></div>
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
              <div class="text-center">
                <button name="slack" type="submit" class="btn_three btn btn-dark mt-4 long-btn" style="margin-bottom: 2em"><i class="fa fa-long-arrow-right"></i> Create account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <div class="modal" tabindex="-1" role="dialog" id="forgelad">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close june" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="dere"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary june" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?= Inaki::footer(); ?>
    <script type="text/javascript">
      + function(a) {
        "use strict";

        function b(b) {
          return b.is('[type="checkbox"]') ? b.prop("checked") : b.is('[type="radio"]') ? !!a('[name="' + b.attr("name") + '"]:checked').length : b.is("select[multiple]") ? (b.val() || []).length : b.val()
        }

        function c(b) {
          return this.each(function() {
            var c = a(this),
              e = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b),
              f = c.data("bs.validator");
            (f || "destroy" != b) && (f || c.data("bs.validator", f = new d(this, e)), "string" == typeof b && f[b]())
          })
        }
        var d = function(c, e) {
          this.options = e, this.validators = a.extend({}, d.VALIDATORS, e.custom), this.$element = a(c), this.$btn = a('button[type="submit"], input[type="submit"]').filter('[form="' + this.$element.attr("id") + '"]').add(this.$element.find('input[type="submit"], button[type="submit"]')), this.update(), this.$element.on("input.bs.validator change.bs.validator focusout.bs.validator", a.proxy(this.onInput, this)), this.$element.on("submit.bs.validator", a.proxy(this.onSubmit, this)), this.$element.on("reset.bs.validator", a.proxy(this.reset, this)), this.$element.find("[data-match]").each(function() {
            var c = a(this),
              d = c.attr("data-match");
            a(d).on("input.bs.validator", function() {
              b(c) && c.trigger("input.bs.validator")
            })
          }), this.$inputs.filter(function() {
            return b(a(this)) && !a(this).closest(".has-error").length
          }).trigger("focusout"), this.$element.attr("novalidate", !0)
        };
        d.VERSION = "0.11.9", d.INPUT_SELECTOR = ':input:not([type="hidden"], [type="submit"], [type="reset"], button)', d.FOCUS_OFFSET = 20, d.DEFAULTS = {
          delay: 500,
          html: !1,
          disable: !0,
          focus: !0,
          custom: {},
          errors: {
            match: "Does not match",
            minlength: "Not long enough"
          },
          feedback: {
            success: "glyphicon-ok",
            error: "glyphicon-remove"
          }
        }, d.VALIDATORS = {
          "native": function(a) {
            var b = a[0];
            return b.checkValidity ? !b.checkValidity() && !b.validity.valid && (b.validationMessage || "error!") : void 0
          },
          match: function(b) {
            var c = b.attr("data-match");
            return b.val() !== a(c).val() && d.DEFAULTS.errors.match
          },
          minlength: function(a) {
            var b = a.attr("data-minlength");
            return a.val().length < b && d.DEFAULTS.errors.minlength
          }
        }, d.prototype.update = function() {
          var b = this;
          return this.$inputs = this.$element.find(d.INPUT_SELECTOR).add(this.$element.find('[data-validate="true"]')).not(this.$element.find('[data-validate="false"]').each(function() {
            b.clearErrors(a(this))
          })), this.toggleSubmit(), this
        }, d.prototype.onInput = function(b) {
          var c = this,
            d = a(b.target),
            e = "focusout" !== b.type;
          this.$inputs.is(d) && this.validateInput(d, e).done(function() {
            c.toggleSubmit()
          })
        }, d.prototype.validateInput = function(c, d) {
          var e = (b(c), c.data("bs.validator.errors"));
          c.is('[type="radio"]') && (c = this.$element.find('input[name="' + c.attr("name") + '"]'));
          var f = a.Event("validate.bs.validator", {
            relatedTarget: c[0]
          });
          if (this.$element.trigger(f), !f.isDefaultPrevented()) {
            var g = this;
            return this.runValidators(c).done(function(b) {
              c.data("bs.validator.errors", b), b.length ? d ? g.defer(c, g.showErrors) : g.showErrors(c) : g.clearErrors(c), e && b.toString() === e.toString() || (f = b.length ? a.Event("invalid.bs.validator", {
                relatedTarget: c[0],
                detail: b
              }) : a.Event("valid.bs.validator", {
                relatedTarget: c[0],
                detail: e
              }), g.$element.trigger(f)), g.toggleSubmit(), g.$element.trigger(a.Event("validated.bs.validator", {
                relatedTarget: c[0]
              }))
            })
          }
        }, d.prototype.runValidators = function(c) {
          function d(a) {
            return c.attr("data-" + a + "-error")
          }

          function e() {
            var a = c[0].validity;
            return a.typeMismatch ? c.attr("data-type-error") : a.patternMismatch ? c.attr("data-pattern-error") : a.stepMismatch ? c.attr("data-step-error") : a.rangeOverflow ? c.attr("data-max-error") : a.rangeUnderflow ? c.attr("data-min-error") : a.valueMissing ? c.attr("data-required-error") : null
          }

          function f() {
            return c.attr("data-error")
          }

          function g(a) {
            return d(a) || e() || f()
          }
          var h = [],
            i = a.Deferred();
          return c.data("bs.validator.deferred") && c.data("bs.validator.deferred").reject(), c.data("bs.validator.deferred", i), a.each(this.validators, a.proxy(function(a, d) {
            var e = null;
            !b(c) && !c.attr("required") || void 0 === c.attr("data-" + a) && "native" != a || !(e = d.call(this, c)) || (e = g(a) || e, !~h.indexOf(e) && h.push(e))
          }, this)), !h.length && b(c) && c.attr("data-remote") ? this.defer(c, function() {
            var d = {};
            d[c.attr("name")] = b(c), a.get(c.attr("data-remote"), d).fail(function(a, b, c) {
              h.push(g("remote") || c)
            }).always(function() {
              i.resolve(h)
            })
          }) : i.resolve(h), i.promise()
        }, d.prototype.validate = function() {
          var b = this;
          return a.when(this.$inputs.map(function() {
            return b.validateInput(a(this), !1)
          })).then(function() {
            b.toggleSubmit(), b.focusError()
          }), this
        }, d.prototype.focusError = function() {
          if (this.options.focus) {
            var b = this.$element.find(".has-error:first :input");
            0 !== b.length && (a("html, body").animate({
              scrollTop: b.offset().top - d.FOCUS_OFFSET
            }, 250), b.focus())
          }
        }, d.prototype.showErrors = function(b) {
          var c = this.options.html ? "html" : "text",
            d = b.data("bs.validator.errors"),
            e = b.closest(".form-group"),
            f = e.find(".help-block.with-errors"),
            g = e.find(".form-control-feedback");
          d.length && (d = a("<ul/>").addClass("list-unstyled").append(a.map(d, function(b) {
            return a("<li/>")[c](b)
          })), void 0 === f.data("bs.validator.originalContent") && f.data("bs.validator.originalContent", f.html()), f.empty().append(d), e.addClass("has-error has-danger"), e.hasClass("has-feedback") && g.removeClass(this.options.feedback.success) && g.addClass(this.options.feedback.error) && e.removeClass("has-success"))
        }, d.prototype.clearErrors = function(a) {
          var c = a.closest(".form-group"),
            d = c.find(".help-block.with-errors"),
            e = c.find(".form-control-feedback");
          d.html(d.data("bs.validator.originalContent")), c.removeClass("has-error has-danger has-success"), c.hasClass("has-feedback") && e.removeClass(this.options.feedback.error) && e.removeClass(this.options.feedback.success) && b(a) && e.addClass(this.options.feedback.success) && c.addClass("has-success")
        }, d.prototype.hasErrors = function() {
          function b() {
            return !!(a(this).data("bs.validator.errors") || []).length
          }
          return !!this.$inputs.filter(b).length
        }, d.prototype.isIncomplete = function() {
          function c() {
            var c = b(a(this));
            return !("string" == typeof c ? a.trim(c) : c)
          }
          return !!this.$inputs.filter("[required]").filter(c).length
        }, d.prototype.onSubmit = function(a) {
          this.validate(), (this.isIncomplete() || this.hasErrors()) && a.preventDefault()
        }, d.prototype.toggleSubmit = function() {
          this.options.disable && this.$btn.toggleClass("disabled", this.isIncomplete() || this.hasErrors())
        }, d.prototype.defer = function(b, c) {
          return c = a.proxy(c, this, b), this.options.delay ? (window.clearTimeout(b.data("bs.validator.timeout")), void b.data("bs.validator.timeout", window.setTimeout(c, this.options.delay))) : c()
        }, d.prototype.reset = function() {
          return this.$element.find(".form-control-feedback").removeClass(this.options.feedback.error).removeClass(this.options.feedback.success), this.$inputs.removeData(["bs.validator.errors", "bs.validator.deferred"]).each(function() {
            var b = a(this),
              c = b.data("bs.validator.timeout");
            window.clearTimeout(c) && b.removeData("bs.validator.timeout")
          }), this.$element.find(".help-block.with-errors").each(function() {
            var b = a(this),
              c = b.data("bs.validator.originalContent");
            b.removeData("bs.validator.originalContent").html(c)
          }), this.$btn.removeClass("disabled"), this.$element.find(".has-error, .has-danger, .has-success").removeClass("has-error has-danger has-success"), this
        }, d.prototype.destroy = function() {
          return this.reset(), this.$element.removeAttr("novalidate").removeData("bs.validator").off(".bs.validator"), this.$inputs.off(".bs.validator"), this.options = null, this.validators = null, this.$element = null, this.$btn = null, this.$inputs = null, this
        };
        var e = a.fn.validator;
        a.fn.validator = c, a.fn.validator.Constructor = d, a.fn.validator.noConflict = function() {
          return a.fn.validator = e, this
        }, a(window).on("load", function() {
          a('form[data-toggle="validator"]').each(function() {
            var b = a(this);
            c.call(b, b.data())
          })
        })
      }(jQuery);
    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        $("#enroll").submit(function(e) {

          e.preventDefault(); // avoid to execute the actual submit of the form.

          var form = $(this);

          $.ajax({
            type: "POST",
            url: "<?= Inaki::path() ?>starkly?key=<?php echo md5(time()); ?>&token=<?= sha1(time()); ?>&clone=<?= $_SESSION['forge'] ?>&stack=<?= token(); ?>",
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
              $("#dere").html(data);
              $("#forgelad").modal('show');
              //alert(data); // show response from the php script.
            }
          });

          return false;
        });
      });

      $(".june").click(function() {

        $("html, body").animate({
          scrollTop: 0
        }, "slow");
        $("#dere").modal("hide");
      });
    </script>
</body>

</html>