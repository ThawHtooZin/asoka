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

    <div class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full fade-in">
            <h2 class="text-2xl font-bold text-center text-blue-800 mb-6 fade-in delay-100">Log Into Asoka</h2>

            <form action="/login" method="POST" class="space-y-4">
                @csrf
                <!-- Email -->
                <div class="fade-in delay-200">
                    <label class="block text-blue-700 font-semibold mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                    <!-- Email Field Validation -->
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="fade-in delay-300">
                    <label class="block text-blue-700 font-semibold mb-2" for="password">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                    <!-- Password Field Validation -->
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="fade-in delay-400">
                    <button type="submit"
                        class="w-full py-2 px-4 bg-blue-700 text-white font-semibold rounded-md shadow-md hover:bg-blue-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Login
                    </button>
                </div>
            </form>

            <!-- Forgot Password Link -->
            <div class="mt-4 text-center fade-in delay-500">
                <a href="password/reset" class="text-blue-600 hover:text-blue-800 text-sm">
                    Forgot your password?
                </a>
            </div>
        </div>
    </div>
</x-layout>
