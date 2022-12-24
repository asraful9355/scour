@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
@endphp
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
     <!--  <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-anchor"></i>
      </div> -->
      <div class="sidebar-brand-text mx-3"> Dashboard</div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider">
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Category</span>
      </a>
      <div id="category" class="collapse
      {{ ($route == 'category.index') ? 'show' : '' }}
      {{ ($route == 'category.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="{{ route('category.index') }}">Manage Category</a>
            <a class="collapse-item " href="{{ route('category.create') }}">Add Category</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#work"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Our Work</span>
      </a>
      <div id="work" class="collapse
      {{ ($route == 'work.index') ? 'show' : '' }}
      {{ ($route == 'work.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="{{ route('work.index') }}">Manage Work</a>
            <a class="collapse-item " href="{{ route('work.create') }}">Add Work</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Menu</span>
      </a>
      <div id="menu" class="collapse

      {{ ($route == 'menu.index') ? 'show' : '' }}
      {{ ($route == 'menu.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'menu.index') ? 'active' : '' }}" href="{{ route('menu.index') }}">Manage Menu</a>
            <a class="collapse-item {{ ($route == 'menu.create') ? 'active' : '' }}" href="{{ route('menu.create') }}">Add Menu</a>
         </div>
      </div>
   </li>


   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#about"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>About Company</span>
      </a>
      <div id="about" class="collapse

      {{ ($route == 'about.description.index') ? 'show' : '' }}
      {{ ($route == 'about.index') ? 'show' : '' }}
      {{ ($route == 'about.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'about.description.index') ? 'active' : '' }}" href="{{ route('about.description.index') }}">Company Description</a>
            <a class="collapse-item {{ ($route == 'about.index') ? 'active' : '' }}" href="{{ route('about.index') }}">Manage About</a>
            <a class="collapse-item {{ ($route == 'about.create') ? 'active' : '' }}" href="{{ route('about.create') }}">Add About</a>
         </div>
      </div>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#featured_project"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Featured Projects</span>
      </a>
      <div id="featured_project" class="collapse

      {{ ($route == 'project.description.index') ? 'show' : '' }}
      {{ ($route == 'project.index') ? 'show' : '' }}
      {{ ($route == 'project.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'project.description.index') ? 'active' : '' }}" href="{{ route('project.description.index') }}">Featured Description</a>
            <a class="collapse-item {{ ($route == 'project.index') ? 'active' : '' }}" href="{{ route('project.index') }}">Manage Project</a>
            <a class="collapse-item {{ ($route == 'project.create') ? 'active' : '' }}" href="{{ route('project.create') }}">Add Project</a>
         </div>
      </div>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#services"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Our Services</span>
      </a>
      <div id="services" class="collapse

      {{ ($route == 'services.description.index') ? 'show' : '' }}
      {{ ($route == 'services.index') ? 'show' : '' }}
      {{ ($route == 'services.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'services.description.index') ? 'active' : '' }}" href="{{ route('services.description.index') }}">Services Description</a>
            <a class="collapse-item {{ ($route == 'services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Manage Services</a>
            <a class="collapse-item {{ ($route == 'services.create') ? 'active' : '' }}" href="{{ route('services.create') }}">Add Services</a>
         </div>
      </div>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#client"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Our Clients</span> 
      </a>
      <div id="client" class="collapse

      {{ ($route == 'client.description.index') ? 'show' : '' }}
      {{ ($route == 'client.index') ? 'show' : '' }}
      {{ ($route == 'client.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'client.description.index') ? 'active' : '' }}" href="{{ route('client.description.index') }}">Client Description</a>
            <a class="collapse-item {{ ($route == 'client.index') ? 'active' : '' }}" href="{{ route('client.index') }}">Manage Client</a>
            <a class="collapse-item {{ ($route == 'client.create') ? 'active' : '' }}" href="{{ route('client.create') }}">Add Client</a>
         </div>
      </div>
   </li> 

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#team"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Our Team</span> 
      </a>
      <div id="team" class="collapse

      {{ ($route == 'team.description.index') ? 'show' : '' }}
      {{ ($route == 'team.index') ? 'show' : '' }}
      {{ ($route == 'team.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'team.description.index') ? 'active' : '' }}" href="{{ route('team.description.index') }}">Team Description</a>
            <a class="collapse-item {{ ($route == 'team.index') ? 'active' : '' }}" href="{{ route('team.index') }}">Manage Team</a>
            <a class="collapse-item {{ ($route == 'team.create') ? 'active' : '' }}" href="{{ route('team.create') }}">Add Team</a>
         </div>
      </div>
   </li> 


   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#banner"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Banner</span>
      </a>
      <div id="banner" class="collapse

      {{ ($route == 'banner.index') ? 'show' : '' }}
      {{ ($route == 'banner.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'banner.index') ? 'active' : '' }}" href="{{ route('banner.index') }}">Manage Banner</a>
            <a class="collapse-item {{ ($route == 'banner.create') ? 'active' : '' }}" href="{{ route('banner.create') }}">Add Banner</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#choose"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Choose Us</span>
      </a>
      <div id="choose" class="collapse

      {{ ($route == 'choose_des.index') ? 'show' : '' }}
      {{ ($route == 'choose_about.index') ? 'show' : '' }}
      {{ ($route == 'choose_about.create') ? 'show' : '' }}
      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($route == 'choose_des.index') ? 'active' : '' }}" href="{{ route('choose_des.index') }}">Add Choose Description</a>
            <a class="collapse-item {{ ($route == 'choose_about.index') ? 'active' : '' }}" href="{{ route('choose_about.index') }}">Manage Choose</a>
            <a class="collapse-item {{ ($route == 'choose_about.create') ? 'active' : '' }}" href="{{ route('choose_about.create') }}">Add Choose About</a>
         </div>
      </div>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Product</span>
      </a>
      <div id="product" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="#">Manage Product</a>
            <a class="collapse-item " href="#">Add Product</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Setting</span>
      </a>
      <div id="setting" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="#">Manage Setting</a>
            <a class="collapse-item " href="#">Manage Seo</a>
         </div>
      </div>
   </li>
</ul>
<!-- End of Sidebar -->
