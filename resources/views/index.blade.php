<x-layout>
    <style>
        .course-card:nth-child(2) {
            transform: scale(1.1);
            transition: transform 0.3s;
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        /* Ensuring a consistent typography scale */
        .section-heading {
            font-size: 2rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .section-text {
            font-size: 1prem;
            color: #4a5568;
            line-height: 1.75;
        }

        .sub-heading {
            font-size: 1.5rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 1rem;
        }

        .list-item {
            font-size: 1rem;
            color: #4a5568;
        }
    </style>

    <x-banner />

    <!-- About Section -->
    <div class="mx-auto py-10 px-6 sm:px-10 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
            <!-- Text Section -->
            <div
                class="md:col-span-7 lg:col-span-8 space-y-6 bg-gradient-to-br from-gray-100 to-gray-200 p-10 rounded-3xl h-full">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">
                    @if (App::getLocale() == 'en')
                        @lang('homepage.about_asoka')
                    @endif
                    <span class="text-t5">ASOKA</span> Center for Buddhist Studies
                    @if (App::getLocale() == 'mm')
                        @lang('homepage.about_asoka')
                    @endif
                </h2>
                <p class="text-base sm:text-lg text-gray-600 pt-5" style="line-height: 2.3rem !important;">
                    <b>ASOKA Center for Buddhist Studies</b> @lang('homepage.about_text_1')
                </p>
                <p class="text-base sm:text-lg text-gray-600" style="line-height: 2.3rem !important;">
                    @lang('homepage.about_text_2')
                </p>
                <div class="mt-4">
                    <a href="{{ url('/courses') }}"
                        class="inline-block px-6 py-3 bg-asokablue text-white font-semibold rounded-lg shadow-md hover:bg-asokablue-light transition-all">
                        Check out Courses
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="md:col-span-5 lg:col-span-4 flex justify-center">
                <img src="/images/shwedagonpagoda.jpg" alt="ASOKA Pillar"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-[28rem] rounded-3xl shadow-lg transform transition-transform duration-300 hover:scale-105 object-cover">
            </div>
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <section class="py-16 bg-gradient-to-b from-gray-100 to-gray-300">
        <div class="container mx-auto px-4 2xl:px-24 grid grid-rows-2 gap-y-12">

            <!-- Mission Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Image -->
                <div class="flex justify-center h-full">
                    <img src="/images/buddhastatue.jpg" alt="Buddha Tree" class="rounded-3xl shadow-2xl w-4/5">
                </div>
                <!-- Text Content -->
                <div class="bg-white p-8 rounded-3xl shadow-2xl h-full items-center">
                    <h2 class="text-2xl font-bold text-asokablue mb-4">@lang('homepage.mission')</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        @lang('homepage.mission_text')
                    </p>
                </div>
            </div>

            <!-- Vision Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Text Content -->
                <div class="bg-white p-8 rounded-3xl shadow-2xl h-full items-center">
                    <h2 class="text-2xl font-bold text-asokablue mb-4">@lang('homepage.vision')</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        @lang('homepage.vision_text')
                    </p>
                </div>
                <!-- Image -->
                <div class="flex justify-center h-full">
                    <img src="/images/meditation.jpg" alt="Buddha Statue" class="rounded-3xl shadow-2xl w-4/5">
                </div>
            </div>
        </div>
    </section>

    {{-- News and Update --}}
    <section class="py-16 bg-gradient-to-b from-gray-100 to-gray-300">
        <div class="container mx-auto px-4 2xl:px-24">
            <h1 class="text-2xl sm:text-2gxl md:text-3xl text-center font-bold mb-12">@lang('homepage.news_and_updates')</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($newsandupdates as $newsandupdate)
                    <div class="rounded-lg shadow-lg overflow-hidden bg-white">
                        <div class="overflow-hidden">
                            @if ($newsandupdate->image != '')
                                <img src="{{ $newsandupdate->image }}" alt="News image"
                                    class="w-full h-48 object-cover hover:scale-105 duration-300">
                            @else
                                <img src="images/announcement2.jpg" alt="News image"
                                    class="w-full h-48 object-cover hover:scale-105 duration-300">
                            @endif
                        </div>
                        <div class="p-5">
                            <p class="text-sm text-gray-500 mb-2">
                                {{ Carbon\Carbon::parse($newsandupdate->created_at)->diffForHumans() }}</p>
                            <h2 class=" text-gray-800 my-4 font-semibold sm:text-sm md:text-[18px]"
                                style="line-height: 30px;">
                                {{ $newsandupdate->title }}</h2>
                            <p class="text-gray-600 text-sm md:text-base">
                                {{ Str::limit($newsandupdate->content, 200, '...') }}</p>
                            <a href="/newsandupdate/{{ $newsandupdate->id }}/show"
                                class="text-blue-500 font-semibold text-sm md:text-base mt-3 block">@lang('homepage.more_details')</a>
                        </div>
                    </div>
                @endforeach

                <div class="pt-6 mt-6 border-t border-gray-300 text-center sm:col-span-2 lg:col-span-3">
                    <a href="/newsandupdate"
                        class="text-blue-600 font-semibold text-md sm:text-lg hover:text-blue-800 transition duration-300 transform hover:scale-105">
                        @lang('homepage.check_more_news')
                    </a>
                </div>
            </div>
        </div>
    </section>



</x-layout>
