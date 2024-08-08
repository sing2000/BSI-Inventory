@php
$menuItems = [
    ['route' => '/dashboard', 'icon' => 'fas fa-chart-line', 'label' => 'Dashboard', 'roles' => [1,2]],
    ['route' => '/inventory', 'icon' => 'fas fa-boxes', 'label' => 'Inventory', 'roles' => [1, 3, 2]],
    ['route' => '/suppliers', 'icon' => 'fas fa-truck', 'label' => 'Suppliers', 'roles' => [1, 3, 2]],
    ['route' => '/items', 'icon' => 'fas fa-shopping-basket', 'label' => 'Items', 'roles' => [1, 3, 2 ]],
    ['route' => '/orders', 'icon' => 'fas fa-shopping-cart', 'label' => 'Orders', 'roles' => [1, 3, 2 ]],
    ['route' => '/pos', 'icon' => 'fas fa-cash-register', 'label' => 'POS', 'roles' => [1,4 ,2]],
    ['route' => '/products', 'icon' => 'fas fa-cube', 'label' => 'Products', 'roles' => [1,4,2]],
    ['route' => '/add-ons', 'icon' => 'fas fa-puzzle-piece', 'label' => 'Add-ons', 'roles' => [1,4,2]],
    ['route' => '/sales', 'icon' => 'fas fa-chart-bar', 'label' => 'Sales', 'roles' => [1,4,2]],
    ['route' => '/reports', 'icon' => 'fas fa-file-alt', 'label' => 'Reports', 'roles' => [1, 3, 4,2]],
    ['route' => '/accounting', 'icon' => 'fas fa-calculator', 'label' => 'Accounting', 'roles' => [1,2]],
    ['route' => '/setting', 'icon' => 'fas fa-cog', 'label' => 'Settings', 'roles' => [1,2]],
];
@endphp
@php
    $userRoleItems = array_filter($menuItems, function($item) {
        return in_array(Auth::user()->InvRole->R_id, $item['roles']);
    });
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta tags and other head content here -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
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
            <img src="images/user.jpg" alt="Admin Profile" class="h-10 w-10 rounded-full mr-5 cursor-pointer" id="profileDropdownToggle">
            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg border-2 border-bsicolor z-10">
                <div class="py-1">
                    <a href="dashboard" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Dashboard</a>
                    <a href="setting" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Settings</a>
                    <a href="account" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account</a>
                    <a href="#" class="block px-5 py-3 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-b-2 border-bsicolor" id="editProfile">Profile</a>
                    <a class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100 hover:text-gray-900" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    <!-- Main content section -->
    <main class="flex-grow flex items-center justify-center">
        <div class="p-6 w-4/5 mx-auto">
            <div class="{{ count($userRoleItems) === 5 ? 'custom-grid' : 'grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8' }}">
                @foreach($userRoleItems as $item)
                    <div class="flex flex-col mb-4 items-center">
                        <a href="{{ $item['route'] }}" class="flex flex-col items-center">
                            <div class="h-20 w-20 sm:h-24 sm:w-24 border-4 border-bsicolor rounded-md flex items-center justify-center">
                                <i class="{{ $item['icon'] }} text-4xl sm:text-6xl text-primary"></i>
                            </div>
                            <span class="mt-0 text-lg text-muted-foreground text-center">{{ $item['label'] }}</span>
                        </a>
                    </div>
                @endforeach
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
        if (!profileDropdownToggle.contains(event.target) && !profileDropdown.contains(event.target)) {
            profileDropdown.classList.add('hidden');
        }
    });
});
</script>
</body>
</html>
<style>
    .custom-grid {
        margin-left: 8%;
        width: 80%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        justify-items: center;
        align-items: center;
    }

    .custom-grid > div:nth-child(4) {
        grid-column: 2 / 3;
        margin-left: -110%;
    }

    .custom-grid > div:nth-child(5) {
        grid-column: 3 / 4;
        margin-left: -110%;
    }
</style>
