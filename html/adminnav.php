<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item  no-arrow"> <a class="nav-link "> <i class="fa fa-calendar-check-o"></i> <?= date('d m Y')  ?></a>
            </li>
<li class="nav-item no-arrow">
                <a class="nav-link " href="<?= Inaki::path()  ?>console/sc" >
                    <span class="mr-2 d-none d-lg-inline text-gray-600"><i class="fa fa-cog"></i> Resolve payment issues</span></a>
            </li>
            

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item  no-arrow">
                <a class="nav-link " href="<?= Inaki::path()  ?>console?root=<?= token(); ?>" >
                <span class="mr-2 d-none d-lg-inline text-gray-600">Log Out</span></a>
            </li>

          </ul>

        </nav>