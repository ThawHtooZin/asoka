<x-layout>
    <style>
        .fade-in {
            opacity: 0;
            visibility: hidden;
            /* Hide initially */
            animation: fadeIn 1s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
                visibility: visible;
                /* Set to visible during fade-in */
            }
        }

        /* Delayed animations for form elements */
        .fade-in.delay-100 {
            animation-delay: 0.2s;
        }

        .fade-in.delay-200 {
            animation-delay: 0.4s;
        }

        .fade-in.delay-300 {
            animation-delay: 0.6s;
        }

        .fade-in.delay-400 {
            animation-delay: 0.8s;
        }

        .fade-in.delay-500 {
            animation-delay: 1s;
        }

        .fade-in.delay-600 {
            animation-delay: 1.2s;
        }

        .fade-in.delay-700 {
            animation-delay: 1.4s;
        }

        .fade-in.delay-800 {
            animation-delay: 1.6s;
        }
    </style>

    <div class="my-20 flex items-center justify-center space-x-5">
        @if (auth()->user()->roles()->first()->name == 'admin')
            <div class=" bg-gradient-to-br from-blue-100 to-blue-300 shadow-lg rounded-lg p-8 max-w-md w-full fade-in">
                <h2 class="text-2xl font-bold text-center text-blue-800 mb-6 fade-in delay-100">Create New Meeting</h2>

                <form action="/meeting/create" method="POST" class="space-y-4">
                    @csrf
                    <!-- Meeting Name -->
                    <div class="fade-in delay-200">
                        <label class="block text-blue-700 font-semibold mb-2" for="meetingname">Meeting Name</label>
                        <input type="text" id="meetingname" name="meetingname" value="{{ old('meetingname') }}"
                            required
                            class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                        <!-- Meeting Name Field Validation -->
                        @error('meetingname')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Meeting ID -->
                    <div class="fade-in delay-300">
                        <label class="block text-blue-700 font-semibold mb-2" for="MeetingID">MeetingID</label>
                        <input type="text" id="MeetingID" name="meetingid" required
                            class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                        <!-- MeetingID Field Validation -->
                        @error('meetingid')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="fade-in delay-400">
                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-700 text-white font-semibold rounded-md shadow-md hover:bg-blue-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Start New Meeting
                        </button>
                    </div>
                </form>
            </div>
        @else
            <div class="bg-gradient-to-br from-blue-100 to-blue-300  shadow-lg rounded-lg p-8 max-w-md w-full fade-in">
                <h2 class="text-2xl font-bold text-center text-blue-800 mb-6 fade-in delay-100">Join Meeting</h2>

                <form action="/meeting/join" method="POST" class="space-y-4">
                    @csrf
                    <!-- Meeting ID -->
                    <div class="fade-in delay-300">
                        <label class="block text-blue-700 font-semibold mb-2" for="MeetingID">MeetingID</label>
                        <input type="text" id="MeetingID" name="meetingid" required
                            class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                        <!-- MeetingID Field Validation -->
                        @error('meetingid')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="fade-in delay-400">
                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-700 text-white font-semibold rounded-md shadow-md hover:bg-blue-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Join
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>
</x-layout>
