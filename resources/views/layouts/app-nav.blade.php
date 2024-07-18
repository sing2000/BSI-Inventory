@php
$navItems = [
    ['route' => 'inventory', 'label' => 'INVENTORY', 'roles' => [1, 3]],
    ['route' => 'suppliers', 'label' => 'SUPPLIER', 'roles' => [1, 3]],
    ['route' => 'items', 'label' => 'ITEM', 'roles' => [1, 3]],
    ['route' => 'orders', 'label' => 'ORDER', 'roles' => [1, 3]],
    ['route' => 'pos', 'label' => 'POS', 'roles' => [1, 2, 4]],
    ['route' => 'products', 'label' => 'PRODUCT', 'roles' => [1, 2, 4]],
    ['route' => 'add-ons', 'label' => 'ADD-ONS', 'roles' => [1, 2, 4]],
    ['route' => 'reports', 'label' => 'REPORTS', 'roles' => [1, 3, 4]],
];
@endphp
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
            <img src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5 cursor-pointer" id="profileDropdownToggle">
            <div id="profileDropdown" class="hidden absolute right-1 mt-2 w-52 bg-white rounded-md shadow-lg border-2 border-yellow-400 z-10">
                <div class="py-0">
                    <a href="dashboard" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                    <a href="setting" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Settings</a>
                    <a href="account" class="block px-4 py-2 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account</a>
                    <a href="#" class="block px-5 py-3 text-sm md:text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-b-2 border-yellow-400" id="editProfile">Profile</a>
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
      @include('popups.edit-profile-popup')
    </header>

    <div class="flex flex-col items-center py-6 -mb-4 -mt-10 flex-grow">
        <!-- Hamburger Icon for Small Screens -->
        <button id="menuToggleButton" class="block md:hidden mb-1" onclick="toggleMenu()">
            <i id="menuToggleIcon" class="fas fa-bars text-1xl bg-yellow-400 py-1 px-2"></i>
        </button> 

        <div class="w-full flex flex-col items-center">
            @if(request()->is('home'))
            @else
                <div id="navMenu" class="flex flex-wrap justify-center space-x-2 hidden md:flex">
                    @foreach($navItems as $item)
                        @if(in_array(Auth::user()->InvRole->R_id, $item['roles']))
                            <a href="{{ $item['route'] }}" class="{{ request()->is($item['route']) ? 'bg-primary text-white text-' : 'bg-yellow-400 text-primary' }} rounded-lg px-4 py-2 text-sm mb-2 font-bold">
                                {{ $item['label'] }}
                            </a>
                        @endif
                    @endforeach
                </div>
                <div id="menuLine" class="h-1 bg-gray-500 rounded-sm"></div>
            @endif
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
<style>
    #logout-form{
   margin-top: -12px;
 }
</style>