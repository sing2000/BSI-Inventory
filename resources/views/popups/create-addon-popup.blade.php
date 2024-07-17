<div id="popupAddon" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Add New Supplier</h2>
        </div>
        <form id="AddonForm" class="p-6">
            @csrf
            <div class="mb-4">
                <label for="addon_name" class="block text-lg font-medium text-gray-700 mb-1">Add-ons Name</label>
                <input type="text" id="addon_name" name="addon_name" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="percentage" class="block text-lg font-medium text-gray-700 mb-1">Percentage</label>
                <input type="text" id="percentage" name="percentage" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="qty" class="block text-lg font-medium text-gray-700 mb-1">Qty</label>
                <input type="text" id="qty" name="qty" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="pro_cat" class="block text-lg font-medium text-gray-700 mb-1">UOM</label>
                <select id="pro_cat" name="pro_cat" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select UOM</option>
                    <option>UOM 1</option>
                    <option>UOM 2</option>
                    <option>UOM 3</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeAddonPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
