@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="bg-background flex flex-col items-center flex-grow px-4 md:px-0 mt-2">
    <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5">
      <a href="#" id="createButton" class="bg-primary text-primary-foreground py-1 px-8 rounded-lg md:mb-3 sm:mb-2">CREATE</a>
      <div class="relative flex w-full md:w-auto">
        <form id="searchForm" method="GET" class="w-full md:w-auto flex items-center">
          <input  id="searchInput" type="text" name="search" placeholder="Search..." class="border border-input rounded-full py-1 px-4 pl-10 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-primary"  />
          <button type="submit" class="bg-gray-200 rounded-full py-1 px-4 absolute right-0 top-0 mt-1 mr-2 flex items-center justify-center">
            <i class="fas fa-search text-gray-500"></i>
          </button> 
        </form>
      </div>
    </div>
    <div class="w-full md:w-4/5 border-2 border-yellow-400 p-2 font-times">
      <div class="overflow-x-auto">
        <h4 class="text-center font-bold pb-4 text-lg">PRODUCTS INFORMATION</h4>
        <table class="min-w-full bg-white border-collapse">
          <thead>
            <tr class="bg-primary text-primary-foreground text-lg">
              <th class="py-4 px-4 border border-white">Pro ID</th>
              <th class="py-4 px-4 border border-white">Pro Name Eng</th>
              <th class="py-4 px-4 border border-white">Pro Name Kh</th>
              <th class="py-4 px-4 border border-white">Pro Category</th>
              <th class="py-4 px-4 border border-white">Image</th>
              <th class="py-4 px-4 border border-white">Action</th>
            </tr>
          </thead>
          <tbody id="inventoryTableBody">
            @foreach ($products as $data)
            <tr class="{{ $loop->index % 2 === 0 ? 'bg-zinc-200' : 'bg-zinc-300' }} text-base {{ $loop->first ? 'border-t-4' : '' }} text-center border-white">
              <td class="text-center py-3 px-4 border border-white">{{ $data->Pro_id ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->Pro_name_eng ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->Pro_name_kh ?? 'null' }}</td>
              <td class="text-center py-3 px-4 border border-white">{{ $data->productCategory->Cate_Khname ?? 'null' }}</td>
              <td class="py-3 px-4 border border-white">
                @if($data->image)
                    <img src="{{ asset('storage/' . $data->image) }}" alt="Item Image" class="h-10 w-12 rounded">
                @else
                    <span class="text-gray-500"></span>
                @endif
              </td>
              <td class="py-3 border border-white">
                <button class="relative bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group"  onclick="openEditPopup({{ $data->Pro_id }}, '{{ $data->Pro_name_eng ?? 'null' }}','{{ $data->Pro_name_kh ?? 'null'}}','{{ $data->productCategory->Cate_Khname ?? 'null'}}','{{ $data->image ?? 'null'}}')">
                  <i class="fas fa-edit fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Edit</span>
                </button>
                <button class="relative bg-red-500 hover:bg-red-600 active:bg-red-700 text-white py-2 px-4 rounded-md focus:outline-none transition duration-150 ease-in-out group" onclick="if(confirm('{{ __('Are you sure you want to delete?') }}')) { window.location.href='products/destroy/{{$data->Pro_id}}'; }">
                  <i class="fas fa-trash-alt fa-xs"></i>
                  <span class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 px-2 py-1 text-xs text-white bg-gray-800 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">Delete</span>
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
          {{ $products->links() }}
        </div>
      </div>
    </div>
  </div>
  @include('popups.create-product-popup')
  @include('popups.edit-product-popup')
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/closePop.js') }}"></script>
<script>
  $('#searchForm').on('submit', function(event) {
      event.preventDefault();
      let searchQuery = $('#searchInput').val();

      $.ajax({
        url: '{{ route("products.search") }}',
        type: 'GET',
        data: { search: searchQuery },
        success: function(response) {
          $('#inventoryTableBody').html(response.html);
        }
      });
    });
    function openEditPopup(Pro_id, Pro_name_eng, Pro_name_kh, productCategory, image) {
    document.getElementById('editPro_id').value = Pro_id;
    document.getElementById('editPro_name_eng').value = Pro_name_eng;
    document.getElementById('editPro_name_kh').value = Pro_name_kh;
    // Set the category correctly
    document.getElementById('editCate_Khname').value = productCategory.Cate_Khname;
    const imagePreview = document.getElementById('imagePreview');
    if (image) {
        imagePreview.src = `/storage/${image}`;
        imagePreview.classList.remove('hidden');
    } else {
        imagePreview.src = '';
        imagePreview.classList.add('hidden');
    }

    document.getElementById('editProductPopup').action = `/products/${Pro_id}`;
    document.getElementById('editPopup').classList.remove('hidden');
}

</script>
@endsection
