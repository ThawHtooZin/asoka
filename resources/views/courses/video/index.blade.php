<x-layout>
    <!-- Toggle Button for Sidebar -->
    <button id="toggle-sidebar"
        class="md:hidden fixed bottom-4 left-4 z-50 bg-gradient-to-r from-blue-800 to-blue-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transform transition-all duration-300">
        <span class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-list text-white" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2zm0 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2zm0 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H2z" />
            </svg>
            Episode List
        </span>
    </button>


    <div class="min-h-screen text-white grid md:grid-cols-3 relative">

        <!-- Main Content for Video Player or Quiz Interface -->
        <main class="flex-1 m-8 bg-gray-300 px-2 py-3 text-gray-900 rounded-lg md:col-span-2">
            @if (Route::is('questionshow'))
                <!-- Quiz Interface -->
                <div class="p-6 bg-gray-50 rounded-md shadow-lg overflow-hidden">
                    <!-- Admin Controls -->
                    <div class="flex justify-end space-x-4 mb-4">
                        @auth
                            @if (auth()->user()->roles()->first()->name == 'admin')
                                <!-- New Question Button -->
                                <button
                                    class="flex items-center bg-green-500 px-4 py-2 rounded-md text-white transition duration-300 ease-in-out transform hover:bg-green-600 hover:scale-105 hover:shadow-md"
                                    type="button" onclick="showQuestionModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zm3.5 7.5a.5.5 0 0 0-.5-.5H8V4a.5.5 0 0 0-1 0v4H4a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0V9h3a.5.5 0 0 0 .5-.5z" />
                                    </svg>
                                    New Question
                                </button>

                                <!-- New Question Modal -->
                                <div id="newQuestionForm"
                                    class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                                        <h2 class="text-xl font-semibold text-center mb-4">Add New Question</h2>
                                        <form id="addQuestionForm" method="POST"
                                            action="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/add">
                                            @csrf
                                            <textarea name="question_text" rows="4" class="w-full p-2 border border-gray-300 rounded-md mb-4"
                                                placeholder="Enter your question here..."></textarea>
                                            <div class="flex justify-between">
                                                <button type="button" id="cancelQuestionBtn"
                                                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                                                    onclick="closeQuestionModal()">Cancel</button>
                                                <button type="submit"
                                                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Add
                                                    Question</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Edit Button -->
                                <button
                                    class="flex items-center bg-yellow-400 px-4 py-2 rounded-md text-white transition duration-300 ease-in-out transform hover:bg-yellow-500 hover:scale-105 hover:shadow-md"
                                    type="button" onclick="showQuestionEditModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="h-5 w-5 mr-2" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                    </svg>
                                    Edit
                                </button>

                                <!-- Edit Question Modal -->
                                <div id="editQuestionForm"
                                    class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-[700px]">
                                        <h2 class="text-xl font-semibold text-center mb-4">Edit Questions</h2>
                                        <div>
                                            @foreach ($questions as $question)
                                                <div class="mb-4">
                                                    <div class="grid grid-cols-12 justify-between items-center">
                                                        <div class="max-w-full col-span-11">
                                                            <p class="text-wrap truncate">{{ $question->question_text }}</p>
                                                        </div>
                                                        <div>
                                                            <button type="button"
                                                                class="p-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 col-span-1"
                                                                onclick="toggleQuestionEdit({{ $question->id }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="h-5 w-5"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                    </div>
                                                    <div id="questionEditForm-{{ $question->id }}" class="hidden mt-2">
                                                        <form
                                                            action="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/{{ $question->id }}/update"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="question_id"
                                                                value="{{ $question->id }}">
                                                            <textarea name="question_text" rows="3" class="w-full bg-gray-100 p-2 rounded-md m-2">{{ $question->question_text }}</textarea>
                                                            <div class="flex justify-end mt-2">
                                                                <button type="button"
                                                                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                                                                    onclick="toggleQuestionEdit({{ $question->id }})">
                                                                    Cancel
                                                                </button>
                                                                <button type="submit"
                                                                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="flex justify-between">
                                            <div></div>
                                            <button type="button" id="cancelQuestionBtn"
                                                class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                                                onclick="closeQuestionEditModal()">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function toggleQuestionEdit(id) {
                                        const form = document.getElementById(`questionEditForm-${id}`);
                                        form.classList.toggle('hidden');
                                    }
                                </script>

                                <!-- Delete Button -->
                                <button
                                    class="flex items-center bg-red-500 px-4 py-2 rounded-md text-white transition duration-300 ease-in-out transform hover:bg-red-600 hover:scale-105 hover:shadow-md"
                                    type="button" onclick="showQuestionDeleteModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5zM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06z" />
                                    </svg>
                                    Delete
                                </button>

                                <!-- Delete Question Modal -->
                                <div id="deleteQuestionForm"
                                    class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-[700px]">
                                        <h2 class="text-xl font-semibold text-center mb-4">Delete Questions</h2>
                                        <div>
                                            @foreach ($questions as $question)
                                                <form class="mb-4"
                                                    action="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/{{ $question->id }}/destroy"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="firstquestion"
                                                        value="{{ $firstquestion->id }}">
                                                    <div class="grid grid-cols-12 justify-between items-center">
                                                        <div class="max-w-full col-span-11">
                                                            <p class="text-wrap truncate">{{ $question->question_text }}
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button type="submit"
                                                                class="p-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                    fill="currentColor" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5zM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
                                        </div>
                                        <div class="flex justify-between">
                                            <div></div>
                                            <button type="button" id="cancelQuestionBtn"
                                                class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                                                onclick="closeQuestionDeleteModal()">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function toggleQuestionDelete(id) {
                                        const form = document.getElementById(`questionEditForm-${id}`);
                                        form.classList.toggle('hidden');
                                    }
                                </script>
                            @endif
                        @endauth
                    </div>

                    <!-- Quiz Header -->
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-700">Answer the Quiz</h1>
                        <p class="text-lg font-medium text-gray-500">
                            Question {{ $currentquestioncount }} of {{ $TotalQuizCount }}
                        </p>
                    </div>

                    <!-- Quiz Question and Options -->
                    <form method="POST"
                        action="{{ route('submitquizanswer', ['course' => $course->id, 'quiz' => $quiz->id, 'question' => request('question')]) }}">
                        @csrf
                        <div class="mb-6">
                            <!-- Question -->
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Question:</h2>
                            <p class="text-gray-600 bg-white p-4 rounded-md shadow-sm w-full break-words">
                                {{ $currentquestion->question_text }}
                            </p>
                        </div>


                        <!-- Answers -->
                        <div class="space-y-4" id="answers-container">
                            @foreach ($currentquestion->answers as $answer)
                                <label
                                    class="block relative pl-8 pr-4 py-3 cursor-pointer shadow-sm hover:shadow-lg transition duration-300 rounded-md bg-gray-50 border border-gray-200 peer-checked:border-blue-500 peer-checked:bg-blue-500 flex items-center justify-between">
                                    <input type="radio" name="answer" value="{{ $answer->id }}"
                                        class="peer hidden">
                                    <span
                                        class="absolute left-2 top-1/2 transform -translate-y-1/2 w-6 h-6 border border-gray-400 rounded-full bg-white peer-checked:bg-blue-500 flex items-center justify-center">
                                        <svg class="hidden peer-checked:block w-4 h-4 text-white"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.5 11.5L2.5 7.5l1.4-1.4 2.6 2.6 6.6-6.6L14.5 3l-8 8z" />
                                        </svg>
                                    </span>
                                    <span class="block ml-10 text-sm">
                                        <span
                                            class="block font-medium peer-checked:text-white">{{ $answer->answer_text }}</span>
                                        @if (auth()->user()->roles()->first()->name == 'admin')
                                            <span class="block mt-1 text-xs flex items-center gap-2">
                                                @if ($answer->is_correct == 1)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-check-circle text-green-500" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                        <path
                                                            d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                                    </svg>
                                                    <span class="text-gray-500">Correct Answer</span>
                                                @endif
                                            </span>
                                        @endif
                                    </span>
                                    @if (auth()->user()->roles()->first()->name == 'admin')
                                        <div class="flex items-center gap-2">
                                            <a href="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/{{ $currentquestion->id }}/answer/{{ $answer->id }}/destroy"
                                                class="p-2 rounded-md bg-red-500 hover:bg-red-600 transition duration-200 focus:ring focus:ring-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    class="h-4 w-4 text-white" fill="currentColor"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5zM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06z" />
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </label>
                            @endforeach
                        </div>

                        {{-- Form to add Answers --}}
                        @if (auth()->user()->roles()->first()->name == 'admin')
                            <div class="space-y-4">
                                <button type="button"
                                    class="p-2 mx-auto flex items-center text-green-500 border-b-green-500 hover:text-green-600 hover:border-b hover:border-b-green-600"
                                    onclick="showAnswerModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zm3.5 7.5a.5.5 0 0 0-.5-.5H8V4a.5.5 0 0 0-1 0v4H4a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0V9h3a.5.5 0 0 0 .5-.5z" />
                                    </svg>
                                    New Answer
                                </button>
                            </div>
                        @endif

                        <!-- Submit Button -->
                        <div class="mt-6 text-right">
                            <button id="submit-button" type="submit" disabled
                                class="px-4 py-2 bg-gray-400 text-white rounded-md transition duration-300 cursor-not-allowed">
                                Submit Answer
                            </button>
                        </div>
                    </form>
                </div>
            @else
                <!-- Video Interface -->
                <div
                    class="aspect-w-16 aspect-h-9 bg-black rounded-md overflow-hidden border border-gray-300 shadow-md">
                    <video controls class="mx-auto" loop autoplay>
                        <source src="{{ asset($video->video_url) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="mt-4 p-3 rounded-lg bg-gray-100">

                    <!-- Navigation Buttons for Previous and Next Videos -->
                    <div class="flex justify-between mb-4">
                        <a href="{{ $previousVideoUrl ?? '#' }}"
                            class="px-4 py-2 bg-asokablue text-white rounded-lg font-semibold transition-transform duration-200 hover:scale-105 {{ !$previousVideoUrl ? 'opacity-50 cursor-not-allowed' : '' }}"
                            {{ !$previousVideoUrl ? 'aria-disabled=true' : '' }}>
                            &larr; Previous
                        </a>

                        <a href="{{ $nextVideoUrl ?? '#' }}"
                            class="px-4 py-2 bg-asokablue text-white rounded-lg font-semibold transition-transform duration-200 hover:scale-105 {{ !$nextVideoUrl ? 'opacity-50 cursor-not-allowed' : '' }}"
                            {{ !$nextVideoUrl ? 'aria-disabled=true' : '' }}>
                            Next &rarr;
                        </a>
                    </div>

                    <!-- Video Title and Description Section -->
                    <div class="bg-gray-100 px-4 py-3 rounded-lg relative">
                        <h1 class="text-xl font-bold mb-4">{{ $video->title }}</h1>
                        <p>
                            {{ $video->description ?? 'No description available for this video.' }}
                        </p>

                        <!-- Resources Dropdown -->
                        @if ($video->resources->isNotEmpty())
                            <div class="absolute top-0 right-0 mt-4 mr-4">
                                <div class="relative inline-block text-left">
                                    <button type="button"
                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        id="resources-menu-button" aria-expanded="true" aria-haspopup="true"
                                        onclick="toggleResourcesDropdown()">
                                        Resources
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="resources-dropdown"
                                        class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="resources-menu-button" tabindex="-1">
                                        <div class="py-1 max-h-60 overflow-y-auto" role="none">
                                            @foreach ($video->resources as $resource)
                                                <a href="{{ $resource->pdf }}" target="_blank"
                                                    class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 truncate"
                                                    role="menuitem" tabindex="-1"
                                                    title="{{ $resource->name }}">{{ $resource->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </main>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="bg-gray-200 text-gray-900 p-4 h-screen shadow-lg overflow-y-auto border-r border-gray-200 md:static fixed top-0 right-0 w-80 md:z-0 transform translate-x-full md:translate-x-0 transition-transform duration-300 z-40 md:w-full">
            <div class="mb-6 border-b pb-2">
                <a href="/courses/{{ $course->id }}/show"
                    class="text-2xl font-semibold text-primary hover:underline">
                    {{ $course->name }}
                </a>
            </div>
            <ul>
                @foreach ($chapters as $chapter)
                    <li class="mb-4 border bg-white border-gray-300 rounded-lg overflow-hidden">
                        <div class="flex justify-between items-center p-3 cursor-pointer chapter-title hover:bg-gray-100"
                            data-chapter-id="{{ $chapter->id }}">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-camera-reels text-primary" viewBox="0 0 16 16">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0" />
                                    <path
                                        d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1" />
                                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                </svg>
                                <h3 class="text-lg font-medium">{{ $chapter->title }}</h3>
                            </div>
                            <span class="transition-transform transform chapter-arrow">&#9660;</span>
                        </div>
                        <ul class="space-y-2 max-h-0 overflow-hidden transition-max-height duration-500 ease-in-out chapter-videos"
                            data-chapter-id="{{ $chapter->id }}">
                            @foreach ($chapter->videos as $video)
                                <li>
                                    <a href="/courses/{{ $course->id }}/chapters/{{ $chapter->id }}/videos/{{ $video->id }}"
                                        class="text-sm block px-3 py-2  
                            {{ request()->is('courses/*/chapters/*/videos/' . $video->id) ? 'bg-primary text-white' : 'bg-gray-100 text-gray-900' }}
                            hover:bg-primary hover:text-white transition-all duration-200">
                                        {{ $video->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                <li class="mb-4 border border-gray-300 rounded-lg overflow-hidden">
                    <!-- Quiz Title Section -->
                    <form class="flex justify-between items-center p-3 cursor-pointer quiz-title mb-0"
                        action="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/{{ $firstquestion->id }}"
                        method="get">
                        <button type="submit"
                            class="flex items-center gap-3 w-full text-left hover:bg-gray-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-lightbulb-fill text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5" />
                            </svg>
                            <h3 class="text-lg font-medium">Take Quiz</h3>
                        </button>
                    </form>
                </li>
            </ul>
        </aside>
    </div>

    <script>
        const toggleButton = document.getElementById('toggle-sidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('translate-x-full');
        });

        function toggleResourcesDropdown() {
            const dropdown = document.getElementById('resources-dropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>

    @if (session('score'))
        <div class="alert alert-success">
            <strong>Congratulations!</strong> Your score is: {{ session('score') }}.
        </div>
    @endif

    <div id="NewAnswerDiv" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-semibold text-center mb-4">Add New Answer</h2>
            <form method="POST"
                action="/courses/{{ $course->id }}/quiz/{{ $quiz->id }}/questions/{{ $currentquestion->id }}/answer/add">
                @csrf
                <textarea name="answer_text" rows="4" class="w-full p-2 border border-gray-300 rounded-md mb-4"
                    placeholder="Enter your answer here..."></textarea>

                <!-- Checkbox for true or not -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="answerTrue" name="isAnswer" value="1"
                        class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                    <label for="answerTrue" class="ml-2 text-gray-700">Mark as correct answer</label>
                </div>

                <div class="flex justify-between">
                    <button type="button" id="cancelQuestionBtn"
                        class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                        onclick="closeAnswerModal()">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                        Add Answer
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function showAnswerModal() {
            document.getElementById('NewAnswerDiv').classList.remove('hidden');
            document.getElementById('NewAnswerDiv').classList.add('fadeIn');
        }

        // Function to close the modal
        function closeAnswerModal() {
            document.getElementById('NewAnswerDiv').classList.remove('fadeIn');
            document.getElementById('NewAnswerDiv').classList.add('hidden');
        }
    </script>
    <script>
        jQuery(document).ready(function() {
            // Toggling logic for chapter and quiz video list based on click
            jQuery('.chapter-title').on('click', function() {
                const chapterId = jQuery(this).data('chapter-id');
                const videosList = jQuery(`.chapter-videos[data-chapter-id="${chapterId}"]`);
                const arrow = jQuery(this).find('.chapter-arrow');

                videosList.toggleClass('max-h-0 max-h-screen');
                arrow.toggleClass('rotate-180');
            });

            // Automatically open the chapter video list if the current URL matches a chapter
            @foreach ($chapters as $chapter)
                // Check if the current URL contains the chapter and video links
                if (window.location.href.indexOf(
                        "{{ url('/courses/' . $course->id . '/chapters/' . $chapter->id . '/videos') }}") > -1) {
                    const videosList = jQuery(`.chapter-videos[data-chapter-id="{{ $chapter->id }}"]`);
                    const arrow = jQuery(`.chapter-title[data-chapter-id="{{ $chapter->id }}"] .chapter-arrow`);

                    // Ensure the chapter is expanded when the page URL matches
                    videosList.removeClass('max-h-0').addClass('max-h-screen');
                    arrow.addClass('rotate-180');
                }
            @endforeach
        });

        // Function to show the new question modal
        function showQuestionModal() {
            document.getElementById('newQuestionForm').classList.remove('hidden');
            document.getElementById('newQuestionForm').classList.add('fadeIn');
        }

        // Function to close the modal
        function closeQuestionModal() {
            document.getElementById('newQuestionForm').classList.remove('fadeIn');
            document.getElementById('newQuestionForm').classList.add('hidden');
        }

        function showQuestionEditModal() {
            document.getElementById('editQuestionForm').classList.remove('hidden');
            document.getElementById('editQuestionForm').classList.add('fadeIn');
        }

        // Function to close the modal
        function closeQuestionEditModal() {
            document.getElementById('editQuestionForm').classList.remove('fadeIn');
            document.getElementById('editQuestionForm').classList.add('hidden');
        }

        function showQuestionDeleteModal() {
            document.getElementById('deleteQuestionForm').classList.remove('hidden');
            document.getElementById('deleteQuestionForm').classList.add('fadeIn');
        }

        // Function to close the modal
        function closeQuestionDeleteModal() {
            document.getElementById('deleteQuestionForm').classList.remove('fadeIn');
            document.getElementById('deleteQuestionForm').classList.add('hidden');
        }

        // Adding fade-in animation
        const questionStyle = document.createElement('style');
        questionStyle.innerHTML = `
                                    @keyframes fadeIn {
                                        from {
                                            opacity: 0;
                                            transform: scale(0.9);
                                        }
                                        to {
                                            opacity: 1;
                                            transform: scale(1);
                                        }
                                    }
                                    .fadeIn {
                                        animation: fadeIn 0.3s ease-in-out forwards;
                                    }
                                `;
        document.head.appendChild(questionStyle);

        // Event listeners for buttons
        document.getElementById('cancelQuestionBtn').addEventListener('click', closeQuestionModal);

        document.addEventListener('DOMContentLoaded', function() {
            const answersContainer = document.getElementById('answers-container');
            const submitButton = document.getElementById('submit-button');

            answersContainer.addEventListener('change', function() {
                const selectedAnswer = document.querySelector('input[name="answer"]:checked');
                if (selectedAnswer) {
                    submitButton.disabled = false;
                    submitButton.classList.remove('bg-gray-400', 'cursor-not-allowed');
                    submitButton.classList.add('bg-blue-500', 'hover:bg-blue-600', 'hover:shadow-md');
                } else {
                    submitButton.disabled = true;
                    submitButton.classList.add('bg-gray-400', 'cursor-not-allowed');
                    submitButton.classList.remove('bg-blue-500', 'hover:bg-blue-600', 'hover:shadow-md');
                }
            });
        });
    </script>
</x-layout>
