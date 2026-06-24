<x-admin-layout>
    <section class="min-h-screen bg-[#111823] flex items-center justify-center px-4 py-24">
        <div class="w-full max-w-2xl rounded-3xl border border-blue-500 bg-[#1b2340] p-8 shadow-2xl">
            <h1 class="mb-6 text-center text-3xl font-extrabold text-blue-400">Blog bewerken</h1>

            @if ($errors->any())
                <div class="mb-4 rounded-xl border border-red-500 bg-red-500/10 px-4 py-3 text-red-300">
                    <ul class="list-disc pl-5 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.blog.update', $blog) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="mb-1 block text-blue-200">Titel</label>
                    <input type="text" name="title" value="{{ old('title', $blog->title) }}"
                        class="w-full rounded-xl border border-blue-500 bg-[#111823] px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label class="mb-1 block text-blue-200">Inhoud</label>
                    <textarea name="content" rows="6"
                        class="w-full rounded-xl border border-blue-500 bg-[#111823] px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500"
                        required>{{ old('content', $blog->content) }}</textarea>
                </div>

                <div class="flex flex-wrap gap-3 pt-2">
                    <button type="submit"
                        class="rounded-xl bg-blue-500 px-5 py-2.5 font-bold text-white drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition hover:bg-blue-600">
                        Opslaan
                    </button>
                    <a href="{{ route('admin.blog.index') }}"
                        class="rounded-xl border border-blue-500 px-5 py-2.5 font-semibold text-blue-200 transition hover:border-blue-300">
                        Annuleren
                    </a>
                </div>
            </form>
        </div>
    </section>
</x-admin-layout>
