<x-layout>
    <style>
        /* Base styles for the button and blade effect */
        .category-blade {
            position: relative;
            overflow: hidden;
            color: inherit;
        }

        .category-blade::before {
            content: "";
            position: absolute;
            top: 0;
            left: -110%;
            width: 100%;
            height: 100%;
            background-color: #007bff;
            /* Primary color */
            transform: skewX(-20deg);
            transition: all 0.4s ease-in-out;
        }

        /* Hover effect to animate the blade flowing from left to right */
        .category-blade:hover::before {
            left: -70;
            transition: left 0.4s ease;
        }

        /* Active category effect: show the blade by default */
        .category-blade.active-category::before {
            left: -17%;
        }

        /* Active category effect: show the blade by default */
        .category-blade.active-category span {
            color: white !important;
        }

        /* Make sure text is above the blade effect */
        .category-blade span {
            position: relative;
            z-index: 10;
        }
    </style>
    <div class="container mx-auto p-6 space-y-8">
        <div class="px-6 py-3">
            <a href="/" class="text-blue-800 font-bold hover:underline">@lang('article.home')</a> > <a href="/articles"
                class="text-blue-800 font-bold hover:underline">@lang('article.articles')</a>
        </div>
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <aside class="space-y-6">
                <!-- Small Search Bar -->
                <form action="/articles" method="GET"
                    class="flex items-center shadow-lg rounded-md overflow-hidden bg-white">
                    <input type="text" name="search" placeholder="@lang('article.search')"
                        class="w-full p-3 border-0 rounded-l-md focus:outline-none focus:ring-2 focus:ring-asokablue transition duration-300 text-gray-700 placeholder-gray-500" />
                    <button type="submit"
                        class="p-4 bg-asokablue text-white hover:bg-blue-700 transition duration-300 flex items-center justify-center rounded-r-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button>
                </form>

                <!-- Categories List -->
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">@lang('article.category')</h3>
                    <div class="flex flex-col space-y-4">
                        @if ($articles->count() != 0)
                            @foreach ($categories ?? [] as $category)
                                <form action="" method="GET" class="mb-0">
                                    <input type="hidden" name="category" value="{{ $category->id }}">
                                    <button
                                        class="capitalize category-blade relative text-left px-4 py-2 bg-gradient-to-r from-gray-50 to-white rounded-lg border border-asokablue shadow-md hover:text-white transition duration-300 overflow-hidden w-full {{ $category->id == request('category') ? 'active-category' : '' }}">
                                        <span class="relative z-10">{{ $category->name }}</span>
                                    </button>
                                </form>
                            @endforeach
                        @else
                            <p class="text-center mx-auto mt-6">No Article Category to show!</p>
                        @endif
                    </div>
                </div>
            </aside>

            <!-- Articles Section (Left, 2/3) -->
            <div class="md:col-span-3">
                <h2 class="text-3xl font-extrabold text-gray-800 text-center md:text-left capitalize">
                    @if (!empty(request('category')))
                        @php
                            // Query category by ID directly based on the category request
                            $category = App\Models\ArticleCategory::find(request('category'));
                        @endphp
                        {{ $category?->name ?? 'Articles' }}
                    @else
                        @lang('article.articles')
                    @endif


                </h2>
                <div id="articles-container" class="space-y-2 mt-4">
                    @foreach ($articles as $article)
                        <div id="article-{{ $article->article_category_id }}"
                            class="article-card bg-white p-6 rounded-lg shadow-md transition transform hover:scale-105">
                            <!-- Article Image -->
                            @if ($article->image)
                                <img src="{{ asset($article->image) }}" alt="{{ $article->title }}"
                                    class="w-full h-48 object-cover rounded-lg mb-4 shadow-md" />
                            @endif

                            <h3 class="text-lg font-bold text-asokablue mb-2">{{ $article->title }}</h3>
                            <p class="text-sm text-gray-500 mb-1">By: {{ $article->user->name }}</p>
                            <p class="text-sm text-gray-500">Published on: {{ $article->created_at->format('F j, Y') }}
                            </p>
                            <p class="text-gray-600 mt-4">{{ Str::limit($article->intro, 200) }}</p>

                            <a href="/article/{{ $article->id }}"
                                class="mt-4 inline-block px-4 py-2 bg-asokablue text-white text-center rounded-lg hover:bg-blue-700 transition duration-300 text-sm">
                                Read More...
                            </a>
                        </div>
                    @endforeach
                    @if ($articles->count() == 0)
                        <p class="text-center mx-auto mt-16">Currently there are no articles to show!</p>
                    @endif
                </div>
            </div>

            <!-- Sidebar Section (Right, 1/3) -->
        </div>
    </div>
</x-layout>
