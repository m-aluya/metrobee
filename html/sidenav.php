<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<a class="sidebar-brand d-flex align-items-left small" href="<?= Inaki::path()  ?>console">
        
          <div class="sidebar-brand-text" style="font-weight: normal; text-transform: lowercase"><?php echo $_SESSION[Inaki::$anchor]['email'] ?> </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="<?= Inaki::path(); ?>console">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
     
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Control
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
          <a class="nav-link " href="<?= Inaki::path() ?>console/word/<?= token() ?>" >
          <i class="fas fa-fw fa-boxes"></i>
          <span>Word Manager</span>
        </a>
      </li>
      
      
      
      
      
      
      
<!--      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>-->

<!--       Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Users
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
          <a class="nav-link collapsed" href="<?= Inaki::path() ?>console/users/<?= token(); ?>" >
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span>
        </a>
       
      </li>
       <li class="nav-item active">
          <a class="nav-link collapsed" href="<?= Inaki::path() ?>console/affusers/<?= token(); ?>" >
          <i class="fas fa-fw fa-users"></i>
          <span>Affiliate Users</span>
        </a>
       
      </li>
      
     <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ecommerce Store
      </div>
       <li class="nav-item active">
          <a class="nav-link collapsed" href="<?= Inaki::path() ?>console/store/<?= token(); ?>" >
          <i class="fas fa-fw fa-users"></i>
          <span>Store</span>
        </a>
       
      </li>  
      
      
      
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Study Materials
      </div>
       <li class="nav-item active">
          <a class="nav-link collapsed" href="<?= Inaki::path() ?>console/behive/<?= token(); ?>" >
          <i class="fas fa-fw fa-users"></i>
          <span>Study material</span>
        </a>
       
      </li>
      
      
      
      

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path() ?>console/prelim/<?= token(); ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Preliminary Results</span></a>
      </li>

      

      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>