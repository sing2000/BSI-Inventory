{{-- @extends('layouts.app-nav')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('dashboard') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/dashboard.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Dashboard</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('dashboard') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/stock.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Inventory</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('suppliers') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/supplier-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Suppliers</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('suppliers') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/box-1.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Items</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('sales') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/investment-analysis-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Sales</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('orders') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                       <img src="images/orders-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a> 
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Orders</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('pos') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/cashier-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>POS</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('reports') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/online-ads-report-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Reports</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('products') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/goods-contents-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Products</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('add-ons') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/puzzle-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Add-ons</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <a href="{{ route('accounting') }}" class="card-link">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/ledger-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Accounting</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mt-5">
                    <div class="card">
                        <a href="{{ route('setting') }}" class="card-link">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="icon-big text-center">
                                        <img src="images/setting-icon.svg" class="imag-svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class=" text-center">
                                <p class="text-muted"><strong>Setting</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/chartsjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-charts.js') }}"></script>
@endsection --}}
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="min-h-screen bg-background text-foreground">
  <header class="flex flex-row items-center space-x-4 mt-2">
    <div class="ml-5">
      <img src="images/official_logo.png" alt="BSI Logo" class="h-10 w-12 rounded">
    </div>
    <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
      <div class="space-x-2 items-end justify-end">
        <h1 class="text-sm font-bold text-primary-foreground">BSI ADMIN</h1>
      </div>
    </div>
    <div>
      <img  src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5">
    </div>
  </header>
        <!-- Main content section -->
        <main class="flex-grow flex items-center justify-center mt-4">
            <div class="p-8 w-4/5 mx-auto">
              <div class="grid grid-cols-4 gap-8">
                <!-- Dashboard -->
                <div class="flex flex-col items-center">
                  <a href="/dashboard" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-chart-line text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Dashboard</span>
                  </a>
                </div>
      
                <!-- Inventory -->
                <div class="flex flex-col items-center">
                  <a href="/inventory" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-boxes text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Inventory</span>
                  </a>
                </div>
      
                <!-- Suppliers -->
                <div class="flex flex-col items-center">
                  <a href="/suppliers" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-truck text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Suppliers</span>
                  </a>
                </div>
      
                <!-- Items -->
                <div class="flex flex-col items-center">
                  <a href="/items" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-shopping-basket text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Items</span>
                  </a>
                </div>
      
                <!-- Sales -->
                <div class="flex flex-col items-center">
                  <a href="/sales" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-chart-bar text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Sales</span>
                  </a>
                </div>
      
                <!-- Orders -->
                <div class="flex flex-col items-center">
                  <a href="/orders" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-shopping-cart text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Orders</span>
                  </a>
                </div>
      
                <!-- POS -->
                <div class="flex flex-col items-center">
                  <a href="/pos" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cash-register text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">POS</span>
                  </a>
                </div>
      
                <!-- Reports -->
                <div class="flex flex-col items-center">
                  <a href="/reports" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-file-alt text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Reports</span>
                  </a>
                </div>
      
                <!-- Products -->
                <div class="flex flex-col items-center">
                  <a href="/products" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cube text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Products</span>
                  </a>
                </div>
      
                <!-- Add-ons -->
                <div class="flex flex-col items-center">
                  <a href="/add-ons" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-puzzle-piece text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Add-ons</span>
                  </a>
                </div>
      
                <!-- Accounting -->
                <div class="flex flex-col items-center">
                  <a href="/accounting" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-calculator text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Accounting</span>
                  </a>
                </div>
      
                <!-- Settings -->
                <div class="flex flex-col items-center">
                  <a href="/setting" class="flex flex-col items-center">
                    <div class="h-20 w-20 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cog text-4xl text-gray-500"></i>
                    </div>
                    <span class="mt-2 text-muted-foreground text-center">Settings</span>
                  </a>
                </div>
              </div>
            </div>
          </main>
      
          <!-- Footer section -->
          <footer class="w-full bg-blue-600 text-white py-16 mt-16 text-center">
            <p>BSI Inventory System version 1.0.0</p>
            <h2 class="text-lg font-bold">MAIN PAGE (ADMIN)</h2>
          </footer>
        </div>
      </body>
      




