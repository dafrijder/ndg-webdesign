<x-admin-layout>
    <section class="min-h-screen bg-[#111823] px-4 pb-16 pt-28 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-sm text-blue-300">Admin panel</p>
                    <h1 class="text-3xl font-extrabold text-blue-400 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                        Blogbeheer
                    </h1>
                    <p class="mt-2 text-blue-200">Beheer alle blogposts vanuit een overzichtelijke tabel.</p>
                </div>
                <a href="{{ route('admin.blog.create') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-blue-400 bg-blue-500/20 px-4 py-2 font-semibold text-blue-200 transition hover:bg-blue-500/30">
                    Nieuwe blog
                </a>
            </div>

            @if(session('success'))
                <div class="mb-4 rounded-xl border border-green-500 bg-green-500/10 px-4 py-3 text-green-300">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-2xl border border-blue-500 bg-[#1b2340] shadow-2xl">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm text-blue-100">
                        <thead class="bg-[#111823] text-xs uppercase tracking-wider text-blue-300">
                            <tr>
                                <th class="px-4 py-3">Titel</th>
                                <th class="px-4 py-3">Inhoud</th>
                                <th class="px-4 py-3">Aangemaakt</th>
                                <th class="px-4 py-3 text-right">Acties</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-blue-900/60">
                            @forelse($blogs as $blog)
                                <tr class="hover:bg-[#111823]/70 transition">
                                    <td class="px-4 py-4 font-semibold text-blue-200">{{ $blog->title }}</td>
                                    <td class="px-4 py-4 text-blue-300">{{ \Illuminate\Support\Str::limit($blog->content, 90) }}</td>
                                    <td class="px-4 py-4 text-blue-300">{{ $blog->created_at?->format('d-m-Y H:i') }}</td>
                                    <td class="px-4 py-4">
                                        <div class="flex flex-wrap items-center justify-end gap-2">
                                            <a href="{{ route('admin.blog.show', $blog) }}" class="rounded-lg border border-blue-500 px-3 py-1.5 text-xs text-blue-200 transition hover:border-blue-300">
                                                Zien
                                            </a>
                                            <a href="{{ route('admin.blog.edit', $blog) }}" class="rounded-lg border border-yellow-500 px-3 py-1.5 text-xs text-yellow-300 transition hover:border-yellow-300">
                                                Bewerken
                                            </a>
                                            <form action="{{ route('admin.blog.destroy', $blog) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze blog wilt verwijderen?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded-lg border border-red-500 px-3 py-1.5 text-xs text-red-300 transition hover:border-red-300">
                                                    Verwijderen
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-8 text-center text-blue-300">Nog geen blogs gevonden.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-6">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
</x-admin-layout>
