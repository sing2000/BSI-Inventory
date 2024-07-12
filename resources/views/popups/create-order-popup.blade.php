<!-- Popup form -->
<div id="popupOrder" class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4">
            <h2 class="text-2xl font-bold text-white mb-2 sm:text-lg">Add New Order</h2>
        </div>
        <form class="p-4 sm:p-6">
            <div class="flex flex-wrap lg:flex-row flex-col justify-center -mx-2 mb-4">
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="orderNumber" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Order Number</label>
                    <input type="text" id="orderNumber" name="orderNumber" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="receiptImage" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Receipt Image</label>
                    <div>
                        <button class="select-logo">Browse</button>
                        <input type='file' hidden>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-row flex-col justify-center -mx-2 mb-4">
              <div class="w-full lg:w-1/2 px-2">
                <label for="totalPrice" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Total Price</label>
                <input type="number" step="0.01" id="totalPrice" name="totalPrice" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
              </div>
              <div class="w-full lg:w-1/2 px-2">
                <label for="incVat" class="block text-lg sm:text-sm font-medium text-gray-700">inc VAT</label>
                <input type="checkbox" id="incVat" name="incVat" class="border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 h-6 w-6 ml-5 mt-3" required>
            </div>
            </div>
            <div class="flex flex-wrap lg:flex-row flex-col justify-center -mx-2 mb-4">
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="itemCategory" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select Item</label>
                    <select id="itemCategory" name="itemCategory" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm" required>
                        <option value="">Select an Item</option>
                        <option value="item1">Item 1</option>
                        <option value="item2">Item 2</option>
                        <option value="item3">Item 3</option>
                    </select>
                </div>
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="supplier" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select Supplier</label>
                    <select id="supplier" name="supplier" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm" required>
                        <option value="">Select a Supplier</option>
                        <option value="supplier1">Supplier 1</option>
                        <option value="supplier2">Supplier 2</option>
                        <option value="supplier3">Supplier 3</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-row flex-col justify-center -mx-2 mb-4">
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="quantity" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Qty</label>
                    <input type="number" id="quantity" name="quantity" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="uom" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Select UOM</label>
                    <select id="uom" name="uom" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm" required>
                        <option value="">Select a UOM</option>
                        <option value="uom1">UOM 1</option>
                        <option value="uom2">UOM 2</option>
                        <option value="uom3">UOM 3</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-row flex-col justify-center -mx-2 mb-4">
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="orderDate" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Order Date</label>
                    <input type="date" id="orderDate" name="orderDate" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                    <label for="price" class="block text-lg sm:text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input type="number" step="0.01" id="price" name="price" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                <button type="button" id="closeOrderPopup" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-md ml-2 focus:outline-none">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!-- Popup form -->
