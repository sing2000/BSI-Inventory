@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="bg-background flex flex-col items-center flex-grow px-4 md:px-0 mt-2">
    <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5">
      <div class="relative">
        <button id="createButton" class="bg-primary text-primary-foreground py-1 px-8 rounded-lg md:mb-0 focus:outline-none">
          CREATE
          <i class="fas fa-caret-down ml-2"></i>
        </button>
        <div id="dropdownMenu" class="absolute left-1 mt-4 w-60 bg-white rounded-md shadow-lg border-2 border-green-400 hidden z-10">
          <a href="#" id="createSupplier" class="block px-6 py-3 text-gray-700 text-lg hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out border-b">Supplier</a>
          <a href="#" id="createItem" class="block px-6 py-3 text-gray-700 text-lg hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out border-b">Item</a>
          <a href="#" id="createOrder" class="block px-6 py-3 text-gray-700 text-lg hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out">Order</a>
        </div>      
      </div>
      <div class="relative flex w-full md:w-auto">
        <form id="searchForm" method="GET" class="w-full md:w-auto flex items-center">
            <input id="searchInput" type="text" placeholder="Search..." class="border border-input rounded-full py-1 px-4 pl-10 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-primary" required />
            <button type="submit" class="bg-gray-200 rounded-full py-1 px-4 absolute right-0 top-0 mt-1 mr-2 flex items-center justify-center">
                <i class="fas fa-search text-gray-500"></i>
            </button>
        </form>
      </div>
    </div>
    <div class="w-full md:w-4/5 border-2 border-yellow-400 p-2 font-times">
      <div class="overflow-x-auto">
        <h4 class="text-center font-bold pb-4 text-lg">DETAIL INVENTORY INFORMATION</h4>
        <table class="min-w-full bg-white border-collapse">
          <thead>
            <tr class="bg-primary text-primary-foreground text-lg">
              <th class="py-4 px-6 border border-white">INVENTORY</th>
              <th class="py-4 px-6 border border-white">INVENTORY</th>
              <th class="py-4 px-6 border border-white">INVENTORY</th>
              <th class="py-4 px-6 border border-white">INVENTORY</th>
              <th class="py-4 px-6 border border-white">INVENTORY</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-zinc-200 text-base border-t-4 border-white">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
            <tr class="bg-zinc-300 text-base">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
            <tr class="bg-zinc-200 text-base">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
            <tr class="bg-zinc-300 text-base">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
            <tr class="bg-zinc-200 text-base">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
            <tr class="bg-zinc-300 text-base">
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
              <td class="py-4 px-6 border border-white">Text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Include the popup form -->
@include('popups.create-supplier-popup')
@include('popups.create-item-popup')
@include('popups.create-order-popup')


<script>
  document.addEventListener('DOMContentLoaded', () => {
    const createButton = document.getElementById('createButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const createSupplier = document.getElementById('createSupplier');
    const createItem = document.getElementById('createItem');
    const createOrder = document.getElementById('createOrder');
    
    const popupSupplier = document.getElementById('popupSupplier');
    const popupItem = document.getElementById('popupItem');
    const popupOrder = document.getElementById('popupOrder');

    const closeSupplierPopup = document.getElementById('closeSupplierPopup');
    const closeItemPopup = document.getElementById('closeItemPopup');
    const closeOrderPopup = document.getElementById('closeOrderPopup');

    createButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    createSupplier.addEventListener('click', (event) => {
      event.preventDefault();
      dropdownMenu.classList.add('hidden');
      popupSupplier.classList.remove('hidden');
    });

    createItem.addEventListener('click', (event) => {
      event.preventDefault();
      dropdownMenu.classList.add('hidden');
      popupItem.classList.remove('hidden');
    });

    createOrder.addEventListener('click', (event) => {
      event.preventDefault();
      dropdownMenu.classList.add('hidden');
      popupOrder.classList.remove('hidden');
    });

    closeSupplierPopup.addEventListener('click', () => {
      popupSupplier.classList.add('hidden');
    });

    closeItemPopup.addEventListener('click', () => {
      popupItem.classList.add('hidden');
    });

    closeOrderPopup.addEventListener('click', () => {
      popupOrder.classList.add('hidden');
    });

    // Hide dropdown when clicking outside of it
    document.addEventListener('click', (event) => {
      if (!createButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });
  });
</script>
@endsection
