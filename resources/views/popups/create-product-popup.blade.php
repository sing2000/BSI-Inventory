<div id="popupProduct" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Add New Supplier</h2>
        </div>
        <form id="productForm" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="Sup_name" class="block text-lg font-medium text-gray-700 mb-1">Product Name Eng</label>
                <input type="text" id="Sup_name" name="Sup_name" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Sup_contact" class="block text-lg font-medium text-gray-700 mb-1">Product Name Kh</label>
                <input type="text" id="Sup_contact" name="Sup_contact" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="pro_cat" class="block text-lg font-medium text-gray-700 mb-1">Product Category</label>
                <select id="pro_cat" name="pro_cat" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select Product</option>
                    <option>Product 1</option>
                    <option>Product 2</option>
                    <option>Product 3</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="pro_image" class="block text-lg font-medium text-gray-700 mb-1">Product Image</label>
                <div>
                    <button class="select-logo">Browse</button>
                    <input type='file' hidden>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeProductPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
