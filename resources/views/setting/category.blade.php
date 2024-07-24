<div id="mySection"  class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4 font-medium">
            <div class="flex-1 flex justify-center space-x-4 text-sm">
                <button id="showAll" class="text-yellow-400 pb-2 border-b-2 border-primary hover:text-yellow-400">SHOW ALL</button>
                <button id="itemsCategory" class="text-muted-foreground pb-2 hover:text-yellow-400">ITEMS CATEGORY</button>
                <button id="productsCategory" class="text-muted-foreground pb-2 hover:text-yellow-400">PRODUCTS CATEGORY</button>
                <button id="expensesCategory" class="text-muted-foreground pb-2 hover:text-yellow-400">EXPENSE CATEGORY</button>
            </div>
            <div class="relative inline-block">
                <button id="createButton" class="bg-primary text-primary-foreground py-1 px-4 rounded-lg mb-2 text-sm">CREATE</button>
                <div id="createDropdown" class="absolute right-0 mt-2 w-48 bg-white border-2 border-gray-400 rounded-lg shadow-lg hidden">
                    <a href="#" class="block px-4 py-2 text-gray-500 border-b-2 border-gray-400 hover:bg-gray-200 hover:rounded-t-lg">Items Category</a>
                    <a href="#" class="block px-4 py-2 text-gray-500 border-b-2 border-gray-400 hover:bg-gray-200">Products Category</a>
                    <a href="#" class="block px-4 py-2 text-gray-500 hover:bg-gray-200 hover:rounded-b-lg">Expense Category</a>
                </div>
            </div>
        </div>            
        <section class="mb-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 mt-6">
                <!-- Items Category -->
                <div class="category-items bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-tag text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ទឹកដោះគោ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-items bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-tag text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ម្សៅ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-items bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-tag text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ទឹកសេរ៉ូ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-items bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-tag text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ទឹករសជាតិ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-items bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-tag text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">តែ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Products Category -->
                <div class="category-products hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-box text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ភេសជ្ជក្តៅ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-products hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-box text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ភេសជ្ជត្រជាក់</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-products hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-box text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ភេសជ្ជក្រឡុក</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-products hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-box text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">ភេសជ្ជផ្សេងៗ</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <!-- Expenses Category -->
                <div class="category-expenses hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-money-bill text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">Order</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
                <div class="category-expenses hidden bg-white p-2 rounded-lg shadow-md">
                    <div class="w-full h-20 flex items-center justify-center bg-gray-200 rounded-lg">
                        <i class="fas fa-money-bill text-gray-600 text-6xl"></i>
                    </div>
                    <div class="p-2">
                        <h2 class="text-lg text-gray-800 mb-3">Daily</h2>
                        <div class="flex justify-between">
                            <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded hover:bg-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                            <button class="bg-green-500 text-white px-2 py-1 text-xs rounded hover:bg-green-600"><i class="fas fa-toggle-on"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const section = document.getElementById('mySection');
    const buttons = section.querySelectorAll('button[id]:not(#createButton)');
    const categories = section.querySelectorAll('[class^="category-"]');
    const createButton = section.querySelector('#createButton');
    const createDropdown = section.querySelector('#createDropdown');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.id;

            if (category === 'showAll') {
                categories.forEach(el => el.classList.remove('hidden'));
            } else {
                categories.forEach(el => {
                    if (el.classList.contains(`category-${category.replace('Category', '').toLowerCase()}`)) {
                        el.classList.remove('hidden');
                    } else {
                        el.classList.add('hidden');
                    }
                });
            }

            buttons.forEach(btn => {
                btn.classList.remove('text-yellow-400', 'border-b-2', 'border-primary');
                btn.classList.add('text-muted-foreground');
            });
            this.classList.add('text-yellow-400', 'border-b-2', 'border-primary');
            this.classList.remove('text-muted-foreground');
        });
    });

    createButton.addEventListener('click', function(event) {
        event.stopPropagation();
        createDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', function(e) {
        if (!createButton.contains(e.target) && !createDropdown.contains(e.target)) {
            createDropdown.classList.add('hidden');
        }
    });

    // Initialize the view
    document.getElementById('showAll').click();
});

</script>
