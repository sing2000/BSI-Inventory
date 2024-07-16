@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="bg-background flex flex-col items-center flex-grow px-4 md:px-0 mt-2">
    <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5 mb-4">
      <a href="#" id="createButton" class="bg-primary text-primary-foreground py-1 px-8 rounded-lg md:mb-0 sm:mb-2">CREATE</a>
      <div class="relative flex w-full md:w-auto">
        <form id="searchForm" method="GET" class="w-full md:w-auto flex items-center">
            <input id="searchInput" type="text" placeholder="Search..." class="border border-input rounded-full py-1 px-4 pl-10 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-primary" required />
            <button type="submit" class="bg-gray-200 rounded-full py-1 px-4 absolute right-0 top-0 mt-1 mr-2 flex items-center justify-center">
                <i class="fas fa-search text-gray-500"></i>
            </button>
        </form>
      </div>
    </div>
    <div class="w-full md:w-4/5 border-2 border-yellow-400 p-4 font-times">
      <div class="overflow-x-auto">
        <h4 class="text-center font-bold pb-4 text-lg">PRODUCTS INFORMATION</h4>
        <table class="min-w-full bg-white border-collapse">
          <thead>
            <tr class="bg-primary text-primary-foreground text-lg">
              <th class="py-4 px-6 border border-white">Pro ID</th>
              <th class="py-4 px-6 border border-white">Pro Name Eng</th>
              <th class="py-4 px-6 border border-white">Pro Name Kh</th>
              <th class="py-4 px-6 border border-white">Pro Category</th>
              <th class="py-4 px-6 border border-white">Image</th>
              <th class="py-4 px-6 border border-white">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $data)
                <tr class="{{ $loop->index % 2 === 0 ? 'bg-zinc-200' : 'bg-zinc-300' }} text-base {{ $loop->first ? 'border-t-4' : '' }} border-white">
                    <td class="text-center py-4 px-6 border border-white">{{ $data->Pro_id ?? 'null' }}</td>
                    <td class="text-center py-4 px-6 border border-white">{{ $data->Pro_name_eng ?? 'null' }}</td>
                    <td class="text-center py-4 px-6 border border-white">{{ $data->Pro_name_kh ?? 'null' }}</td>
                    <td class="text-center py-4 px-6 border border-white">{{ $data->productCategory->Cate_Khname ?? 'null' }}</td>
                    <td class="text-center py-4 px-6 border border-white">{{ $data->image ?? 'null' }}</td>
                    <td class="text-center py-4 px-6 border border-white">{{ 'Active' }}</td>
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
</div>
@endsection
