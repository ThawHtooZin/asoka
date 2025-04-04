<div class="py-3 bg-white shadow-lg">
    <style>
        .custom-group:hover .custom-group-hover {
            background-color: #1d4ed8;
            /* Change to your desired hover background color */
            color: white;
            /* Change to your desired hover text color */
        }

        .custom-group-hover-content {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .custom-group:hover .custom-group-hover-content {
            opacity: 1;
            pointer-events: auto;
        }
    </style>

    <!-- Header Container -->
    <div class="flex flex-wrap items-center justify-between px-4 sm:px-8">
        <!-- Logo and Title -->
        <div class="flex items-center space-x-4 mx-auto md:mx-0">
            <img src="/images/logo.png" alt="Asoka Logo" class="h-[80px] sm:h-[100px] lg:h-[120px]">
            <div class="flex flex-col text-center sm:text-left">
                <h1 class="text-2xl sm:text-3xl lg:text-5xl roboto-slab font-bold text-t5 tracking-wide text-center">
                    ASOKA
                </h1>
                <span class="text-sm sm:text-base mt-1">Center for Buddhist Studies</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 mt-4 sm:mt-0 mx-auto md:mx-0">
            <!-- Translate Button -->
            <div class="relative custom-group">
                <button
                    class="flex items-center space-x-2 bg-primary p-2 rounded-lg border-4 border-primary custom-group-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-translate text-white" viewBox="0 0 16 16">
                        <path
                            d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z" />
                        <path
                            d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31" />
                    </svg>
                </button>

                <!-- Language Dropdown Content -->
                <div id="languageDropdown"
                    class="absolute -right-10 w-40 bg-white shadow-xl rounded-lg custom-group-hover-content transition-opacity duration-300 z-50 pointer-events-none">
                    <div class="p-4 space-y-2">
                        <a href="{{ route('language.en') }}"
                            class="block p-2 rounded hover:bg-gray-100 text-gray-800">English</a>
                        <a href="{{ route('language.mm') }}"
                            class="block p-2 rounded hover:bg-gray-100 text-gray-800">မြန်မာ</a>
                    </div>
                </div>
            </div>

            <!-- User Dropdown for Profile/Login/Register -->
            <div class="relative custom-group">
                <button
                    class="flex items-center space-x-2 text-primary bg-white p-2 rounded-lg border-2 border-primary shadow-lg custom-group-hover transition-all duration-200 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <span class="text-sm font-medium">
                        @auth
                            {{ auth()->user()->name }}
                        @else
                            Account
                        @endauth
                    </span>
                </button>

                <!-- User Account Dropdown -->
                <div id="userDropdown"
                    class="absolute right-0 w-48 bg-white shadow-lg rounded-lg custom-group-hover-content transition-opacity duration-300 z-50 pointer-events-none">
                    <ul>
                        @auth
                            <li><a href="/profile"
                                    class="block px-4 py-2 hover:rounded-t-lg hover:bg-primary hover:text-white">Profile</a>
                            </li>
                            @if (auth()->user()->roles()->first()->name == 'admin' || auth()->user()->roles()->first()->name == 'instructor')
                                <li><a href="/dashboard"
                                        class="block px-4 py-2 hover:bg-primary hover:text-white">Dashboard</a>
                                </li>
                            @endif
                            <li><a href="/logout"
                                    class="block px-4 py-2 text-red-500 hover:rounded-b-lg hover:bg-red-500 hover:text-white">Logout</a>
                            </li>
                        @endauth
                        @guest
                            <li><a href="/login"
                                    class="block px-4 py-2 hover:rounded-t-lg hover:bg-primary hover:text-white">Login</a>
                            </li>
                            <li><a href="/register"
                                    class="block px-4 py-2 hover:rounded-b-lg hover:bg-primary hover:text-white">Register</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
