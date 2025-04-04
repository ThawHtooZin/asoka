<x-layout>
    <style>
        .glowing-text {
            font-size: 3rem;
            /* Adjust text size */
            font-weight: bold;
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            background-image: linear-gradient(90deg, transparent, white, transparent);
            background-size: 200%;
            /* Makes the animation noticeable */
            -webkit-background-clip: text;
            /* Clips background to text only */
            -webkit-text-fill-color: transparent;
            /* Hides text color */
            animation: glowingEffect 3s linear infinite;
        }

        @keyframes glowingEffect {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }
    </style>
    <section class="bg-gradient-to-r from-gray-100 via-blue-50 to-gray-100 py-16 px-10 md:24 xl:px-32"
        style="background-image: url('images/waves/wave3.png'); background-repeat: no-repeat; background-size: cover">
        <!-- Partnership Benefits Section -->
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold text-white mb-6 glowing-text">Our Esteemed Partners</h2>
            <p class="text-lg text-gray-300 mb-12">We're proud to collaborate with industry leaders to
                create innovative solutions.</p>

            <div class="grid md:grid-cols-3 gap-12">
                <!-- Benefit 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4"><img class="h-24 mx-auto"
                            src="/images/partnership/anadagayunar.jpg" alt="">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800">Patrons of Buddha Sasana</h3>
                    <p class="text-gray-600 mt-4">The Ananda Kaurna Association, led by Prof. Dr. Saw Htut Sandar,
                        promotes Buddhist values, supports monks, aids disaster relief, and fosters compassion and
                        social welfare.</p>
                    <a href="/partnerships/anandakaurna" class="text-primary text-center hover:underline">View more</a>
                </div>
                <!-- Benefit 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4"><img class="h-24 mx-auto"
                            src="/images/partnership/anadagayunar.jpg" alt="">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800">Patrons of Buddha Sasana</h3>
                    <p class="text-gray-600 mt-4">The Ananda Kaurna Association, led by Prof. Dr. Saw Htut Sandar,
                        promotes Buddhist values, supports monks, aids disaster relief, and fosters compassion and
                        social welfare.</p>
                    <a href="/partnerships/anandakaurna" class="text-primary text-center hover:underline">View more</a>
                </div>
                <!-- Benefit 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4"><img class="h-24 mx-auto"
                            src="/images/partnership/anadagayunar.jpg" alt="">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800">Patrons of Buddha Sasana</h3>
                    <p class="text-gray-600 mt-4">The Ananda Kaurna Association, led by Prof. Dr. Saw Htut Sandar,
                        promotes Buddhist values, supports monks, aids disaster relief, and fosters compassion and
                        social welfare.</p>
                    <a href="/partnerships/anandakaurna" class="text-primary text-center hover:underline">View more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-gray-100 via-blue-50 to-gray-100 py-16 px-10 md:24 xl:px-32">
        <!-- Partnership Benefits Section -->
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Why Partner with Us?</h2>
            <p class="text-lg text-gray-700 mb-12">At the <b>Asoka Center for Buddhist Studies</b>, we believe in
                creating
                meaningful partnerships that foster growth, understanding, and shared success. Here’s why partnering
                with us will be a valuable experience:</p>

            <div class="grid md:grid-cols-3 gap-12">
                <!-- Benefit 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4">📈</div>
                    <h3 class="text-2xl font-semibold text-gray-800">1. Growth Opportunities</h3>
                    <p class="text-gray-600 mt-4">- Unlock access to a vibrant community dedicated to promoting Buddhist
                        education and values.</p>
                    <p class="text-gray-600 mt-4">- Engage in impactful projects that enhance spiritual and academic
                        development.</p>
                    <p class="text-gray-600 mt-4">- Strengthen your organization's mission by aligning with a center
                        known for its dedication to Buddhist principles and research excellence.</p>
                </div>
                <!-- Benefit 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4">🤝</div>
                    <h3 class="text-2xl font-semibold text-gray-800">2. Collaborative Success</h3>
                    <p class="text-gray-600 mt-4">- Work hand-in-hand with experts and scholars to create programs and
                        initiatives that inspire and transform lives.</p>
                    <p class="text-gray-600 mt-4">- Share and exchange resources, ideas, and experiences to ensure
                        mutual growth and success.</p>
                    <p class="text-gray-600 mt-4">- Build lasting relationships with a global network of Buddhist
                        organizations and institutions.</p>
                </div>
                <!-- Benefit 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <div class="text-6xl text-primary mb-4">🌍</div>
                    <h3 class="text-2xl font-semibold text-gray-800">3. Global Exposure</h3>
                    <p class="text-gray-600 mt-4">- Enhance your visibility by connecting with international audiences
                        interested in Buddhist studies and culture.</p>
                    <p class="text-gray-600 mt-4">- Showcase your contributions and initiatives through our global
                        events, conferences, and digital platforms.</p>
                    <p class="text-gray-600 mt-4">- Be part of a movement that promotes peace, harmony, and
                        enlightenment on a global scale.</p>
                </div>
            </div>
            <p class="text-lg text-gray-700 mt-12">Partner with us to contribute to a brighter future rooted in wisdom,
                compassion, and mindfulness. Together, we can achieve extraordinary milestones for the benefit of
                society.</p>
        </div>
    </section>

    {{-- Our Partners --}}
    {{-- <section class="py-16 bg-gradient-to-r from-gray-100 via-blue-50 to-gray-100 px-10 md:24 xl:px-32">
        <div class="container mx-auto">
            <h2 class="text-5xl font-bold text-gray-900 mb-8 text-center">Our Esteemed Partners</h2>
            <p class="text-lg text-gray-700 mb-12 text-center">We're proud to collaborate with industry leaders to
                create innovative solutions.</p>

            <!-- Partners Logos -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Partner 1 -->
                <div
                    class="flex justify-center items-center p-5 py-14 hover:scale-105 transition-transform duration-300 bg-white rounded-lg">
                    <div
                        class="grid grid-cols-1 lg:grid-cols-2 gap-3 transition duration-300 ease-in-out transform grayscale hover:grayscale-0">
                        <!-- Image Section -->
                        <div class="text-center mx-auto">
                            <img src="/images/partnership/anadagayunar.jpg" alt="Partner Logo"
                                class="h-28 object-contain">
                        </div>
                        <!-- Text Section -->
                        <div class="text-center mx-auto">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloremque consectetur minus
                                aperiam quidem totam, recusandae architecto nesciunt molestiae explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}
</x-layout>
