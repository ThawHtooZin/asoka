<x-layout>
    <style>
        #pdf-container canvas {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <div class="flex flex-col justify-center items-center min-h-screen bg-gray-100 p-4">
        <!-- Back Button -->
        <div class="w-full max-w-4xl mb-4">
            <a href="/" class="text-blue-800 font-bold hover:underline">@lang('elibrary.home')</a> > <a href="/elibrary"
                class="text-blue-800 font-bold hover:underline">@lang('elibrary.elibrary')</a>
        </div>

        <!-- PDF Display -->
        <div class="w-full max-w-4xl border-2 border-gray-300 rounded-lg shadow-lg bg-white p-4">
            <iframe src="{{ asset($book->book_url) }}" frameborder="0" width="100%" height="800px"></iframe>
            <!-- Custom container for the PDF -->
            {{-- <div id="pdf-container" style="width: 100%; height: 600px; overflow-y: scroll;"></div> --}}
        </div>
    </div>

    <!-- PDF.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

    {{-- <script>
        var url = '{{ asset($book->book_url) }}'; // Path to your PDF

        // Asynchronously load the PDF
        pdfjsLib.getDocument(url).promise.then(function(pdf) {
            console.log('PDF loaded');
            var totalPages = pdf.numPages; // Get total pages

            // Loop through all pages
            for (var pageNum = 1; pageNum <= totalPages; pageNum++) {
                pdf.getPage(pageNum).then(function(page) {
                    console.log('Page loaded: ' + page.pageNumber);

                    var scale = 1.5; // Zoom level
                    var viewport = page.getViewport({
                        scale: scale
                    });

                    // Prepare canvas to render the page
                    var canvas = document.createElement('canvas');
                    var context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Append the canvas to the container
                    document.getElementById('pdf-container').appendChild(canvas);

                    // Render the page on the canvas
                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                });
            }
        }).catch(function(error) {
            console.log('Error loading PDF: ' + error);
        });

        // Disable right-click on the PDF container
        document.getElementById('pdf-container').addEventListener('contextmenu', function(e) {
            e.preventDefault(); // Disable right-click
        });
    </script> --}}
</x-layout>
