<div class="max-w-screen-lg mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5">
        <a href="#" id="createUserButton" class="bg-primary text-primary-foreground py-1 px-4 rounded-lg md:mb-3 sm:mb-2 text-sm">CREATE</a>
    </div>
    
    <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach ($user as $data) 
        <div class="relative bg-gray-100 rounded-lg shadow-lg overflow-hidden p-3">
            <div class="border-b-2 border-yellow-400">
                <div class="rounded-lg">
                    <div class="relative">
                        <img src="images/user.png" alt="user image" class="rounded-full mb-4 h-32 w-32 object-cover shadow-lg m-auto">
                    </div>
                    <h1 class="text-xl font-semibold mb-2 text-center text-primary">{{ strtoupper($data->U_name) }} ({{  strtoupper($data->InvRole->R_type) }})</h1>
                </div>
            </div>
            <div class="flex justify-center mt-2 space-x-4 relative">
                <div class="relative group">
                    <div class="bg-gray-900 bg-opacity-50 p-2 rounded-full cursor-pointer hover:bg-opacity-75 transition duration-300 edit-button-user">
                        <i class="fas fa-edit text-white"></i>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 text-white text-xs bg-gray-600 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 px-4">
                        Edit
                    </div>
                </div>
                <div class="relative group">
                    <div class="bg-gray-900 bg-opacity-50 p-2 rounded-full cursor-pointer hover:bg-opacity-75 transition duration-300">
                        <i class="fas fa-toggle-on text-white"></i>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 text-white text-xs bg-gray-600 rounded-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 px-4">
                        Active
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('popups.edit-user-popup')
    @include('popups.create-user-popup')
</div>