<div id="editSupplierPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-1/2">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Supplier</h2>
        </div>
      <form id="editSupplierForm" class="p-6">
        <input type="hidden" id="editSupId" name="Sup_id">
        <div class="mb-4">
          <label for="editSupName" class="block text-sm font-medium text-gray-900">Supplier Name</label>
          <input type="text" id="editSupName" name="Sup_name" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="editSupContact" class="block text-sm font-medium text-gray-900">Supplier Contact</label>
          <input type="text" id="editSupContact" name="Sup_contact" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="mb-4">
          <label for="editSupAddress" class="block text-sm font-medium text-gray-900">Supplier Address</label>
          <input type="text" id="editSupAddress" name="Sup_address" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md focus:outline-none mr-2">Save Change</button>
          <button type="button" id="closeEditPopup" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md focus:outline-none">Cancel</button>
        </div>
      </form>
    </div>
</div>
  