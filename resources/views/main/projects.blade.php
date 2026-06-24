<x-base-layout>
    <section class="min-h-screen bg-[#111823] py-16 px-4">
        <div class="container mx-auto">

            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-400 text-center mb-6 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]">
                Projects
            </h1>

            <p class="text-blue-200 text-center max-w-2xl mx-auto mb-12">
                NDGwebdesign has worked on several innovative projects focused on performance, scalability and user experience.
            </p>

            <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                @foreach($projects as $project)
                    <div class="bg-[#1b2340] border border-blue-500 rounded-3xl p-8 shadow-2xl hover:scale-105 transition-transform duration-300">

                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold text-blue-400">
                                {{ $project->title }}
                            </h2>

                            {{-- Status badge --}}
                            @if($project->status === 'completed')
                                <span class="text-xs text-green-400 bg-green-400/10 px-3 py-1 rounded-full">
                                    Completed
                                </span>
                            @elseif($project->status === 'in_progress')
                                <span class="text-xs text-yellow-400 bg-yellow-400/10 px-3 py-1 rounded-full">
                                    In progress
                                </span>
                            @else
                                <span class="text-xs text-gray-400 bg-gray-400/10 px-3 py-1 rounded-full">
                                    Not started
                                </span>
                            @endif
                        </div>

                        <p class="text-blue-200 mb-6 line-clamp-4">
                            {{ $project->description }}
                        </p>

                        @if($project->linkurl)
                            <a href="{{ $project->linkurl }}"
                               target="_blank"
                               class="inline-block text-blue-400 hover:text-blue-500 font-semibold transition">
                                View project →
                            </a>
                        @endif

                    </div>
                @endforeach

            </div>

            @if($projects->isEmpty())
                <p class="text-center text-blue-300 mt-12">
                    No projects available yet.
                </p>
            @endif

        </div>
    </section>
</x-base-layout>
