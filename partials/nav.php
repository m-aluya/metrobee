  <header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one">
            <div class="container">
                <a class="navbar-brand" href="#"><img style="width: 170px" src="<?= Inaki::path() ?>logo.png" srcset="<?= Inaki::path() ?>logo.png" alt="logo"></a>
                <a class="btn_get btn_hover mobile_btn ml-auto" href="#get-app">Sign Up Free</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Inaki::path(); ?>">
                                <i class="fa fa-home"></i>  Home
                            </a>
                        </li>
                        <li class="nav-item"><a  class=" nav-link"   href="<?= Inaki::path(); ?>gallery">Gallery</a>  </li>
                        <li class="nav-item"><a  class=" nav-link"   href="<?= Inaki::path(); ?>about">About</a>
                         <li class="nav-item"><a  class=" nav-link"   href="<?= Inaki::path(); ?>affiliate">Affiliate</a>  
                        </li>
                    </ul>
                    <a class="btn_get btn_hover hidden-sm" href="<?= Inaki::path() ?>login">Login</a>
                    <a class="btn_get btn_hover hidden-sm" href="<?= Inaki::path() ?>enroll">Register</a>
                </div>
            </div>
        </nav>
    </header>
