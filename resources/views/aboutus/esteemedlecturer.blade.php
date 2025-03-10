<x-layout>
    <style>
        .perspective {
            perspective: 1000px;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .rotate-y-180 {
            transform: rotateY(180deg);
        }
    </style>

    <div class="px-[25px] md:px-[260px] py-10">
        <h1
            class="@if (App::getLocale() == 'mm') text-3xl @else text-[33px] @endif font-extrabold text-center text-primary glowing-text mb-8 ">
            @lang('esteemedlecturer.esteemedlecturer')</h1>
        <hr class="border-t-2 my-4 w-20 mx-auto border-primary">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-20">
            <?php
            $cards = [
                [
                    'id' => 0,
                    'image' => 'Prof. Dr. Basanta Bidari.jpg',
                    'title' => 'Prof. Dr. Basanta Bidari',
                    'affiliation' => 'Lumbini Buddhist University, Nepal',
                    'about' => 'Prof. Dr. Basanta Bidari is a renowned archaeologist and professor at Lumbini Buddhist University. With decades of experience, he has made significant contributions to the study of Buddhist history and archaeology, particularly focusing on the sacred sites of Lumbini, the birthplace of Lord Buddha.',
                    'morecontent' => 'Prof. Dr. Basanta Bidari is a renowned archaeologist and professor at Lumbini Buddhist University. With decades of experience, he has made significant contributions to the study of Buddhist history and archaeology, particularly focusing on the sacred sites of Lumbini, the birthplace of Lord Buddha. His expertise in uncovering historical evidence of Buddhism enriches the academic and cultural understanding of the religion\'s origins.<br>He published more than 6 books about Lumbini and Kapilavastu archaeological sites. Attended more that  70 International Conferences and Seminars at US, UK, India, Japan, Korea, Singapore, Thailand, Cambodia, Taiwan, Hongkong, China, etc,..',
                ],
                [
                    'id' => 1,
                    'image' => 'Dr. Manik Shakyahiksu.jpg',
                    'title' => 'Dr. Manik Shakyahiksu',
                    'affiliation' => 'Lumbini Buddhist University, Nepal',
                    'about' => 'Dr. Manik Shakyahiksu is a celebrated scholar in Vajrayana Buddhism and currently serves as the Dean of Lumbini Buddhist University. His scholarly work delves into the intricate philosophies and practices of the Vajrayana tradition, providing valuable insights into its impact on Buddhist heritage. He is dedicated to fostering academic excellence and promoting Buddhist studies worldwide.',
                ],
                [
                    'id' => 2,
                    'image' => 'Prof. Dr. Nilima Chawhan.jpg',
                    'title' => 'Prof. Dr. Nilima Chawhan',
                    'affiliation' => 'Mahaprajapati Gautami Subharti School of Buddhist Studies, RBBSU, Dehradun, India',
                    'about' => 'Dr. Nilima Chawhan born on December 8, 1974 in Nagpur, Maharashtra (India) is a distinguished Buddhist Scholar, Researcher, Orator and Author known for her research and knowledge of Buddhist Philosophy. She raises social and religious issues and exposure of Dr. Ambedkar\'s Buddhism in India.',
                    'morecontent' => 'Dr. Nilima earned her Post Doctorate Degree in Pali and Buddhism from the RTM Nagpur University, Nagpur, India specializing in the various Characteristic and Style of Buddha\'s Sermons. She earned her Doctorate Degree in Pali and Prakrit from RTM Nagpur University, Nagpur, India, specializing in the Buddhist Philosophy. Her doctoral thesis, "An Analytical Study of Noble Eight-Fold Path (Way of Nibbana ) has been widely acclaimed for its social aspect, practices and effect.<br>Dr. Nilima\'s scholarly persuits have taken her to Neo Buddhist communities in Nagpur and she researches with engaged Buddhism in Maharashtra with various Buddhist Movements and activities.
                                                                                                                                                                                                                                                                                                                                    <br> Currently she is serving as a Professor and Head of the Department of Mahaprajapati Gautami Subharti School of Buddhist Studies, Ras Bihari Bose Subharti University, Dehradun, Uttarakhand (India). She continues to inspire her fellow scholars to do quality research and become a good human being.',
                ],
                [
                    'id' => 3,
                    'image' => 'Dr. Ravi Shankar Singh.jpg',
                    'title' => 'Dr. Ravi Shankar Singh',
                    'affiliation' => 'Mahaprajapati Gautami Subharti School of Buddhist Studies, RBBSU, Dehradun, India',
                    'about' => 'Dr. Ravi Shankar Singh is a respected scholar of Pali and an Associate Professor at the Mahaprajapati Gautami Subharti School of Buddhist Studies. His scholarly work emphasizes the linguistic and philosophical aspects of Buddhist texts.',
                    'morecontent' => 'Dr. Ravi Shankar Singh is a respected scholar of Pali and an Associate Professor at the Mahaprajapati Gautami Subharti School of Buddhist Studies. His scholarly work emphasizes the linguistic and philosophical aspects of Buddhist texts. A dedicated educator, Dr. Singh inspires students to explore the profound teachings of the Buddha through Pali scriptures.
                                                                                                                                    <br>Dr. Ravi Shankar Singh is a distinguished Associate Professor of Buddhist 
                                                                                                                                    Studies at the Mahaprajapati Gautami Subharti School of Buddhist Studies, 
                                                                                                                                    Ras Bihari Bose Subharti University, located in Dehradun, India. With a robust academic 
                                                                                                                                    foundation, Dr. Singh completed his graduation from Magadha University in Bodhgaya and further 
                                                                                                                                    pursued his passion for Buddhism at the University of Delhi, where he earned both his Master’s 
                                                                                                                                    and M. Phil degrees. His scholarly journey continued with in-depth research on Peace, Ecology 
                                                                                                                                    and Environment, culminating in a Doctoral and Post-Doctoral degree. 
                                                                                                                                    <br>Recognized for his contributions to research and education, Dr. Singh was awarded a Post
                                                                                                                                    Doctoral fellowship as a General Fellow from the Indian Council of Philosophical Research, 
                                                                                                                                    Government of India. Additionally, he received the prestigious Bhavya International 
                                                                                                                                    organization’s "Indian Besties Award" for his outstanding work in the field of education and 
                                                                                                                                    research. Since 2009, he has been imparting knowledge in the realm of Buddhist Studies, with 
                                                                                                                                    keen interests in Buddhist History and Philosophy, art and architecture, Tibetan Buddhism, Pali 
                                                                                                                                    language and literature, as well as Buddhist tourism and guiding.
                                                                                                                                    <br>Dr. Singh played a pivotal role in establishing the newly opened Buddhist Studies department at 
                                                                                                                                    Mahatma Gandhi International Hindi University (A Central University) in Maharashtra, India and 
                                                                                                                                    has also served at Satyawati College (Eve), University of Delhi. Notably, he has innovated a unique 
                                                                                                                                    Post Graduate Diploma course in Buddhist Tourism and Guiding, reflecting his commitment to 
                                                                                                                                    advancing the field.
                                                                                                                                    <br>A prolific scholar and an active participant in the academic community, Dr. Singh has presented 
                                                                                                                                    numerous papers at both international and national conferences, spanning locations such as 
                                                                                                                                    Australia, Thailand, Hong Kong, Vietnam, and Sri Lanka. His research has been published in 
                                                                                                                                    various international and national journals, and he is the author of a book that adds to the body of 
                                                                                                                                    knowledge in his field. 
                                                                                                                                    <br>Beyond teaching and research, Dr. Singh contributes to the development of academic programs and enhancement of curricular offerings in Buddhist Studies as a member of various syllabus 
                                                                                                                                    committees. He actively engages in departmental activities and holds membership in multiple 
                                                                                                                                    committees within the university, ensuring that he plays a vital role in shaping the future of 
                                                                                                                                    Buddhist Studies. Dr. Singh’s passion and academic excellence for his field and commitment to 
                                                                                                                                    education continue to inspire students and colleagues alike.',
                ],
            ];
            ?>
            @foreach ($cards as $card)
                <!-- Flip Card Container -->
                <div class="relative perspective w-full md:h-[350px] mx-auto" style="height:440px;">
                    <div class="relative preserve-3d w-full h-full transition-transform duration-700"
                        id="card-{{ $loop->index }}">
                        <!-- Front Side -->
                        <div
                            class="absolute w-full h-full bg-gradient-to-r from-blue-100 via-indigo-100 to-blue-200 rounded-lg shadow-lg p-6 text-center backface-hidden">
                            <!-- Profile Image Section -->
                            <div class="relative">
                                <img src="/images/lecturer/{{ $card['image'] }}" alt=""
                                    class="w-40 h-40 rounded-full mx-auto mb-4 object-cover border-l-4 border-t-4 border-primary p-1 shadow-lg hover:scale-110 transition-transform duration-300">
                                <span
                                    class="absolute bottom-2 left-[65%] transform -translate-x-1/2 bg-primary text-white text-sm font-bold px-3 py-1 rounded-full shadow-md">Lecturer</span>
                            </div>

                            <!-- Title and Description -->
                            <h3 class="text-xl font-extrabold text-gray-800 mt-4">{{ $card['title'] }}</h3>
                            <p class="text-sm text-gray-700 mt-2">{{ $card['affiliation'] }}</p>

                            <!-- Social Media Links with Tooltips -->
                            <div class="flex mt-7 mb-1 w-[60%] mx-auto justify-around">
                                <a href="#" class="hover:scale-125 duration-200 relative group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        fill="currentColor" class="bi bi-telephone-fill text-primary hover:text-white"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg>
                                    <span
                                        class="absolute bottom-8 left-[40%] transform -translate-x-1/2 bg-black text-white text-xs px-2 py-1 rounded shadow-md opacity-0 group-hover:opacity-100 transition-opacity">Call</span>
                                </a>
                                <a href="#" class="hover:scale-125 duration-200 relative group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        fill="currentColor" class="bi bi-envelope-at-fill text-primary hover:text-white"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                        <path
                                            d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                                    </svg>
                                    <span
                                        class="absolute bottom-8 left-[40%] transform -translate-x-1/2 bg-black text-white text-xs px-2 py-1 rounded shadow-md opacity-0 group-hover:opacity-100 transition-opacity">Email</span>
                                </a>
                                <a href="#" class="hover:scale-125 duration-200 relative group">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        fill="currentColor" class="bi bi-facebook text-primary hover:text-white"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg>
                                    <span
                                        class="absolute bottom-8 left-[40%] transform -translate-x-1/2 bg-black text-white text-xs px-2 py-1 rounded shadow-md opacity-0 group-hover:opacity-100 transition-opacity">Facebook</span>
                                </a>
                            </div>
                            <button
                                class="text-sm mt-5 bg-primary text-white px-6 py-2 rounded-lg font-bold shadow-md hover:bg-white hover:text-primary transition-all duration-300"
                                onclick="toggleFlip('card-{{ $loop->index }}')">Profile</button>
                        </div>

                        <!-- Back Side -->
                        <div
                            class="absolute w-full h-full bg-gradient-to-r from-gray-100 via-white to-gray-200 rounded-lg shadow-xl p-5 md:p-10 text-center backface-hidden rotate-y-180">
                            <div class="mb-4">
                                <!-- Title -->
                                <h3 class="text-2xl font-bold text-gray-800 tracking-wide">
                                    {{ $card['title'] }}
                                </h3>
                                <!-- Subtitle -->
                                <p class="text-sm font-medium text-primary mt-2">
                                    {{ $card['affiliation'] }}
                                </p>
                            </div>
                            <!-- About Section -->
                            <p class="w-full h-[200px] overflow-y-auto text-gray-600 leading-relaxed p-2">
                                "{{ $card['about'] }}"
                            </p>
                            @if (!empty($card['morecontent']))
                                <button onclick="openModal('{{ $card['id'] }}')" class="mt-1 md:mt-4 hover:underline">
                                    Read More
                                </button>
                            @endif
                            <!-- Call to Action Button -->
                            <button
                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-sm bg-primary text-white px-6 py-2 rounded-lg font-bold shadow-lg hover:scale-105 hover:shadow-2xl hover:bg-white hover:text-primary transition-all duration-300 ease-in-out"
                                onclick="toggleFlip('card-{{ $loop->index }}')">
                                Back
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                @if (!empty($card['morecontent']))
                    <div id="modal-{{ $card['id'] }}"
                        class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
                        <div
                            class="bg-blue-100 w-full max-w-4xl h-[80vh] rounded-lg p-6 relative flex flex-col md:flex-row overflow-hidden">
                            <!-- Close Button -->
                            <button onclick="closeModal('{{ $card['id'] }}')"
                                class="text-3xl absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                                &times;
                            </button>

                            <!-- Left Column -->
                            <div
                                class="flex-1 flex flex-col items-center justify-center p-4 border-b md:border-b-0 md:border-r border-gray-300">
                                <img src="/images/lecturer/{{ $card['image'] }}" alt="{{ $card['title'] }}"
                                    class="w-2/4 h-auto mb-4 object-contain rounded-md">
                                <h2 class="text-xl font-bold text-center">{{ $card['title'] }}</h2>
                            </div>

                            <!-- Right Column -->
                            <div class="flex-1 p-4 overflow-y-auto">
                                <div class="font-sans font-normal max-h-[70vh] pr-2">
                                    {!! $card['morecontent'] !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
    <script>
        function toggleFlip(cardId) {
            const card = document.getElementById(cardId);
            card.classList.toggle('rotate-y-180');
        }

        function openModal(id) {
            const modal = document.getElementById(`modal-${id}`);
            modal.classList.remove('hidden');
        }

        function closeModal(id) {
            const modal = document.getElementById(`modal-${id}`);
            modal.classList.add('hidden');
        }
    </script>
</x-layout>
