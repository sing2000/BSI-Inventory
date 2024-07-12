
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="min-h-screen bg-background text-foreground flex flex-col">
    <header class="flex flex-row items-center space-x-4 mt-2">
        <div class="ml-5">
            @if(Auth::check() && Auth::user()->invshop && Auth::user()->invshop->S_logo)
            <img src="{{ asset('storage/' . Auth::user()->invshop->S_logo) }}" alt="Shop Logo" class="h-10 w-12 rounded">
        @else
            <img src="{{ asset('images/official_logo.png') }}" alt="Default Logo" class="h-10 w-12 rounded">
        @endif
        </div>
        <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
            <div class="space-x-2 items-end justify-end">
                <h1 class="text-sm font-bold text-primary-foreground">{{ Auth::user()->U_name }}</h1>
            </div>
        </div>
        <div class="relative">
            <img src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5 cursor-pointer"
                id="profileDropdownToggle">
            <div id="profileDropdown"
                class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg border-2 border-green-500 z-10">
                <div class="py-1">
                    <a href="dashboard" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                    <a href="setting" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Settings</a>
                    <a href="account" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account</a>
                    <a href="#" class="block px-5 py-3 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-2 border-green-500">Contact Admin</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
            </div>
        </div>
    </header>
        <!-- Main content section -->
        <main class="flex-grow flex items-center justify-center">
            <div class="p-6 w-4/5 mx-auto">
              <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Dashboard -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/dashboard" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-chart-line text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Dashboard</span>
                  </a>
                </div>
            
                <!-- Inventory -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/inventory" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-boxes text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Inventory</span>
                  </a>
                </div>
            
                <!-- Suppliers -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/suppliers" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-truck text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Suppliers</span>
                  </a>
                </div>
            
                <!-- Items -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/items" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-shopping-basket text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Items</span>
                  </a>
                </div>
            
                <!-- Sales -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/sales" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-chart-bar text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Sales</span>
                  </a>
                </div>
            
                <!-- Orders -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/orders" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-shopping-cart text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Orders</span>
                  </a>
                </div>
            
                <!-- POS -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/pos" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cash-register text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">POS</span>
                  </a>
                </div>
            
                <!-- Reports -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/reports" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-file-alt text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Reports</span>
                  </a>
                </div>
            
                <!-- Products -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/products" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cube text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Products</span>
                  </a>
                </div>
            
                <!-- Add-ons -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/add-ons" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-puzzle-piece text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Add-ons</span>
                  </a>
                </div>
            
                <!-- Accounting -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/accounting" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-calculator text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Accounting</span>
                  </a>
                </div>
            
                <!-- Settings -->
                <div class="flex flex-col mb-4 items-center">
                  <a href="/setting" class="flex flex-col items-center">
                    <div class="h-20 w-20 sm:h-24 sm:w-24 border-2 border-yellow-400 rounded-md flex items-center justify-center">
                      <i class="fas fa-cog text-6xl text-gray-500"></i>
                    </div>
                    <span class="mt-0 text-lg text-muted-foreground text-center">Settings</span>
                  </a>
                </div>
              </div>
            </div>
        </main>
        @include('layouts.footer')
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const profileDropdownToggle = document.getElementById('profileDropdownToggle');
    const profileDropdown = document.getElementById('profileDropdown');

    profileDropdownToggle.addEventListener('click', function () {
        profileDropdown.classList.toggle('hidden');
    });
    document.addEventListener('click', function (event) {
        if (!profileDropdownToggle.contains(event.target)) {
            profileDropdown.classList.add('hidden');
        }
    });
});
</script>
      




