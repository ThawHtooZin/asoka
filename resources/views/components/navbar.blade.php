<style>
    .text-underline {
        text-decoration: underline !important;
    }

    .dropdown-indicator::after {
        content: '▼';
        font-size: 10px;
        display: inline-block;
        margin-left: 0.3rem;
        transition: transform 0.3s ease;
    }

    .group:hover .dropdown-indicator::after {
        transform: rotate(180deg);
    }

    .dropdown-content {
        display: none;
        transition: opacity 0.3s ease;
    }

    .group:hover .dropdown-content {
        display: flex;
        opacity: 1;
    }
</style>
<!-- Navbar Container -->
<div
    class="py-3 px-6 sm:px-12 @if (App::getLocale() == 'mm') lg:px-15 @else lg:px-32 @endif bg-asokablue shadow-lg text-white sticky top-0 z-40">
    <!-- Desktop Navbar -->
    <div class="lg:flex justify-around items-center hidden">
        <ul class="flex space-x-12">
            <!-- Home -->
            <li><a href="/"
                    class="text-lg @if (Request::is('/')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                    @lang('navbar.home')</a>
            </li>

            <!-- About Us Dropdown -->
            <li class="group relative">
                <button
                    class="text-lg dropdown-indicator @if (Request::is('whoweare*') || Request::is('websiteteam*') || Request::is('esteemedlecturer*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                    @lang('navbar.about')
                </button>
                <x-navlinkcontainer class="dropdown-content">
                    <x-navlink href="/whoweare">@lang('navbar.about_whoweare')</x-navlink>
                    <x-navlink href="/websiteteam">@lang('navbar.about_websiteteam')</x-navlink>
                    <x-navlink href="/esteemedlecturer">@lang('navbar.about_esteemedlecturer')</x-navlink>
                </x-navlinkcontainer>
            </li>

            <!-- Learning Dropdown -->
            <li class="group relative">
                <button
                    class="text-lg dropdown-indicator @if (Request::is('courses*') || Request::is('elibrary*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                    @lang('navbar.learning')
                </button>
                <x-navlinkcontainer class="dropdown-content">
                    <x-navlink href="/courses">@lang('navbar.learning_courses')</x-navlink>
                    <x-navlink href="/elibrary">@lang('navbar.learning_elibrary')</x-navlink>
                </x-navlinkcontainer>
            </li>


            <!-- Resources Dropdown -->
            <li class="group relative">
                <button
                    class="text-lg dropdown-indicator @if (Request::is('articles*') || Request::is('forum*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                    @lang('navbar.resources')
                </button>
                <x-navlinkcontainer class="dropdown-content">
                    <x-navlink href="/articles">@lang('navbar.resources_articles')</x-navlink>
                    <x-navlink href="/forum">@lang('navbar.resources_forum')</x-navlink>
                </x-navlinkcontainer>
            </li>

            <!-- Innovation Dropdown -->
            <li class="group relative">
                <button
                    class="text-lg dropdown-indicator @if (Request::is('research*') || Request::is('partnership*') || Request::is('researcharticles*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">@lang('navbar.innovation')</button>
                <x-navlinkcontainer
                    class="dropdown-content absolute left-0 hidden group-hover:flex flex-col bg-asokablue mt-2 p-2 rounded shadow-lg">
                    <x-navlink href="/research">@lang('navbar.innovation_research')</x-navlink>
                    <x-navlink href="/partnerships">@lang('navbar.innovation_partnerships')</x-navlink>
                    <x-navlink href="/researcharticles">@lang('navbar.innovation_research_articles')</x-navlink>
                </x-navlinkcontainer>
            </li>

            @if (!empty(auth()->user()))
                {{-- Meeting --}}
                <li><a href="/meeting"
                        class="text-lg @if (Request::is('meeting')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">@lang('navbar.meeting')</a>
                </li>
            @endif

            <!-- News -->
            <li><a href="/newsandupdate"
                    class="text-lg @if (Request::is('newsandupdate')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">@lang('navbar.news')</a>
            </li>

            <!-- Gallery -->
            <a href="/gallery"
                class="text-lg @if (Request::is('gallery')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">@lang('navbar.gallery')</a>
            </li>

            <!-- Contact -->
            <a href="/contactus"
                class="text-lg @if (Request::is('contactus')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">@lang('navbar.contact')</a>
            </li>
        </ul>
    </div>

    <!-- Mobile Navbar -->
    <div class="flex lg:hidden items-center justify-between">
        <a href="/"
            class="text-lg @if (Request::is('/')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">ASOKA</a>
        <button id="menu-toggle" class="focus:outline-none">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden flex-col space-y-2 mt-4 lg:hidden">
        <!-- Home -->
        <a href="/"
            class="text-md block py-2 @if (Request::is('/')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
            @lang('navbar.home')
        </a>

        <!-- About Us -->
        <div class="group">
            <button
                class="text-md block py-2 dropdown-indicator @if (Request::is('whoweare*') || Request::is('websiteteam*') || Request::is('esteemedlecturer*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                @lang('navbar.about')
            </button>
            <div class="dropdown-content flex flex-col space-y-1 pl-4">
                <x-navlink href="/whoweare">@lang('navbar.about_whoweare')</x-navlink>
                <x-navlink href="/websiteteam">@lang('navbar.about_websiteteam')</x-navlink>
                <x-navlink href="/esteemedlecturer">@lang('navbar.about_esteemedlecturer')</x-navlink>
            </div>
        </div>

        <!-- Learning -->
        <div class="group">
            <button
                class="text-md block py-2 dropdown-indicator @if (Request::is('courses*') || Request::is('elibrary*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                @lang('navbar.learning')
            </button>
            <div class="dropdown-content flex flex-col space-y-1 pl-4">
                <x-navlink href="/courses">@lang('navbar.learning_courses')</x-navlink>
                <x-navlink href="/elibrary">@lang('navbar.learning_elibrary')</x-navlink>
            </div>
        </div>

        <!-- Innovation -->
        <div class="group">
            <button
                class="text-md block py-2 dropdown-indicator @if (Request::is('research*') || Request::is('partnership*') || Request::is('researcharticles*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                @lang('navbar.innovation')
            </button>
            <div class="dropdown-content flex flex-col space-y-1 pl-4">
                <x-navlink href="/research">@lang('navbar.innovation_research')</x-navlink>
                <x-navlink href="/partnerships">@lang('navbar.innovation_partnerships')</x-navlink>
                <x-navlink href="/researcharticles">@lang('navbar.innovation_research_articles')</x-navlink>
            </div>
        </div>

        @if (!empty(auth()->user()))
            <a href="/meeting"
                class="text-md block py-2 @if (Request::is('meeting*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                @lang('navbar.meeting')
            </a>
        @endif

        <!-- Resources -->
        <div class="group">
            <button
                class="text-md block py-2 dropdown-indicator @if (Request::is('articles*') || Request::is('forum*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
                @lang('navbar.resources')
            </button>
            <div class="dropdown-content flex flex-col space-y-1 pl-4">
                <x-navlink href="/articles">@lang('navbar.resources_articles')</x-navlink>
                <x-navlink href="/forum">@lang('navbar.resources_forum')</x-navlink>
            </div>
        </div>

        <!-- News and Updates -->
        <a href="/newsandupdate"
            class="text-md block py-2 @if (Request::is('newsandupdate*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
            @lang('navbar.news')
        </a>

        <!-- Gallery -->
        <a href="/gallery"
            class="text-md block py-2 @if (Request::is('gallery*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
            @lang('navbar.gallery')
        </a>

        <!-- Contact Us -->
        <a href="/contactus"
            class="text-md block py-2 @if (Request::is('contactus*')) text-underline @endif @if (App::getLocale() == 'mm') text-[0.9rem] font-bold @endif">
            @lang('navbar.contact')
        </a>
    </div>
</div>

<!-- JavaScript to toggle mobile menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
