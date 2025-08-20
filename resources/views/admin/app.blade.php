<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - Online Shopping Website</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('admin/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .logout-button {
        background-color: #dc3545;
        color: white;
        padding: 8px 16px;
        border-radius: 4px;
        transition: all 0.3s ease;
        border: none;
        display: inline-block;
    }
    .logout-button:hover {
        background-color: #bb2d3b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        color: white;
        text-decoration: none;
    }
    .sidebar-item.active .sidebar-link {
        background-color: rgba(255,255,255,0.1);
        border-left: 3px solid #0d6efd;
    }
    .nav-small-cap {
        padding: 15px 20px 5px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6c757d;
        font-weight: 600;
    }
    .sidebar-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin: 10px 0;
    }
    .dashboard-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 8px;
        overflow: hidden;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .sidebar-nav {
        padding-bottom: 20px;
    }
    .sidebar-collapse-btn {
        display: none;
    }
    @media (max-width: 992px) {
        .sidebar-collapse-btn {
            display: block;
        }
        .sidebar-collapsed .left-sidebar {
            margin-left: -250px;
        }
        .main-content-expanded {
            margin-left: 0 !important;
        }
    }
  </style>
</head>
<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- App Topstrip -->
    <div class="app-topstrip bg-dark py-2 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
        <a class="d-flex justify-content-center" href="#">
          <img src="{{asset('admin/assets/images/logos/logo-wrappixel.svg')}}" alt="" width="150">
        </a>
      </div>

      <div class="d-lg-flex align-items-center gap-2">
        <h3 class="text-white mb-2 mb-lg-0 fs-5 text-center">Online Shopping Admin Panel</h3>
      </div>
      
      <div class="d-flex align-items-center gap-3">
        <div class="dropdown d-flex">
          <a class="btn btn-primary d-flex align-items-center gap-1" href="javascript:void(0)" id="drop4"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="ti ti-shopping-cart fs-5"></i>
            Quick Actions
            <i class="ti ti-chevron-down fs-5"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop4">
            <a class="dropdown-item" href="#"><i class="ti ti-plus me-2"></i> Add Product</a>
            <a class="dropdown-item" href="#"><i class="ti ti-users me-2"></i> View Customers</a>
            <a class="dropdown-item" href="#"><i class="ti ti-discount me-2"></i> Create Promotion</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="ti ti-settings me-2"></i> Settings</a>
          </div>
        </div>
        
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger d-flex align-items-center">
            <i class="fas fa-sign-out-alt me-2"></i> Logout
          </button>
        </form>
      </div>
    </div>

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between p-3">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('admin/assets/images/logos/logo.svg')}}" alt="" width="30" />
            <span class="ms-2 d-none d-md-inline text-white">Admin Panel</span>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="fas fa-chart-line me-2"></i>
              <span class="hide-menu">Dashboard</span>
            </li>
            <li class="sidebar-item active">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <i class="ti ti-dashboard"></i>
                <span class="hide-menu">Overview</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="fas fa-shopping-cart me-2"></i>
              <span class="hide-menu">E-Commerce</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-package"></i>
                <span class="hide-menu">Products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-category"></i>
                <span class="hide-menu">Categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-shopping-cart"></i>
                <span class="hide-menu">Orders</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-discount"></i>
                <span class="hide-menu">Discounts</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="fas fa-users me-2"></i>
              <span class="hide-menu">Customers</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-user"></i>
                <span class="hide-menu">Manage Customers</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-message-circle"></i>
                <span class="hide-menu">Reviews</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="fas fa-chart-pie me-2"></i>
              <span class="hide-menu">Analytics</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-chart-bar"></i>
                <span class="hide-menu">Sales Reports</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-traffic-cone"></i>
                <span class="hide-menu">Traffic Analysis</span>
              </a>
            </li>
            
            <li class="nav-small-cap">
              <i class="fas fa-cog me-2"></i>
              <span class="hide-menu">Settings</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-settings"></i>
                <span class="hide-menu">General Settings</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-credit-card"></i>
                <span class="hide-menu">Payment Methods</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <i class="ti ti-truck"></i>
                <span class="hide-menu">Shipping Options</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->
    
    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    <div class="d-flex align-items-center">
                      <div class="bg-light rounded-circle p-2 me-3">
                        <i class="ti ti-shopping-cart text-primary"></i>
                      </div>
                      <div>
                        <h6 class="mb-1">New Order Received</h6>
                        <p class="mb-0 text-muted">Just now</p>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    <div class="d-flex align-items-center">
                      <div class="bg-light rounded-circle p-2 me-3">
                        <i class="ti ti-user-plus text-success"></i>
                      </div>
                      <div>
                        <h6 class="mb-1">New customer registered</h6>
                        <p class="mb-0 text-muted">15 minutes ago</p>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="javascript:void(0)" class="dropdown-item text-center text-primary">
                    View all notifications
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ti ti-help fs-5"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('admin/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-settings fs-6"></i>
                      <p class="mb-0 fs-3">Account Settings</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-bell fs-6"></i>
                      <p class="mb-0 fs-3">Notifications</p>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Header End -->
      
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!-- Dashboard Stats -->
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="card dashboard-card bg-primary text-white mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Total Sales</h6>
                      <h2 class="mb-0">$24,895</h2>
                      <p class="small mb-0"><i class="ti ti-arrow-up me-1"></i> 18% increase</p>
                    </div>
                    <div class="bg-white rounded-circle p-3">
                      <i class="ti ti-shopping-cart text-primary fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card dashboard-card bg-success text-white mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Customers</h6>
                      <h2 class="mb-0">1,258</h2>
                      <p class="small mb-0"><i class="ti ti-arrow-up me-1"></i> 12% increase</p>
                    </div>
                    <div class="bg-white rounded-circle p-3">
                      <i class="ti ti-users text-success fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card dashboard-card bg-info text-white mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Orders</h6>
                      <h2 class="mb-0">425</h2>
                      <p class="small mb-0"><i class="ti ti-arrow-up me-1"></i> 8% increase</p>
                    </div>
                    <div class="bg-white rounded-circle p-3">
                      <i class="ti ti-shopping-bag text-info fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card dashboard-card bg-warning text-white mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Revenue</h6>
                      <h2 class="mb-0">$18,256</h2>
                      <p class="small mb-0"><i class="ti ti-arrow-up me-1"></i> 15% increase</p>
                    </div>
                    <div class="bg-white rounded-circle p-3">
                      <i class="ti ti-currency-dollar text-warning fs-4"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Main Content Row -->
          <div class="row">
            <div class="col-lg-8">
              <div class="card dashboard-card mb-4">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Sales Overview</h4>
                      <p class="card-subtitle">
                        Monthly revenue performance
                      </p>
                    </div>
                    <div class="ms-auto">
                      <select class="form-select theme-select border-0" aria-label="Default select example">
                        <option value="1">Last 7 Days</option>
                        <option value="2" selected>Last 30 Days</option>
                        <option value="3">Last 90 Days</option>
                      </select>
                    </div>
                  </div>
                  <div id="sales-overview" class="mt-4 mx-n6" style="min-height: 300px;">
                    <!-- Chart would be rendered here -->
                    <div class="d-flex align-items-center justify-content-center h-100">
                      <div class="text-center">
                        <i class="ti ti-chart-line fs-1 text-muted"></i>
                        <p class="mt-2 text-muted">Sales chart would appear here</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4">
              <div class="card dashboard-card mb-4">
                <div class="card-body">
                  <h4 class="card-title">Top Selling Products</h4>
                  <div class="mt-4">
                    <div class="d-flex align-items-center mb-4">
                      <div class="bg-light rounded p-2 me-3">
                        <i class="ti ti-device-laptop text-primary fs-5"></i>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Gaming Laptop</h6>
                        <p class="mb-0 text-muted">$1,200 × 45 sold</p>
                      </div>
                      <div class="bg-light-primary text-primary px-2 py-1 rounded">
                        $54,000
                      </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                      <div class="bg-light rounded p-2 me-3">
                        <i class="ti ti-device-mobile text-success fs-5"></i>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Smartphone</h6>
                        <p class="mb-0 text-muted">$800 × 68 sold</p>
                      </div>
                      <div class="bg-light-success text-success px-2 py-1 rounded">
                        $54,400
                      </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                      <div class="bg-light rounded p-2 me-3">
                        <i class="ti ti-headphones text-info fs-5"></i>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Wireless Headphones</h6>
                        <p class="mb-0 text-muted">$150 × 120 sold</p>
                      </div>
                      <div class="bg-light-info text-info px-2 py-1 rounded">
                        $18,000
                      </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                      <div class="bg-light rounded p-2 me-3">
                        <i class="ti ti-watch text-warning fs-5"></i>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Smart Watch</h6>
                        <p class="mb-0 text-muted">$250 × 62 sold</p>
                      </div>
                      <div class="bg-light-warning text-warning px-2 py-1 rounded">
                        $15,500
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Recent Orders Row -->
          <div class="row">
            <div class="col-12">
              <div class="card dashboard-card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Recent Orders</h4>
                      <p class="card-subtitle">
                        Latest customer orders
                      </p>
                    </div>
                    <div class="ms-auto mt-3 mt-md-0">
                      <button class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i> Add New Order
                      </button>
                    </div>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Customer</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#ORD-7582</td>
                          <td>John Smith</td>
                          <td>24 Oct 2023</td>
                          <td>$1,245</td>
                          <td><span class="badge bg-success">Completed</span></td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>#ORD-7581</td>
                          <td>Emma Johnson</td>
                          <td>23 Oct 2023</td>
                          <td>$845</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>#ORD-7580</td>
                          <td>Michael Brown</td>
                          <td>23 Oct 2023</td>
                          <td>$2,145</td>
                          <td><span class="badge bg-info">Processing</span></td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>#ORD-7579</td>
                          <td>Sarah Wilson</td>
                          <td>22 Oct 2023</td>
                          <td>$925</td>
                          <td><span class="badge bg-success">Completed</span></td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                          </td>
                        </tr>
                        <tr>
                          <td>#ORD-7578</td>
                          <td>David Miller</td>
                          <td>22 Oct 2023</td>
                          <td>$1,575</td>
                          <td><span class="badge bg-danger">Cancelled</span></td>
                          <td>
                            <button class="btn btn-sm btn-outline-primary">View</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">© 2023 Online Shopping Admin Panel. Designed by <a href="#" class="pe-1 text-primary text-decoration-underline">Your Team</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
  
  <script>
    // Simple sidebar toggle functionality for mobile
    document.getElementById('headerCollapse').addEventListener('click', function() {
      document.querySelector('.left-sidebar').classList.toggle('show');
    });
    
    // Active menu item handling
    document.querySelectorAll('.sidebar-item').forEach(item => {
      item.addEventListener('click', function() {
        document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>