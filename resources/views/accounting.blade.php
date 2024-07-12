@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="min-h-screen flex flex-col bg-background text-foreground">
  <header class="flex flex-row items-center space-x-4 mt-2 flex-grow">
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
            <h1 class="text-sm font-bold text-primary-foreground">BSI ADMIN</h1>
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
  
  <div class="flex-grow">
    <div class="flex flex-col items-center py-6">
      <div class="flex space-x-2 -mt-10">
        <a href="accounting" class="bg-yellow-400 text-blue-600 border-2 border-yellow-400 rounded-lg hover:bg-yellow-400 hover:text-blue-800 px-4 py-1 text-sm">
          ACCOUNTING
        </a>
      </div>
      <hr class=" w-10 h-1 bg-gray-500 mt-2 rounded-sm"></hr>
    </div>

    <div class="bg-background flex flex-col items-center mb-4">
        <div class="flex flex-col sm:flex-row justify-between items-center w-full sm:w-4/5 px-4 sm:px-0">
          <a href="#" class="bg-primary text-primary-foreground py-1 px-8 rounded-lg text-sm mb-4 sm:mb-0">CREATE</a>
          <div class="relative w-full sm:w-auto">
            <div class="flex flex-col sm:flex-row items-center rounded-lg px-2 py-1 mb-2">
              <label class="font-semibold sm:mb-0">Start Date:</label>
              <input type="date" class="border border-input p-1 px-4 rounded-lg mr-2 text-sm w-full sm:w-auto sm:mb-0" />
              <span class="mr-4 font-semibold sm:mb-0">End Date:</span>
              <input type="date" class="border border-input p-1 px-4 rounded-lg mr-2 text-sm w-full sm:w-auto sm:mb-0" />
              <button class="bg-yellow-400 text-primary-foreground py-1 px-4 rounded-lg text-sm">SEARCH</button>
            </div>
          </div>
        </div>
      </div>        

      <div class="bg-background text-foreground p-2 flex flex-col items-center justify-center">
        <div class="w-full md:w-4/5">
          <div class="flex flex-col md:flex-row gap-4 mb-6">
            <div class="flex flex-col w-full md:w-1/3">
              <div class="flex flex-col border-2 border-yellow-400 rounded-lg p-6 text-center bg-gradient-to-r shadow-lg mb-4 h-full">
                <h2 class="text-lg font-semibold text-yellow-700 mb-2">TOTAL SALE AMOUNT</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-3xl font-bold text-yellow-900">123</p>
              </div>
              <div class="flex flex-col border-2 border-yellow-400 rounded-lg p-6 text-center bg-gradient-to-r shadow-lg h-full">
                <h2 class="text-lg font-semibold text-yellow-700 mb-2">TOTAL ORDER AMOUNT</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-3xl font-bold text-yellow-900">123</p>
              </div>
            </div>
            <div class="flex flex-col w-full md:w-1/3">
              <div class="flex flex-col border-2 border-yellow-400 rounded-lg p-6 text-center bg-gradient-to-r shadow-lg mb-4 h-full">
                <h2 class="text-lg font-semibold text-yellow-700 mb-2">TOTAL INCOME</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-2xl font-bold text-yellow-900">USD: 123</p>
                <p class="text-2xl font-bold text-yellow-900">RIEL: 123</p>
              </div>
              <div class="flex flex-col border-2 border-yellow-400 rounded-lg p-6 text-center bg-gradient-to-r shadow-lg h-full">
                <h2 class="text-lg font-semibold text-yellow-700 mb-2">TOTAL EXPENSE</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <p class="text-2xl font-bold text-yellow-900">USD: 123</p>
                <p class="text-2xl font-bold text-yellow-900">RIEL: 123</p>
              </div>
            </div>
            <div class="flex flex-col w-full md:w-1/3">
              <div class="flex flex-col border-2 border-yellow-400 rounded-lg p-6 text-center bg-gradient-to-r shadow-lg h-full">
                <h2 class="text-lg font-semibold text-yellow-700 mb-2">TOTAL PROFIT</h2>
                <div class="border-t-2 border-yellow-500 my-6"></div>
                <div class="grid grid-cols-3 gap-6 text-center items-center">
                  <div>
                    <p class="text-3xl font-bold text-yellow-700">USD</p>
                    <div class="border-t-2 border-yellow-500 my-6"></div>
                    <p class="text-3xl font-bold text-yellow-900">123</p>
                  </div>
                  <div class="border-l-2 border-yellow-500 h-24 mx-auto mt-4"></div>
                  <div>
                    <p class="text-3xl font-bold text-yellow-700">RIEL</p>
                    <div class="border-t-2 border-yellow-500 my-6"></div>
                    <p class="text-3xl font-bold text-yellow-900">123</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </div>
  
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
