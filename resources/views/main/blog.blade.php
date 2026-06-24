<x-base-layout>
    <section class="min-h-screen bg-[#111823] py-16 px-4">
        <div class="container mx-auto">

            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-400 text-center mb-12 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                Blog
            </h1>

            <!-- Blog Grid -->
            <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($blogs as $blog)
                    <div class="bg-[#1b2340] border border-blue-500 rounded-3xl p-6 shadow-2xl hover:scale-105 transition-transform duration-300">
                        <h2 class="text-2xl font-bold text-blue-400 mb-2">
                            {{ $blog->title }}
                        </h2>

                        <p class="text-blue-200 text-sm mb-4">
                            {{ Str::limit($blog->content, 100) }}
                        </p>

                        <button
                            onclick="openModal({{ $blog->id }})"
                            class="text-blue-400 hover:text-blue-500 font-semibold">
                            Meer info →
                        </button>

                        <p class="text-blue-200">{{$blog->created_at}}</p>
                    </div>

                    <!-- Modal -->
                    <div id="modal-{{ $blog->id }}" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50">
                        <div class="bg-[#1b2340] border border-blue-500 rounded-3xl p-8 max-w-2xl w-full mx-4 shadow-2xl relative">

                            <button onclick="closeModal({{ $blog->id }})"
                                class="absolute top-4 right-4 text-blue-300 hover:text-blue-500 text-xl">
                                ✕
                            </button>

                            <h2 class="text-3xl font-extrabold text-blue-400 mb-4">
                                {{ $blog->title }}
                            </h2>

                            <p class="text-blue-200 leading-relaxed whitespace-pre-line">
                                {{ $blog->content }}
                            </p>

                            <p class="text-blue-200">{{$blog->created_at}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Modal Script -->
    <script>
        function openModal(id) {
            document.getElementById('modal-' + id).classList.remove('hidden');
            document.getElementById('modal-' + id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById('modal-' + id).classList.add('hidden');
            document.getElementById('modal-' + id).classList.remove('flex');
        }
    </script>
</x-base-layout>
