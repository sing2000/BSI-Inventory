{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>B Scientific Instrument</title>
    <link rel="icon" type="image" href="images/official_logo1.png" alt="favicon">
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <div id="body" class="active">
                <!-- navbar navigation component -->
                <nav class="navbar navbar-expand-lg navbar-white bg-white">
                    <button type="button" class="btn btn-boder">
                        <img src="images/official_logo1.png" class="logo-off" alt="logo">
                    </button>
                    <div class="collapse navbar-collapse" >
                        <ul>
                        </ul>
                    </div>
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{-- {{ Auth::user()->name }} --}}
                            {{-- <button class="btn btn-boder">
                                <img src="images/user.jpg" class="logo-user" alt="logo">
                            </button>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">
                                {{ __('Dashboard') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('setting') }}">
                                {{ __('Setting') }}
                            </a>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                            document.getElementById('#').submit();">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('accounting') }}">
                                {{ __('Account') }}
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </ul>
                </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </div>
</body>
</html> --}} 


@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="min-h-screen flex flex-col bg-background text-foreground">
    <header class="flex flex-row items-center space-x-4 mt-2">
      <div class="ml-5">
          <img src="images/official_logo.png" alt="BSI Logo" class="h-10 w-12 rounded">
      </div>
      <div class="bg-primary p-3 shadow-md flex items-end justify-end flex-1">
          <div class="space-x-2 items-end justify-end">
              <h1 class="text-sm font-bold text-primary-foreground">BSI ADMIN</h1>
          </div>
      </div>
      <div class="relative">
        <img src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5 cursor-pointer" id="profileDropdownToggle">
        <div id="profileDropdown" class="hidden absolute right-1 mt-2 w-56 bg-white rounded-md shadow-lg border-2 border-green-500 z-10">
            <div class="py-1">
                <a href="dashboard" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                <a href="setting" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Settings</a>
                <a href="account" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account</a>
                <a href="#" class="block px-5 py-3 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-2 border-green-500">Contact Admin</a>
                <a class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900" href="{{ route('logout') }}"
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
    <div class="flex flex-col items-center py-6 -mb-4 -mt-10 flex-grow">
        <!-- Hamburger Icon for Small Screens -->
        <button id="menuToggleButton" class="block md:hidden mb-1" onclick="toggleMenu()">
            <i id="menuToggleIcon" class="fas fa-bars text-1xl bg-yellow-400 py-1 px-2"></i>
        </button> 
        <div class="w-full flex flex-col items-center">
            <div id="navMenu" class="flex flex-wrap justify-center space-x-2 hidden md:flex">
                <a href="inventory" class="{{ request()->is('inventory') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    INVENTORY
                </a>
                <a href="suppliers" class="{{ request()->is('suppliers') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    SUPPLIER
                </a>
                <a href="items" class="{{ request()->is('items') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    ITEM
                </a>
                <a href="orders" class="{{ request()->is('orders') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    ORDER
                </a>
                <a href="pos" class="{{ request()->is('pos') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    POS
                </a>
                <a href="products" class="{{ request()->is('products') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    PRODUCT
                </a>
                <a href="add-ons" class="{{ request()->is('add-ons') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    ADD-ONS
                </a>
                <a href="reports" class="{{ request()->is('reports') ? 'bg-yellow-400 text-blue-800' : 'bg-gray-300 text-blue-600' }} border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm mb-2">
                    REPORTS
                </a>
            </div>
            <div id="menuLine" class="h-1 bg-gray-500 rounded-sm"></div>
        </div>
    </div>
    
     
    
    <main class="flex-grow">
      @yield('content')
    </main>

@include('layouts.footer')

</div>

<script>
    function toggleMenu() {
        var navMenu = document.getElementById('navMenu');
        var menuToggleIcon = document.getElementById('menuToggleIcon');
        var menuLine = document.getElementById('menuLine');
        
        navMenu.classList.toggle('hidden');
        
        if (navMenu.classList.contains('hidden')) {
            menuToggleIcon.classList.remove('fa-times');
            menuToggleIcon.classList.add('fa-bars');
        } else {
            menuToggleIcon.classList.remove('fa-bars');
            menuToggleIcon.classList.add('fa-times');
        }
        setMenuLineWidth();
    }

    function setMenuLineWidth() {
        var navMenu = document.getElementById('navMenu');
        var menuLine = document.getElementById('menuLine');

        if (window.innerWidth < 768 && navMenu.classList.contains('hidden')) {
            var menuToggleButton = document.getElementById('menuToggleButton');
            menuLine.style.width = menuToggleButton.offsetWidth + 'px';
        } else {
            menuLine.style.width = navMenu.offsetWidth + 'px';
        }
    }

    window.onload = function() {
        setMenuLineWidth();
    }

    window.onresize = function() {
        setMenuLineWidth();
    }

</script>
  
{{-- profileDropdown --}}
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