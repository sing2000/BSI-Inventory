@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="min-h-screen flex flex-col bg-background text-foreground">
  <header class="flex flex-row items-center space-x-4 mt-2">
      <div class="ml-5">
        <div class="ml-0">
            @if(Auth::check() && Auth::user()->invshop && Auth::user()->invshop->S_logo)
                <img src="{{ asset('storage/' . Auth::user()->invshop->S_logo) }}" alt="Shop Logo" class="h-10 w-12 rounded">
            @else
                <img src="{{ asset('images/official_logo.png') }}" alt="Default Logo" class="h-10 w-12 rounded">
            @endif
          </div>
      </div>
      <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
          <div class="space-x-2 items-end justify-end">
              <h1 class="text-sm font-bold text-primary-foreground">{{ Auth::user()->U_name }}</h1>
          </div>
      </div>
      <div class="relative">
    @include('profile.profile')
        
      </div>
    @include('popups.edit-profile-popup')
  </header>

  <div class="flex flex-col items-center py-6">
      <div class="flex space-x-2 -mt-10">
          <a href="setting" class="bg-primary text-white rounded-lg px-4 py-2 text-sm font-bold">
              SETTING
          </a>
      </div>
      <hr class="w-10 h-1 bg-gray-500 mt-2 rounded-sm">
  </div>

  <div class="flex flex-1">
    <div class="relative">
        <button class="block lg:hidden p-2 ml-2 bg-yellow-400 text-gray-700" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="fixed inset-0 bg-black bg-opacity-50 hidden" id="menu-overlay"></div>
        <aside class="text-gray-500 w-64 h-full p-6 bg-gray-200 fixed top-0 left-0 transform -translate-x-full transition-transform lg:transform-none lg:static lg:w-64 lg:h-full lg:p-6 lg:bg-gray-200" id="sidebar">
            <nav class="flex flex-col py-4">
                <a href="#shop" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1 bg-yellow-400">
                    <i class="fas fa-store mr-2"></i> Shop
                </a>
                <a href="#location" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-map-marker-alt mr-2"></i> Location
                </a>
                <a href="#user" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-user mr-2"></i> User
                </a>
                <a href="#category" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-list mr-2"></i> Category
                </a>
                <a href="#role" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-user-tag mr-2"></i> Role
                </a>
                <a href="#module" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-puzzle-piece mr-2"></i> Module
                </a>
                <a href="#product" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-box-open mr-2"></i> Product
                </a>
                <a href="#addons" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-plus-circle mr-2"></i> Add-ons
                </a>
                <a href="#uom-size" class="flex items-center py-2 px-4 hover:bg-yellow-400 rounded-lg my-1">
                    <i class="fas fa-ruler-combined mr-2"></i> UOM/Size
                </a>
            </nav>
        </aside>
    </div>

    {{-- content here --}}
      <main class="flex-1 p-6">
        <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6 bg-gray-100 rounded-lg">
                        <img src="images/shop.jpg" alt="Shop Image" class="rounded-lg mb-4 h-64 w-full object-cover">
                        <h1 class="text-2xl font-semibold mb-2 text-center text-primary">Welcome, HOMETOWN COFFEE</h1>
                        <div class="flex">
                            <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                                <div class="flex items-center mb-4">
                                    <h2 class="text-lg font-medium">Address:</h2>
                                </div>
                                <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                                <a href="#" class="text-blue-500">Manage your location</a>
                            </div>
                            {{-- <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                                <div class="flex items-center mb-4">
                                    <h2 class="text-lg font-medium">Address:</h2>
                                </div>
                                <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                                <a href="#" class="text-blue-500">Manage your location</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6 bg-gray-100 rounded-lg">
                        <img src="images/shop.jpg" alt="Shop Image" class="rounded-lg mb-4 h-64 w-full object-cover">
                        <h1 class="text-2xl font-semibold mb-2 text-center text-primary">Welcome, HOMETOWN COFFEE</h1>
                        <div class="flex">
                            <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                                <div class="flex items-center mb-4">
                                    <h2 class="text-lg font-medium">Address:</h2>
                                </div>
                                <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                                <a href="#" class="text-blue-500">Manage your location</a>
                            </div>
                            {{-- <div class="flex flex-col items-start p-4 bg-gray-200 rounded-lg m-2 w-full">
                                <div class="flex items-center mb-4">
                                    <h2 class="text-lg font-medium">Address:</h2>
                                </div>
                                <p class="text-gray-600 mb-4">រាជធានី, Street 1972, Phnom Penh 120801</p>
                                <a href="#" class="text-blue-500">Manage your location</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>                             
      </main>
  </div>

  @include('layouts.footer')

</div>


<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        var overlay = document.getElementById('menu-overlay');
        if (sidebar.classList.contains('-translate-x-full')) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    });

    document.getElementById('menu-overlay').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        var overlay = document.getElementById('menu-overlay');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>
