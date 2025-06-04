@php
    $galleries = App\Models\Gallery::all();
@endphp
<x-layouts.app.main>
    <section class="pt-36 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Notre galerie</h1>

            </div>
        </div>
        <div class="wave-divider h-20 bg-bottom bg-no-repeat bg-cover"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1440 320\'%3E%3Cpath fill=\'%23F9FAFB\' fill-opacity=\'1\' d=\'M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\'%3E%3C/path%3E%3C/svg%3E');">
        </div>
    </section>

    <!-- History Content Section with Sidebar -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex-1 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @php
                    $galleryImages = $galleries->pluck('image')->map(fn($img) => asset('storage/' . $img))->values();
                @endphp
                @forelse ($galleries as $index => $gallery)
                    <div class="relative group rounded-lg overflow-hidden shadow border border-gray-200">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Image galerie"
                            class="w-full h-40 object-cover group-hover:scale-105 transition-all duration-300 cursor-pointer"
                            onclick="showImageModal({{ $index }})">
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/40 transition-opacity duration-300">
                            <button onclick="showImageModal({{ $index }})"
                                class="bg-white text-blue-700 px-4 py-2 rounded shadow text-sm font-semibold flex items-center gap-2">
                                <i class="fas fa-search-plus"></i>
                                Voir en grand
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-8">
                        Aucune image dans la galerie.
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <!-- Modal for viewing image in large -->
    <div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden">
        <div class="relative max-w-3xl w-full mx-4 flex items-center">
            <!-- Previous Button -->
            <button id="prevBtn" onclick="showPrevImage()"
                class="absolute left-0 ml-2 bg-white/80 hover:bg-white text-blue-700 rounded-full p-2 shadow z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <div class="relative flex-1 flex justify-center">
                <button onclick="closeImageModal()"
                    class="absolute top-2 right-2 bg-white rounded-full p-2 shadow text-gray-700 hover:bg-gray-100 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <img id="modalImage" src="" alt="Image en grand"
                    class="w-full max-h-[80vh] object-contain rounded-lg shadow-lg bg-white">
            </div>
            <!-- Next Button -->
            <button id="nextBtn" onclick="showNextImage()"
                class="absolute right-0 mr-2 bg-white/80 hover:bg-white text-blue-700 rounded-full p-2 shadow z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        // Images array from PHP
        const galleryImages = @json($galleryImages);
        let currentIndex = 0;

        function showImageModal(index) {
            currentIndex = index;
            updateModalImage();
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function updateModalImage() {
            document.getElementById('modalImage').src = galleryImages[currentIndex];
            // Hide prev/next if at ends
            document.getElementById('prevBtn').style.display = currentIndex === 0 ? 'none' : '';
            document.getElementById('nextBtn').style.display = currentIndex === galleryImages.length - 1 ? 'none' : '';
        }

        function showPrevImage() {
            if (currentIndex > 0) {
                currentIndex--;
                updateModalImage();
            }
        }

        function showNextImage() {
            if (currentIndex < galleryImages.length - 1) {
                currentIndex++;
                updateModalImage();
            }
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.getElementById('modalImage').src = '';
        }

        // Optional: Close modal on ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closeImageModal();
            }
            // Left/Right arrow navigation
            if (!document.getElementById('imageModal').classList.contains('hidden')) {
                if (event.key === "ArrowLeft") showPrevImage();
                if (event.key === "ArrowRight") showNextImage();
            }
        });
        // Optional: Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    </script>

</x-layouts.app.main>
