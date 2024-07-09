@extends('layouts.app-nav')

@section('content')
<div class="flex flex-col">
  <div class="bg-background flex flex-col items-center flex-grow px-4 md:px-0">
    <div class="flex flex-col md:flex-row justify-between items-center mb-4 w-full md:w-4/5">
      <a href="#" class="bg-primary text-primary-foreground py-2 px-4 rounded-lg mb-4 md:mb-0">CREATE</a>
      <div class="relative flex w-full md:w-auto">
        <input type="text" placeholder="Search..." class="border border-input rounded-full py-2 px-4 pl-10 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-primary" />
        <button type="button" class="bg-gray-200 rounded-full p-2 absolute right-0 top-0 mt-1 mr-2 flex items-center justify-center">
          <i class="fas fa-search text-gray-500"></i>
        </button>
      </div>
    </div>
    <div class="w-full md:w-4/5 border-2 border-yellow-400 p-2 font-times">
      <div class="overflow-x-auto">
        <h4 class="text-center font-bold pb-4 text-lg">PRODUCTS INFORMATION</h4>
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
@endsection
