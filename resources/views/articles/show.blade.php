<x-layout>
    <div class="container mx-auto p-3 md:px-52">
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-2 md:px-10">
            <div class="md:p-6">
                <div class="w-full max-w-4xl mb-4">
                    <a href="/" class="text-blue-800 font-bold hover:underline">@lang('article.home')</a> > <a
                        href="/articles" class="text-blue-800 font-bold hover:underline">@lang('article.articles')</a>
                </div>

                <!-- Article Title -->
                <h1 class="text-xl md:text-3xl font-bold mb-4 text-gray-800">{{ $article->title }}</h1>

                <!-- Article Metadata -->
                <div class="text-sm text-gray-500 mb-4">
                    <p>By: <span class="font-semibold">{{ $article->user->name }}</span></p>
                    <p>Published on: {{ $article->created_at->format('F j, Y') }}</p>
                </div>

                <!-- Article Content -->
                <div class="text-gray-700 mb-6">
                    <iframe src="/{{ $article->pdf_url }}" frameborder="0" width="100%" height="90%"></iframe>
                </div>

                <!-- Tags (if applicable) -->
                @if ($article->tags)
                    <div class="flex flex-wrap mb-4">
                        @foreach ($article->tags as $tag)
                            <span class="bg-asokablue text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                @endif

                <!-- Social Share Buttons -->
                <div class="flex space-x-4 mb-6">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                        target="_blank"
                        class="text-white bg-blue-600 hover:bg-blue-700 transition duration-300 px-4 py-2 rounded-lg">
                        Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article->title) }}"
                        target="_blank"
                        class="text-white bg-blue-400 hover:bg-blue-500 transition duration-300 px-4 py-2 rounded-lg">
                        Share on Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
