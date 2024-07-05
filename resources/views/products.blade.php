@extends('layouts.app-nav')

@section('content')


  <div class="bg-background flex flex-col items-center p-4">
    <div class="flex justify-between items-center mb-4 w-4/5">
      <a href="#" class="bg-primary text-primary-foreground py-2 px-4 rounded-lg">CREATE</a>
      <div class="relative">
        <input type="text" placeholder="Search..." class="border border-input rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-primary" />
        <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
      </div>      
    </div>    
    <div class=" w-4/5 border-2 border-yellow-400 p-4">
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-collapse">
          <h4 class="text-center font-bold pb-2">PRODUCT INFORMATION</h4>
          <thead>
            <tr class="bg-primary text-primary-foreground">
              <th class="py-4 px-4 border-b">Inventory 1</th>
              <th class="py-4 px-4 border-b">Inventory 2</th>
              <th class="py-4 px-4 border-b">Inventory 3</th>
              <th class="py-4 px-4 border-b">Inventory 4</th>
              <th class="py-4 px-4 border-b">Inventory 5</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-200">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
            <tr class="bg-zinc-300">
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
              <td class="py-4 px-4 border-b">Placeholder Text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="w-full text-secondary-foreground py-16 mt-3 bg-blue-600 text-center">
    <p class="pb-1">BSI Inventory System version 1.0.0</p>
    <h2 class="text-xl font-bold text-slate-50">PRODUCT PAGE</h2>
  </div>
</div>
@endsection
