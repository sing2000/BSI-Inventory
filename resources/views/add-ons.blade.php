@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="bg-background flex flex-col items-center flex-grow px-4 md:px-0 mt-2">
    <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5">
      <a href="#" id="createButton" class="bg-primary text-primary-foreground py-1 px-8 rounded-lg md:mb-3 sm:mb-2">CREATE</a>
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
        <h4 class="text-center font-bold pb-4 text-lg">ADD-ONS INFORMATION</h4>
        <table class="min-w-full bg-white border-collapse">
          <thead>
            <tr class="bg-primary text-primary-foreground text-lg">
              <th class="py-4 px-4 border border-white">Addons ID</th>
              <th class="py-4 px-4 border border-white">Addons Name</th>
              <th class="py-4 px-4 border border-white">Percentage</th>
              <th class="py-4 px-4 border border-white">Qty</th>
              <th class="py-4 px-4 border border-white">UOM</th>
              <th class="py-4 px-4 border border-white">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Addons as $data)
            <tr class="{{ $loop->index % 2 === 0 ? 'bg-zinc-200' : 'bg-zinc-300' }} text-base {{ $loop->first ? 'border-t-4' : '' }} text-center border-white">
              <td class="text-center py-3 px-4 border border-white">{{ $data->Addons_id ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->Addons_name ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->Percentage ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->Qty ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->uom->UOM_name ?? 'null' }}</td>
              <td class="py-3 border border-white">
                <button class="relative bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group">
                  <i class="fas fa-edit fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"  onclick="if(confirm('{{ __('Are you sure you want to delete?') }}')) { window.location.href='add-ons/destroy/{{$data->Addons_id}}'; }" >Delete</span>
                </button>
                <button class="relative bg-red-500 hover:bg-red-600 active:bg-red-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group">
                  <i class="fas fa-trash-alt fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out" >Edit</span>
                </button>
                <button class="relative bg-green-500 hover:bg-green-600 active:bg-green-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group">
                    <i class="fas fa-toggle-on fa-xs"></i>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Active</span>
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-4">
          {{ $Addons->links() }}
        </div>
      </div>
    </div>
  </div>
  @include('popups.create-addon-popup')
  @include('popups.edit-addon-popup')
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const createButton = document.getElementById('createButton');
    const createPopup = document.getElementById('popupAddon');
    const closeCreatePopup = document.getElementById('closeAddonPopup');
    
    const editButtons = document.querySelectorAll('.edit-addon');
    const editPopup = document.getElementById('editAddonPopup');
    const closeEditPopup = document.getElementById('closeEditAddonPopup');

    createButton.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      createPopup.classList.remove('hidden');
    });

    closeCreatePopup.addEventListener('click', function() {
      createPopup.classList.add('hidden');
    });

    editButtons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        // Show edit popup
        editPopup.classList.remove('hidden');
      });
    });

    closeEditPopup.addEventListener('click', function() {
      editPopup.classList.add('hidden');
    });

  });
</script>
@endsection
