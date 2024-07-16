<!-- Popup form -->
<div id="popupOrder" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-5xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2 sm:text-2xl">Add New Order</h2>
        </div>
        <form class="p-6 sm:p-6">
            <div class="flex flex-wrap -mx-2 mb-4">
                <h3 class="w-full text-lg font-bold text-gray-800 mb-2">Order Info</h3>
                <div class="w-full h-0.5 bg-yellow-400 rounded-sm mb-4"></div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="input1" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Order Number</label>
                    <input type="text" id="input1" name="input1" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="input2" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Receipt Image</label>
                    <input type="file" id="input2" name="input2" class="text-sm border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="input3" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Total Price</label>
                    <input type="number" id="input3" name="input3" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="input4" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select Supplier</label>
                    <select id="input4" name="input4" class="text-sm sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option>Select Supplier</option>
                        <option>Supplier 1</option>
                        <option>Supplier 2</option>
                        <option>Supplier 3</option>
                    </select>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="input5" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Inc VAT</label>
                    <input type="checkbox" id="input5" name="input5" class="h-6 w-6 ml-10 border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>                               
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <label for="selectnum" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select Order Number</label>
                    <select id="selectnum" name="selectnum" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Select number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <h3 class="w-full text-xl font-bold text-gray-800 mb-2">Items</h3>
            <div class="w-full h-0.5 bg-yellow-400 rounded-sm mb-4"></div>
            <div id="itemsContainer" class="flex flex-wrap -mx-2 mb-4">
                <!-- Item rows will be appended here -->
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="togglePopup('popupOrder')" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-400">Cancel</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 ml-2">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript to handle showing/hiding rows based on selection -->
<script>
    document.getElementById('selectnum').addEventListener('change', function() {
        var itemsContainer = document.getElementById('itemsContainer');
        itemsContainer.innerHTML = ''; // Clear existing items
        var selectedValue = parseInt(this.value);

        for (var i = 0; i < selectedValue; i++) {
            var itemRow = `
                <div class="item-row w-full flex flex-wrap">
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputSelectItem${i+1}" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select Item</label>
                        <select id="inputSelectItem${i+1}" name="inputSelectItem${i+1}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select Item</option>
                            <option>Item 1</option>
                            <option>Item 2</option>
                            <option>Item 3</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputSelectOUM${i+1}" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select OUM</label>
                        <select id="inputSelectOUM${i+1}" name="inputSelectOUM${i+1}" class="text-lg sm:text-sm font-medium border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Select OUM</option>
                            <option>OUM 1</option>
                            <option>OUM 2</option>
                            <option>OUM 3</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputQty${i+1}" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Qty</label>
                        <input type="text" id="inputQty${i+1}" name="inputQty${i+1}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputOrderDate${i+1}" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Order Date</label>
                        <input type="date" id="inputOrderDate${i+1}" name="inputOrderDate${i+1}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="w-full sm:w-1/5 px-2 mb-8">
                        <label for="inputPrice${i+1}" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Price</label>
                        <input type="number" id="inputPrice${i+1}" name="inputPrice${i+1}" class="border border-gray-300 rounded-md px-3 py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            `;
            itemsContainer.insertAdjacentHTML('beforeend', itemRow);
        }
    });

    function togglePopup(popupId) {
        var popup = document.getElementById(popupId);
        popup.classList.toggle('hidden');
    }
</script>
