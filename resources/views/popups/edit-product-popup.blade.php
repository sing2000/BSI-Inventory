<!-- Assuming your popup markup remains the same -->
<div id="editProductPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg w-1/2">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Product</h2>
        </div>
        <form id="productForm" class="p-6">
            <div class="mb-4">
                <label for="Sup_name" class="block text-sm font-medium text-gray-900 mb-1">Product Name Eng</label>
                <input type="text" id="Sup_name" name="Sup_name" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="Sup_contact" class="block text-sm font-medium text-gray-900 mb-1">Product Name Kh</label>
                <input type="text" id="Sup_contact" name="Sup_contact" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="pro_cat" class="block text-sm font-medium text-gray-900 mb-1">Product Category</label>
                <select id="pro_cat" name="pro_cat" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option>Select Product</option>
                    <option>Product 1</option>
                    <option>Product 2</option>
                    <option>Product 3</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="pro_image" class="block text-sm font-medium text-gray-900 mb-1">Product Image</label>
                <div>
                    <button class="select-logo">Browse</button>
                    <input type='file' hidden>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save Change</button>
                <button type="button" id="cancelEdit" class="bg-gray-300 hover:bg-gray-400 text-gray-900 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Your existing logic to open the edit popup
    const editButtons = document.querySelectorAll('.edit-product');
    const editPopup = document.getElementById('editProductPopup');

    editButtons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const productId = this.getAttribute('data-product-id');
        // Fetch and display edit popup logic here
        editPopup.classList.remove('hidden');
      });
    });

    // Close edit popup when "Cancel" button is clicked
    const cancelEditButton = document.getElementById('cancelEdit');
    cancelEditButton.addEventListener('click', function() {
      editPopup.classList.add('hidden');
    });
  });
</script>
