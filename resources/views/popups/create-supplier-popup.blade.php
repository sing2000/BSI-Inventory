<div id="popupSupplier" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Add New Supplier</h2>
        </div>
        <form class="p-6">
            <div class="mb-4">
                <label for="supplierName" class="block text-lg font-medium text-gray-700 mb-1">Supplier Name</label>
                <input type="text" id="supplierName" name="supplierName" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="supplierContact" class="block text-lg font-medium text-gray-700 mb-1">Supplier Contact</label>
                <input type="text" id="supplierContact" name="supplierContact" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="supplierAddress" class="block text-lg font-medium text-gray-700 mb-1">Supplier Address</label>
                <textarea id="supplierAddress" name="supplierAddress" rows="6" class="border border-gray-300 rounded-md px-3 py-2 w-full resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeSupplierPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>