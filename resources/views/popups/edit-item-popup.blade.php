<div id="editItemPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-1/2">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Item</h2>
        </div>
      <form id="editItemForm" class="p-6">
        <div class="mb-4">
            <label for="Item_Khname" class="block text-sm font-medium text-gray-900 mb-1">Item Khmer Name</label>
            <input type="text" id="Item_Khname" name="Item_Khname" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="Item_Engname" class="block text-sm font-medium text-gray-900 mb-1">Item English Name</label>
            <input type="text" id="Item_Engname" name="Item_Engname" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="Item_Cate_id" class="block text-sm font-medium text-gray-900 mb-1">Select Item Category</label>
            <select id="Item_Cate_id" name="Item_Cate_id" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Select a category</option>
                @foreach ($categories as $data)
                <option value="{{ $data->Item_Cate_id }}">
                    {{ $data->Item_Cate_Khname }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="Expiry_date" class="block text-sm font-medium text-gray-900 mb-1">Expiry Date</label>
            <input type="date" id="Expiry_date" name="Expiry_date" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
          <label for="image" class="block text-sm font-medium text-gray-900 mb-1">Item Image</label>
          <div>
              <button type="button" class="select-logo" onclick="document.getElementById('image').click()">Browse</button>
              <input type="file" id="image" name="image" style="display:none">
          </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md focus:outline-none mr-2">Save Change</button>
            <button type="button" id="closeEditPopup" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md focus:outline-none">Cancel</button>
          </div>
      </form>
    </div>
</div>
  