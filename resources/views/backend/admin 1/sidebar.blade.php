@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
@endphp
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-anchor"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Find Estate</div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard nazrul</span></a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider">
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#real_estate"
         aria-expanded="true" aria-controls="real_estate">
      <i class="fas fa-fw fa-folder"></i>
      <span>Category</span>
      </a>
      <div id="real_estate" class="collapse


      " aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="{{ route('category.index') }}">Manage Category</a>
            <a class="collapse-item " href="{{ route('category.create') }}">Add Category</a>
         </div>
      </div>
   </li>
</ul>
<!-- End of Sidebar -->
