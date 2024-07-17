<div id="editAddonPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-1/2">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Addon</h2>
        </div>
        <form id="editAddonForm" class="p-6">
            @csrf
            <input type="hidden" id="editAddonId" name="editAddonId">
            <div class="mb-4">
                <label for="editAddonsName" class="block text-sm font-medium text-gray-900 mb-1">Addon Name</label>
                <input type="text" id="editAddonsName" name="editAddonsName" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="editPercentage" class="block text-sm font-medium text-gray-900 mb-1">Percentage</label>
                <input type="text" id="editPercentage" name="editPercentage" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="editQty" class="block text-sm font-medium text-gray-900 mb-1">Quantity</label>
                <input type="number" id="editQty" name="editQty" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="editUom" class="block text-sm font-medium text-gray-900 mb-1">Unit of Measure</label>
                <select id="editUom" name="editUom" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select UOM</option>
                    <option>UOM 1</option>
                    <option>UOM 2</option>
                    <option>UOM 3</option>
                </select>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save Changes</button>
                <button type="button" id="closeEditAddonPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
