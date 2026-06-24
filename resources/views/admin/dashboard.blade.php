<x-admin-layout>
	<section class="min-h-screen bg-[#111823] px-4 pb-16 pt-28 sm:px-6 lg:px-8">
		<div class="mx-auto max-w-7xl space-y-8">
			<div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
				<div>
					<p class="text-sm text-blue-300">Admin panel</p>
					<h1 class="text-3xl font-extrabold text-blue-400 drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] sm:text-4xl">
						Dashboard overzicht
					</h1>
					<p class="mt-2 text-blue-200">
						Realtime overzicht van gebruikers, projecten en blogs.
					</p>
				</div>
			</div>

			<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-5 shadow-xl">
					<p class="text-sm text-blue-200">Totaal gebruikers</p>
					<p class="mt-2 text-3xl font-bold text-blue-400">{{ $totalUsers }}</p>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-5 shadow-xl">
					<p class="text-sm text-blue-200">Totaal projecten</p>
					<p class="mt-2 text-3xl font-bold text-blue-400">{{ $totalProjects }}</p>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-5 shadow-xl">
					<p class="text-sm text-blue-200">Totaal blogs</p>
					<p class="mt-2 text-3xl font-bold text-blue-400">{{ $totalBlogs }}</p>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-5 shadow-xl">
					<p class="text-sm text-blue-200">Geverifieerde gebruikers</p>
					<p class="mt-2 text-3xl font-bold text-blue-400">{{ $verifiedUsers }}</p>
				</article>
			</div>

			<div class="grid gap-6 lg:grid-cols-3">
				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Admin acties</h2>
					<p class="mt-1 text-sm text-blue-200">Snel nieuwe content toevoegen.</p>

					<div class="mt-5 grid gap-3">
						<a href="{{ route('admin.projects.create') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Nieuw project aanmaken
						</a>
						<a href="{{ route('admin.projects.index') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Projecten beheren
						</a>
						<a href="{{ route('admin.blog.create') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Nieuwe blog plaatsen
						</a>
						<a href="{{ route('admin.blog.index') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Blogs beheren
						</a>
						<a href="{{ route('project') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Publieke projecten bekijken
						</a>
						<a href="{{ route('blog') }}" class="rounded-xl border border-blue-500 bg-[#111823] px-4 py-3 text-blue-200 transition hover:border-blue-400 hover:text-blue-300">
							Publieke blogs bekijken
						</a>
					</div>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Gebruikersrollen</h2>
					<div class="mt-5 space-y-3">
						<div class="flex items-center justify-between rounded-xl bg-[#111823] px-4 py-3">
							<span class="text-blue-200">Admins</span>
							<span class="font-semibold text-blue-400">{{ $totalAdmins }}</span>
						</div>
						<div class="flex items-center justify-between rounded-xl bg-[#111823] px-4 py-3">
							<span class="text-blue-200">Clients</span>
							<span class="font-semibold text-blue-400">{{ $totalClients }}</span>
						</div>
					</div>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Project status</h2>
					<div class="mt-5 space-y-3">
						<div class="flex items-center justify-between rounded-xl bg-[#111823] px-4 py-3">
							<span class="text-green-300">Completed</span>
							<span class="font-semibold text-green-300">{{ $projectCompleted }}</span>
						</div>
						<div class="flex items-center justify-between rounded-xl bg-[#111823] px-4 py-3">
							<span class="text-yellow-300">In progress</span>
							<span class="font-semibold text-yellow-300">{{ $projectInProgress }}</span>
						</div>
						<div class="flex items-center justify-between rounded-xl bg-[#111823] px-4 py-3">
							<span class="text-gray-300">Not started</span>
							<span class="font-semibold text-gray-300">{{ $projectNotStarted }}</span>
						</div>
					</div>
				</article>
			</div>

			<div class="grid gap-6 lg:grid-cols-2">
				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Laatste project</h2>
					@if($latestProject)
						<div class="mt-4 rounded-xl bg-[#111823] p-4">
							<p class="text-lg font-semibold text-blue-300">{{ $latestProject->title }}</p>
							<p class="mt-2 text-sm text-blue-200">{{ \Illuminate\Support\Str::limit($latestProject->description, 120) }}</p>
							<div class="mt-3 flex items-center gap-3 text-xs">
								<span class="rounded-full bg-blue-500/20 px-3 py-1 text-blue-300">{{ $latestProject->status }}</span>
								<span class="text-blue-200">{{ $latestProject->created_at?->diffForHumans() }}</span>
							</div>
						</div>
					@else
						<p class="mt-4 text-blue-200">Nog geen projecten gevonden.</p>
					@endif
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Laatste blog</h2>
					@if($latestBlog)
						<div class="mt-4 rounded-xl bg-[#111823] p-4">
							<p class="text-lg font-semibold text-blue-300">{{ $latestBlog->title }}</p>
							<p class="mt-2 text-sm text-blue-200">{{ \Illuminate\Support\Str::limit($latestBlog->content, 120) }}</p>
							<p class="mt-3 text-xs text-blue-200">{{ $latestBlog->created_at?->diffForHumans() }}</p>
						</div>
					@else
						<p class="mt-4 text-blue-200">Nog geen blogs gevonden.</p>
					@endif
				</article>
			</div>

			<div class="grid gap-6 lg:grid-cols-3">
				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Recente users</h2>
					<div class="mt-4 space-y-3">
						@forelse ($recentUsers as $user)
							<div class="rounded-xl bg-[#111823] px-4 py-3">
								<p class="font-medium text-blue-200">{{ $user->name }}</p>
								<p class="text-xs text-blue-300">{{ $user->email }} • {{ $user->role }}</p>
							</div>
						@empty
							<p class="text-blue-200">Geen users gevonden.</p>
						@endforelse
					</div>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Recente projecten</h2>
					<div class="mt-4 space-y-3">
						@forelse ($recentProjects as $project)
							<div class="rounded-xl bg-[#111823] px-4 py-3">
								<p class="font-medium text-blue-200">{{ $project->title }}</p>
								<p class="text-xs text-blue-300">{{ $project->status }} • {{ $project->created_at?->format('d-m-Y') }}</p>
							</div>
						@empty
							<p class="text-blue-200">Geen projecten gevonden.</p>
						@endforelse
					</div>
				</article>

				<article class="rounded-2xl border border-blue-500 bg-[#1b2340] p-6 shadow-2xl">
					<h2 class="text-xl font-bold text-blue-400">Recente blogs</h2>
					<div class="mt-4 space-y-3">
						@forelse ($recentBlogs as $blog)
							<div class="rounded-xl bg-[#111823] px-4 py-3">
								<p class="font-medium text-blue-200">{{ $blog->title }}</p>
								<p class="text-xs text-blue-300">{{ $blog->created_at?->format('d-m-Y') }}</p>
							</div>
						@empty
							<p class="text-blue-200">Geen blogs gevonden.</p>
						@endforelse
					</div>
				</article>
			</div>
		</div>
	</section>
</x-admin-layout>
