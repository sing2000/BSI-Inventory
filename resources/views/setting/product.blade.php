<div class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Product List</h1>
        <div class="relative flex w-full md:w-auto">
            <form id="searchForm" method="GET" class="w-full md:w-auto flex items-center relative">
                <input id="searchInput" type="text" placeholder="Search..." class="border border-input rounded-full py-1 px-4 pl-10 w-full md:w-auto focus:outline-none focus:ring-2 focus:ring-primary" required />
                <button type="submit" class="bg-gray-200 rounded-full py-1 px-4 absolute right-0 top-0 mt-1 mr-2 flex items-center justify-center" aria-label="Search">
                    <i class="fas fa-search text-gray-500"></i>
                </button>
            </form>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 mt-2">
            <!-- Example Product Card -->
            @foreach ( $invProduct as $data)
            <div class="bg-white p-2 rounded-lg shadow-md">
                <img src="images/shop.jpg" alt="Hot Vanilla Latte" class="w-full h-20 object-cover rounded-t-lg">
                <div class="p-2">
                    <h2 class="text-sm text-gray-800 mb-1">{{$data->Pro_name_eng}}</h2>
                    <h3 class="text-sm text-gray-700 mb-2">{{$data->Pro_name_kh}}</h3>
                    <div class="flex justify-between">
                        <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                        <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                        <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repeat Product Card for each product -->
        </div>
        <div class="mt-4">
            {{ $invProduct->links() }}
        </div>
    </div>
</div>
