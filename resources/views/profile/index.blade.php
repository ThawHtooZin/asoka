<x-layout>
    <div class="bg-gradient-to-br from-blue-100 to-blue-300 flex items-center justify-center px-52 py-10">
        <div class="space-y-3 w-full">
            <!-- User Profile Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex justify-between">
                    <div class="flex">
                        <div class="relative group w-24 h-24">
                            <img src="{{ $user->image }}" alt="Profile Picture" class="w-full h-full rounded-lg z-0">

                            <!-- Edit Icon -->
                            <button
                                class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"
                                onclick="openModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-fill text-white" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-primary ml-2">{{ $user->name }}</h1>
                            <p class="texl-xl text-primary ml-3">Joined Since
                                {{ date('Y-m-d', strtotime($user->created_at)) }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="profile/edit"
                            class=" float-end py-2 px-4 bg-yellow-400 text-white font-semibold rounded-md shadow-md hover:bg-yellow-400 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-yellow-200">
                            Edit Profile
                        </a>
                    </div>
                </div>
                <div class="flex max-h-full justify-center">
                    <div
                        class="rounded-lg bg-blue-500 p-3 px-6 m-4 text-white text-center hover:bg-blue-400 duration-300">
                        <h1 class="transition-colors duration-300">Courses Activity</h1>
                        <p class="text-xl font-bold py-3">{{ $Courses->count() }}</p>
                    </div>
                    <div
                        class="rounded-lg bg-blue-500 p-3 px-6 m-4 text-white text-center hover:bg-blue-400 duration-300">
                        <h1 class="transition-colors duration-300">Books Activity</h1>
                        <p class="text-xl font-bold py-3">{{ $Books->count() }}</p>
                    </div>

                </div>
            </div>

            <!-- Activity Courses Section -->
            <div class="bg-gray-50 py-8 px-6">
                <div class="max-w-6xl mx-auto">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-gray-200 pb-2">
                        Your Courses Activity
                    </h1>

                    <!-- Courses Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Single Course Card -->
                        @foreach ($Courses as $course)
                            <a href="/courses/{{ $course->course()->first()->id }}/show">
                                <div
                                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                                    <img src="{{ $course->course()->first()->image }}" alt="Course Name"
                                        class="w-full h-48 object-cover" />

                                    <div class="p-3">
                                        <h3 class="text-lg font-semibold text-gray-700 mb-2">
                                            {{ $course->course()->first()->name }}
                                        </h3>
                                        <!-- Conditional Pill for Requested or Owned -->
                                        @if ($course->status == 'requested')
                                            <!-- Replace with your actual check for "requested" status -->
                                            <span
                                                class="inline-block bg-yellow-500 text-white text-xs py-1 px-3 rounded-full">
                                                Requested
                                            </span>
                                        @elseif ($course->status == 'confirmed')
                                            <!-- Replace with your actual check for "owned" status -->
                                            <span
                                                class="inline-block bg-green-500 text-white text-xs py-1 px-3 rounded-full">
                                                Owned
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>



            <!-- Activity Books Section -->
            <div class="bg-gray-50 py-8 px-6">
                <div class="max-w-6xl mx-auto">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 border-gray-200 pb-2">
                        Your Books Activity
                    </h1>

                    <!-- Books Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                        <!-- Single Book Card -->
                        @foreach ($Books as $book)
                            <a href="/elibrary/book/{{ $book->book()->first()->id }}" class="relative">
                                <div
                                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                                    <img src="{{ $book->book()->first()->cover_image }}" alt="Book Cover"
                                        class="w-full h-72 object-cover" />

                                    <!-- Conditional Badge for Requested or Owned -->
                                    @if ($book->status == 'requested')
                                        <span
                                            class="absolute top-2 right-2 inline-block bg-yellow-500 text-white text-xs py-2 px-4 rounded-full shadow-lg">
                                            Requested
                                        </span>
                                    @elseif ($book->status == 'confirmed')
                                        <span
                                            class="absolute top-2 right-2 inline-block bg-green-500 text-white text-xs py-2 px-4 rounded-full shadow-lg">
                                            Owned
                                        </span>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>


            <!-- Other Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Other</h1>
                <p class="text-lg text-gray-600">
                    Stay tuned for more updates and features in your dashboard. Check back often for new courses and
                    resources.
                </p>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-96">
            <!-- Modal Header -->
            <h2 class="text-lg font-bold mb-4">Edit Profile Picture</h2>

            <!-- Current Profile Picture -->
            <div class="mb-4 text-center">
                <img id="currentProfilePicture"
                    src="{{ Auth::user()->image ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}"
                    alt="Current Profile Picture" class="w-24 h-24 mx-auto rounded-lg">
            </div>

            <!-- File Upload -->
            <form id="profilePictureForm" action="/profile/update-picture" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <label class="block mb-4">
                    <span class="text-gray-700">Upload a new photo:</span>
                    <input type="file" name="profile_picture" accept="image/*" id="profilePictureInput"
                        class="mt-2 block w-full text-sm text-gray-500 
                    file:mr-4 file:py-2 file:px-4 file:border 
                    file:rounded-lg file:border-gray-300 
                    file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                </label>

                <!-- Buttons -->
                <div class="flex justify-between items-center">
                    <button onclick="saveProfilePicture()"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Save Changes
                    </button>
                    <a onclick="closeModal()" class="text-gray-500 hover:underline cursor-pointer">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Open Modal
        function openModal() {
            document.getElementById('editModal').classList.remove('hidden');
        }

        // Close Modal
        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

</x-layout>
