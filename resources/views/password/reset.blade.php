<x-layout>
    <style>
        .fade-in {
            opacity: 0;
            visibility: hidden;
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
            }
        }

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
    </style>

    <div class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full fade-in">
            <h2 class="text-2xl font-bold text-center text-blue-800 mb-6 fade-in delay-100">Reset Your Password</h2>

            <form action="/password/update" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <!-- New Password Field -->
                <input type="hidden" value="{{ $user->email }}" name="email">
                <div class="fade-in delay-300">
                    <label class="block text-blue-700 font-semibold mb-2" for="password">New Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="fade-in delay-400">
                    <label class="block text-blue-700 font-semibold mb-2" for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full px-4 py-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
                </div>

                <!-- Submit Button -->
                <div class="fade-in delay-500">
                    <button type="submit"
                        class="w-full py-2 px-4 bg-blue-700 text-white font-semibold rounded-md shadow-md hover:bg-blue-800 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Reset Password
                    </button>
                </div>
            </form>

            <!-- Back to Login Link -->
            <div class="mt-4 text-center fade-in delay-600">
                <a href="/login" class="text-blue-600 hover:text-blue-800 text-sm">
                    Back to Login
                </a>
            </div>
        </div>
    </div>
</x-layout>