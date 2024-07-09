@extends('layouts.app-nav')
@section('content')

<div class="flex justify-center items-center mt-6">
  <div class="p-4 grid grid-cols-1 md:grid-cols-3 gap-8 w-full md:w-4/5 mb-6 mt-1">
      <div class="w-full md:w-auto">
          <div class="border-2 border-yellow-500 rounded-lg p-12 text-center shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform">
              <h2 class="text-xl font-bold text-yellow-700 mb-2">DAILY SALE</h2>
              <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
              <p class="text-xl font-bold text-yellow-900">123</p>
          </div>
          <div class="border-2 border-yellow-500 rounded-lg p-10 text-center mt-4 shadow-lg hover:shadow-xl transform hover:scale-105 transition-transform">
              <h2 class="text-xl font-bold text-yellow-700">TOP PRODUCT</h2>
              <div class="border-t-2 border-yellow-500 my-6 mt-1"></div>
              <p class="text-xl font-bold text-yellow-900">1. Iced Green Tea</p>
          </div>
      </div>
      <div class="border-2 border-yellow-500 rounded-lg p-10 w-full md:w-auto shadow-lg">
          <h2 class="text-xl font-bold text-center mb-4">STOCK-ON-HAND</h2>
          <div class="border-t-2 border-yellow-500 my-6"></div>
          <div class="grid grid-cols-6 gap-6 text-center">
              <div>
                  <p class="text-lg font-bold">COFFEE</p>
                  <p class="text-md">2 Kg</p>
              </div>
              <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
              <div>
                  <p class="text-lg font-bold">SUGAR</p>
                  <p class="text-md">0.75 Kg</p>
              </div>
              <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
              <div>
                  <p class="text-lg font-bold">MILK</p>
                  <p class="text-md">1.5 Liter</p>
              </div>
          </div>
          <div class="border-t-2 border-yellow-500 my-6"></div>
          <div class="grid grid-cols-6 gap-6 text-center">
              <div>
                  <p class="text-lg font-bold">CREAM</p>
                  <p class="text-md"></p>
              </div>
              <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
              <div>
                  <p class="text-lg font-bold"></p>
                  <p class="text-md"></p>
              </div>
              <p class="border-l-2 border-yellow-500 h-24 mx-10"></p>
              <div>
                  <p class="text-lg font-bold"></p>
                  <p class="text-md"></p>
              </div>
          </div>
      </div>
      <div class="border-2 border-yellow-500 rounded-lg p-3 bg-white shadow-lg w-full md:w-auto hover:shadow-xl transform hover:scale-105 transition-transform">
          <h2 class="text-2xl font-bold text-center mb-4">PRODUCT LIST</h2>
          <div class="border-t-2 border-yellow-500 my-4"></div>
          <table class="w-full border-collapse">
              <thead>
                  <tr>
                      <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 1</th>
                      <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 2</th>
                      <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 3</th>
                      <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 4</th>
                      <th class="border border-yellow-500 p-4 bg-blue-900 text-white">Pro 5</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">1</td>
                  </tr>
                  <tr>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">2</td>
                  </tr>
                  <tr>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">3</td>
                  </tr>
                  <tr>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-300">4</td>
                  </tr>
                  <tr>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
                      <td class="border border-yellow-500 p-4 bg-zinc-200">5</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
<div class="w-full text-secondary-foreground py-8 mt-16 bg-blue-600 text-center">
  <p class="pb-1">BSI Inventory System version 1.0.0</p>
</div>


@endsection