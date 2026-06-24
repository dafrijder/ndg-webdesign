<x-admin-layout>
    <section class="min-h-screen bg-[#111823] px-4 pb-16 pt-28 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <div class="mb-6 flex flex-wrap items-center gap-3">
                <a href="{{ route('admin.projects.index') }}" class="rounded-lg border border-blue-500 px-3 py-2 text-sm text-blue-200 transition hover:border-blue-300">
                    Terug naar overzicht
                </a>
                <a href="{{ route('admin.projects.edit', $project) }}" class="rounded-lg border border-yellow-500 px-3 py-2 text-sm text-yellow-300 transition hover:border-yellow-300">
                    Bewerken
                </a>
            </div>

            <article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
                <p class="text-sm text-blue-300">Project detail</p>
                <h1 class="mt-2 text-3xl font-extrabold text-blue-400">{{ $project->title }}</h1>

                <div class="mt-4 flex flex-wrap gap-3 text-xs text-blue-300">
                    <span class="rounded-full bg-[#111823] px-3 py-1">Status: {{ str_replace('_', ' ', $project->status) }}</span>
                    <span class="rounded-full bg-[#111823] px-3 py-1">Aangemaakt: {{ $project->created_at?->format('d-m-Y H:i') }}</span>
                    <span class="rounded-full bg-[#111823] px-3 py-1">Laatst gewijzigd: {{ $project->updated_at?->format('d-m-Y H:i') }}</span>
                </div>

                @if($project->linkurl)
                    <div class="mt-4">
                        <a href="{{ $project->linkurl }}" target="_blank" rel="noopener noreferrer" class="text-blue-300 underline decoration-blue-500 underline-offset-4 hover:text-blue-200">
                            Project URL openen
                        </a>
                    </div>
                @endif

                <div class="mt-6 whitespace-pre-line rounded-xl bg-[#111823] p-4 leading-relaxed text-blue-100">
                    {{ $project->description }}
                </div>
            </article>
        </div>
    </section>
</x-admin-layout>
