<?php
if (isset($_GET['root'])) {
  Inaki::logout();
}
Inaki::isAuthenticated(Inaki::$anchor);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="<?= Inaki::author();  ?>">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <title>Admin - console</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link href="<?= Inaki::path() ?>vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?= Inaki::path() ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
  </script>

  <script src="<?= Inaki::path()  ?>vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
  </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include_once 'sidenav.php';
    ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php include_once 'adminnav.php';
        ?>


        <div class="container-fluid">
          <?php

          if (isset($routes[2])) {
            switch ($routes[2]) {
              case '':
                include_once 'admins/default.php';
                break;
              case 'word':
                include_once 'admins/wd.php';
                break;

              case 'users':
                include_once 'admins/users.php';
                break;

              case 'gal':
                include_once 'admins/gal.php';
                break;

              case 'behive':
                include_once 'admins/behive.php';
                break;

              case 'regionals':
                include_once 'admins/regionals.php';
                break;

              case 'affusers':
                include_once 'admins/affusers.php';
                break;
              case 'store':
                include_once 'ecom/addproducts.php';
                break;
              case 'sc':
                include_once 'admins/auidt.php';
                break;
              case 'prelim':
                include_once 'admins/prelim.php';
                break;

              default:
                include_once 'admins/default.php';
                break;
            }
          }




          ?>






        </div>


      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?php echo date('Y') ?>.Powered by <a target="_blank" href="https://blavitch.com/contact">Crud ASL</a> </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>


  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>




  <script>
    $(document).ready(function() {

      $('.table').DataTable();
      $("#ddted").modal('show');
      $(".edited").click(function(event) {
        $("#vlad").modal('show');
        let grunty = event.target.id;
        $("#fg").val($('#' + grunty).data('edit'));
        $("#ratef").val($('#' + grunty).data('ridge'));

      });
    });
  </script>
  <script src="<?= Inaki::path()  ?>vendors/jquery-easing/jquery.easing.min.js"></script>
  <script>
    /*!
     * Start Bootstrap - SB Admin 2 v4.0.7 (https://startbootstrap.com/template-overviews/sb-admin-2)
     * Copyright 2013-2019 Start Bootstrap
     * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin-2/blob/master/LICENSE)
     */

    ! function(t) {
      "use strict";
      t("#sidebarToggle, #sidebarToggleTop").on("click", function(o) {
        t("body").toggleClass("sidebar-toggled"), t(".sidebar").toggleClass("toggled"), t(".sidebar").hasClass("toggled") && t(".sidebar .collapse").collapse("hide")
      }), t(window).resize(function() {
        t(window).width() < 768 && t(".sidebar .collapse").collapse("hide")
      }), t("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function(o) {
        if (768 < t(window).width()) {
          var e = o.originalEvent,
            l = e.wheelDelta || -e.detail;
          this.scrollTop += 30 * (l < 0 ? 1 : -1), o.preventDefault()
        }
      }), t(document).on("scroll", function() {
        100 < t(this).scrollTop() ? t(".scroll-to-top").fadeIn() : t(".scroll-to-top").fadeOut()
      }), t(document).on("click", "a.scroll-to-top", function(o) {
        var e = t(this);
        t("html, body").stop().animate({
          scrollTop: t(e.attr("href")).offset().top
        }, 1e3, "easeInOutExpo"), o.preventDefault()
      })
    }(jQuery);
  </script>


  <script>
    $(document).ready(function() {
      $('.table').DataTable();
    });
  </script>

</body>


</html>