<div class="sidebar border-end col-md-3 col-lg-2 p-0 bg-dark text-light">
    <div class="offcanvas-md offcanvas-end bg-dark text-light" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company Name</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column mb-4">
                <li class="nav-item">
                    <a class="nav-link active d-flex align-items-center gap-2" aria-current="page" href="{{route('dashboard.home')}}">
                        <svg class="bi"><use xlink:href="#house-fill"/></svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('admin.list')}}">
                        <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                        Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('customer.list')}}">
                        <svg class="bi"><use xlink:href="#cart"/></svg>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('waste.category')}}">
                        <svg class="bi"><use xlink:href="#people"/></svg>
                        Waste Category
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('report.list')}}">
                        <svg class="bi"><use xlink:href="#graph-up"/></svg>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('payment.list')}}">
                        <svg class="bi"><use xlink:href="#puzzle"/></svg>
                        Payment
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('business.setting')}}">
                        <svg class="bi"><use xlink:href="#puzzle"/></svg>
                        Business Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('location.list')}}">
                        <svg class="bi"><use xlink:href="#puzzle"/></svg>
                        Locations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('recyclingCenter.list')}}">
                        <svg class="bi"><use xlink:href="#puzzle"/></svg>
                        Recylcing Centers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{route('rewardPoint.list')}}">
                        <svg class="bi"><use xlink:href="#puzzle"/></svg>
                        Reward Points
                    </a>
                </li>
            </ul>

            <hr class="my-3 text-light">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <svg class="bi"><use xlink:href="#door-closed"/></svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
