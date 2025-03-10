<x-layout>
    <div class="mx-auto py-16 space-y-12">
        <h1 class="text-4xl font-[1000] roboto-slab text-center text-gray-900">Contact <span class="text-t5">ASOKA</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6">
            <!-- Information Section -->

            <!-- Contact Form Section -->
            <div
                class="bg-gradient-to-r from-blue-100 via-indigo-100 to-blue-200 hover:shadow-lg border border-gray-200 p-8 rounded-lg transition-all duration-300">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Please Tell Us More!</h2>
                <form action="" method="POST" class="space-y-6">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
                        <input type="text" id="name" name="name" required
                            class="mt-2 w-full px-4 py-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-2 w-full px-4 py-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-600">Subject</label>
                        <input type="text" id="subject" name="subject" required
                            class="mt-2 w-full px-4 py-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                        <textarea id="message" name="messages" rows="4" required
                            class="mt-2 w-full px-4 py-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 ease-in-out"></textarea>
                    </div>

                    <!-- Submit -->
                    <div>
                        <button type="submit"
                            class="w-full py-3 bg-asokablue text-white font-semibold rounded-md hover:bg-blue-600 transition duration-200">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <div
                class="bg-gradient-to-r from-blue-200 via-indigo-100 to-blue-100 hover:shadow-lg border border-gray-200 p-8 rounded-lg transition-all duration-300 space-y-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Information</h2>

                <div class="grid lg:grid-cols-2 gap-5">

                    <div>
                        <!-- Phone Section -->
                        <div>
                            <h3 class="text-lg font-bold text-gray-700 mb-4">Phone</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-phone-alt text-primary text-2xl"></i>
                                    <a href="tel:+959775577991"
                                        class="text-gray-800 text-lg transition duration-200 hover:underline hover:text-primary">
                                        +95 9775577991 (Myanmar)
                                    </a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <i class="fas fa-phone-alt text-primary text-2xl"></i>
                                    <a href="tel:+918368197987"
                                        class="text-gray-800 text-lg transition duration-200 hover:underline hover:text-primary">
                                        +91 8368197987 (India)
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Email Section -->
                        <div>
                            <h3 class="text-lg font-bold text-gray-700 mb-4">Email</h3>
                            <div class="flex items-center space-x-4">
                                <i class="fas fa-envelope text-primary text-2xl"></i>
                                <a href="mailto:sawhtutsandar18@gmail.com"
                                    class="text-gray-800 text-lg transition duration-200 hover:underline hover:text-primary">
                                    sawhtutsandar18@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Section -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-700 mb-4">Social Media</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <i class="fab fa-facebook-f text-blue-600 text-3xl"></i>
                                <a href="https://www.facebook.com/charumati.asoka?mibextid=ZbWKwL" target="_blank"
                                    class="text-gray-800 text-lg hover:text-blue-600 transition duration-200 hover:underline">
                                    Saw Htut Sandar Facebook
                                </a>
                            </div>
                            <div class="flex items-center space-x-4">
                                <i class="fab fa-instagram text-pink-600 text-3xl"></i>
                                <a href="https://www.instagram.com/yourprofile" target="_blank"
                                    class="text-gray-800 text-lg hover:text-pink-600 transition duration-200 hover:underline">
                                    Saw Htut Sandar Instagram
                                </a>
                            </div>
                            <div class="flex items-center space-x-4">
                                <i class="fab fa-twitter text-blue-400 text-3xl"></i>
                                <a href="https://www.twitter.com/yourprofile" target="_blank"
                                    class="text-gray-800 text-lg hover:text-blue-400 transition duration-200 hover:underline">
                                    Saw Htut Sandar Twitter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- WEBSITE TEAM MEMBERS --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="lg:col-span-2">
                        <h1 class="text-2xl font-semibold text-gray-800 mb-2">Website Team Members</h1>
                    </div>
                    <div class="bg-white text-center text-black p-6 rounded-lg shadow-lg hover:scale-105 duration-300">
                        <h1 class="text-xl font-semibold">Ven.
                            Candavara</h1>
                        <div class="grid grid-rows-3 gap-4 mt-4">
                            <a href="tel:+959754156903" class="text-green-600 hover:underline"><i
                                    class="fa-solid fa-phone"></i>
                                +959754156903</a>
                            <a href="mailto:ashinsanda1986@gmail.com" class="text-red-400 hover:underline"><i
                                    class="fa-solid fa-envelope"></i> ashinsanda1986@gmail.com</a>
                            <a href="https://www.facebook.com/profile.php?id=100009752416845"
                                class="text-blue-600 hover:underline"><i class="fab fa-facebook"></i>Facebook
                                Account</a>
                        </div>
                    </div>
                    <div class="bg-white text-center text-black p-6 rounded-lg shadow-lg hover:scale-105 duration-300">
                        <h1 class="text-xl font-semibold">Ven. Acara</h1>
                        <p class="text-primary">Chief Monk, Moegok Monastery</p>
                        <div class="grid grid-rows-3 gap-4 mt-4">
                            <a href="tel:+959258025703" class="text-green-600 hover:underline"><i
                                    class="fa-solid fa-phone"></i>
                                +959258025703</a>
                            <a href="mailto:acaraashin653@gmail.com" class="text-red-400 hover:underline"><i
                                    class="fa-solid fa-envelope"></i>acaraashin653@gmail.com</a>
                            <a href="https://www.facebook.com/profile.php?id=100010558060793&mibextid=ZbWKwL"
                                class="text-blue-600 hover:underline"><i class="fab fa-facebook"></i>Facebook
                                Account</a>
                        </div>
                    </div>
                    <div class="bg-white text-center text-black p-6 rounded-lg shadow-lg hover:scale-105 duration-300">
                        <h1 class="text-xl font-semibold">Ven.
                            Vicitta</h1>
                        <div class="grid grid-rows-3 gap-4 mt-4">
                            <a href="tel:+959400888551" class="text-green-600 hover:underline"><i
                                    class="fa-solid fa-phone"></i>
                                +959400888551</a>
                            <a href="mailto:vicittathera@gmail.com" class="text-red-400 hover:underline"><i
                                    class="fa-solid fa-envelope"></i>vicittathera@gmail.com</a>
                            <a href="https://www.facebook.com/vicitta.thera.9?mibextid=ZbWKwL"
                                class="text-blue-600 hover:underline"><i class="fab fa-facebook"></i>Facebook
                                Account</a>
                        </div>
                    </div>
                    <div class="bg-white text-center text-black p-6 rounded-lg shadow-lg hover:scale-105 duration-300">
                        <h1 class="text-xl font-semibold">Daw Mie Mie Han</h1>
                        <div class="grid grid-rows-3 gap-4 mt-4">
                            <a href="tel:+959444465558" class="text-green-600 hover:underline"><i
                                    class="fa-solid fa-phone"></i>
                                +959444465558</a>
                            <a href="#" class="text-red-400 hover:underline"><i
                                    class="fa-solid fa-envelope"></i>name@gmail.com</a>
                            <a href="https://www.facebook.com/miemiehan?mibextid=ZbWKwL"
                                class="text-blue-600 hover:underline"><i class="fab fa-facebook"></i>Facebook
                                Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
