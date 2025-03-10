<x-layout>
    <style>
        .title {
            word-wrap: break-word;
            /* Break long words if necessary */
            overflow-wrap: break-word;
            /* Ensures words break in modern browsers */
            white-space: normal;
            /* Allows text to wrap to the next line */
            width: 100%;
            /* Ensure the div respects the container's width */
        }
    </style>
    <div class="container mx-auto p-6 space-y-8">
        <!-- Search Bar Section -->
        <div class="md:flex justify-between items-center px-6">
            <div class="mb-5 md:mb-0">
                <a href="/" class="text-blue-800 font-bold hover:underline">@lang('elibrary.home')</a> >
                <a href="/elibrary" class="text-blue-800 font-bold hover:underline">@lang('elibrary.elibrary')</a>
            </div>

            <!-- Search Input -->
            <form action="/elibrary" method="GET"
                class="flex items-center mb-0 w-96 shadow-md rounded-lg overflow-hidden bg-gradient-to-r from-gray-50 to-white">
                <input type="text" name="search" placeholder="Search for Books..."
                    class="w-full p-3 border-0 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-asokablue transition duration-300 text-sm"
                    value="{{ request('search', '') }}" />
                <button type="submit"
                    class="p-4 bg-asokablue text-white hover:bg-blue-700 transition duration-300 flex items-center justify-center rounded-r-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- Books Display Section -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            @foreach ($books as $book)
                <a href="/elibrary/book/{{ $book->id }}" class="group">
                    <div
                        class="relative p-5 rounded-xl shadow-lg hover:shadow-2xl bg-white hover:-translate-y-2 transition-all duration-300">
                        <!-- Gradient Border -->
                        <div class="p-1 rounded-lg bg-gradient-to-r from-blue-300 via-blue-900 to-blue-600">
                            <!-- Inner Container -->
                            <div class="rounded-lg p-4 flex flex-col items-center"
                                style="
                                    background: linear-gradient(135deg, rgba(100, 149, 237, 0.1), rgba(25, 25, 112, 0.1));
                                ">
                                <img src="{{ asset($book->cover_image) }}" alt="{{ $book->title }}"
                                    class="w-32 h-48 object-cover rounded-lg shadow-md transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3">
                            </div>
                        </div>

                        <!-- Title -->
                        <p class="mt-4 text-lg font-bold text-gray-700 truncate group-hover:text-blue-600 capitalize">
                            {{ $book->title }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</x-layout>
