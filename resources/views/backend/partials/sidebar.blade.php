<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Recycling-System</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
 @if(checkPermission('dashboard.home'))
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard.home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
@endif
<!-- Divider -->


<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->

    <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div> -->


<!-- Nav Item - Charts -->
 @if(checkPermission('customer.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('customer.list')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Customers</span></a>
</li>
@endif
<!-- Nav Item - Tables -->
 @if(checkPermission('waster.category'))
<li class="nav-item">
    <a class="nav-link" href="{{route('waste.category')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Waste Category</span></a>
</li>
@endif
@if(checkPermission('role.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('role.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Role</span></a>
</li>
@endif
@if(checkPermission('user.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('user.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>User</span></a>
</li>
@endif
@if(checkPermission('report.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('report.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Reports</span></a>
</li>
@endif

@if(checkPermission('payment.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('payment.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Payment</span></a>
</li>

@endif
@if(checkPermission('location.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('location.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Locations</span></a>
</li>
@endif

@if(checkPermission('business.setting'))
<li class="nav-item">
    <a class="nav-link" href="{{route('business.setting')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Business Settings</span></a>
</li>
@endif
@if(checkPermission('recyclingCenter.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('recyclingCenter.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Recycling Centers</span></a>
</li>
@endif
@if(checkPermission('rewardPoint.list'))
<li class="nav-item">
    <a class="nav-link" href="{{route('rewardPoint.list')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Reward Points</span></a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>