<x-layout>
    <div class="px-6 ms-6 mt-6">
        <a href="/" class="text-blue-800 font-bold hover:underline">@lang('elibrary.home')</a> > <a href="/elibrary"
            class="text-blue-800 font-bold hover:underline">@lang('elibrary.elibrary')</a>
    </div>
    <div class="container mx-auto p-6 space-y-8 grid grid-cols-3 gap-4">
        <!-- Book Cover Section -->
        <div class="border-2 flex justify-center items-center p-4 bg-gray-50 shadow-lg w-96 h-96 rounded-lg">
            <img src="{{ asset($book->cover_image) }}" alt="Book Cover"
                class="w-auto h-full max-w-full max-h-full duration-300 hover:scale-105 rounded-lg object-contain">
        </div>

        <!-- Book Details Section -->
        <div class="col-span-2 border-2 p-6 bg-white rounded-lg shadow-lg space-y-4">
            <!-- Book Title and Availability -->
            <div class="grid grid-cols-5 justify-between items-center w-full overflow-hidden">
                <div class="col-span-4">
                    <h2 class="text-3xl font-bold text-gray-800 break-words">{{ $book->title }}</h2>
                    <p class="text-gray-400 break-words">
                        Book Category: {{ $book->category()->first()->name }}
                    </p>
                </div>
                <div class="break-words">
                    <span class="text-green-500 font-semibold">
                        Official ISBN Number: {{ $book->isbn }}
                    </span>
                </div>
            </div>

            <!-- Description -->
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, tortor quis varius pretium,
                est felis scelerisque nulla, vitae placerat justo nunc a massa. Aenean nec montes vestibulum urna vel
                imperdiet ipsum. Orci varius natoque penatibus et magnis dis parturient montes.
            </p>

            <!-- Price and Action Buttons -->
            <div class="flex items-center space-x-4">
                @php
                    $purchaseStatus = optional($book->purchased()->first())->status;
                @endphp

                @if ($book->price != 0)
                    <span class="text-2xl font-bold text-t5">${{ $book->price }}</span>

                    @if ($purchaseStatus == 'requested')
                        <!-- Requested Button -->
                        <a href="#" class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500">
                            Requested
                        </a>
                    @elseif ($purchaseStatus == 'confirmed')
                        <!-- Start Reading Button for Owned Books -->
                        <a href="{{ $book->id }}/read"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Start Reading
                        </a>
                    @elseif(Auth::user()->roles()->first()->name == 'admin')
                        <!-- Start Reading Button for Owned Books -->
                        <a href="{{ $book->id }}/read"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Start Reading
                        </a>
                    @else
                        <!-- Buy Now Button for Books that are Not Owned -->
                        <a href="{{ $book->id }}/buy"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Buy Now
                        </a>
                    @endif
                @else
                    <span class="text-2xl font-bold text-t5">FREE</span>
                    <!-- Read Sample Button for Free Books -->
                    <a href="{{ $book->id }}/read"
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        Read Sample
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-layout>
