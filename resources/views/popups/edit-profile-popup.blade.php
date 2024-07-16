<!-- popups/edit-profile-popup.blade.php -->

<!-- Modal for Editing Profile -->
<div id="profileModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden z-20">
    <div class="bg-white rounded-lg shadow-lg max-w-xl w-full max-h-screen overflow-y-auto">
        <div class="bg-gradient-to-b from-blue-500 to-blue-400 rounded-t-lg px-6 py-4 mb-6">
            <h2 class="text-2xl font-bold text-white mb-2">Edit Profile</h2>
        </div>
        <form class="p-6">
            @csrf
            <div class="mb-4">
                <label for="userName" class="block text-sm font-medium text-gray-700 mb-2">User Name:</label>
                <input type="text" id="userName" name="userName" class="form-control w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('userName') }}" required>
            </div>
            <div class="form-group">
                <label for="S_logo">Change Profile Image:</label>
                <div>
                    <button class="select-logo">Browse</button>
                    <input type='file' style="display:none">
                </div>
            </div>
            <div class="mt-4">
                <img src="images/user.jpg" class="w-32 h-32 object-cover rounded-lg" alt="Image Preview">
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" class="bg-gray-500 text-white rounded-md px-4 py-2 hover:bg-gray-600" id="closeModal">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600">Save Changes</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Open modal
    document.getElementById('editProfile').addEventListener('click', function() {
        var modal = document.getElementById('profileModal');
        modal.classList.remove('hidden');
    });

    // Close modal
    document.getElementById('closeModal').addEventListener('click', function() {
        var modal = document.getElementById('profileModal');
        modal.classList.add('hidden');
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function(event) {
        var modal = document.getElementById('profileModal');
        if (event.target == modal) {
            modal.classList.add('hidden');
        }
    });
</script>

<style>
    .form-group {
        display: flex;
        align-items: center; 
        margin-bottom: 15px; 
    }
    label {
        min-width: 100px;
        margin-right: 15px; 
    }
    .select-logo{
        display: block;
        width: 120px;
        height: 30px;
        border-radius: 5px;
        background-clip: padding-box;
        border: 0.25px solid #ced4da;
        background-color: #fff;
    }
    </style>