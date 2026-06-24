<x-admin-layout>
    <section class="min-h-screen bg-[#111823] flex items-center justify-center px-4">
        <div class="w-full max-w-2xl bg-[#1b2340] border border-blue-500 rounded-3xl p-8 shadow-2xl">

            <h1 class="text-3xl font-extrabold text-blue-400 text-center mb-6">
                Create Project
            </h1>

            @if(session('success'))
                <p class="text-green-400 text-center mb-4">
                    {{ session('success') }}
                </p>
            @endif

            <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-blue-200 mb-1">Project name</label>
                    <input type="text" name="title"
                        class="w-full bg-[#111823] border border-blue-500 rounded-xl px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                </div>

                <div>
                    <label class="block text-blue-200 mb-1">Description</label>
                    <textarea name="description" rows="5"
                        class="w-full bg-[#111823] border border-blue-500 rounded-xl px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500"
                        required></textarea>
                </div>

                <div>
                    <label class="block text-blue-200 mb-1">Project URL</label>
                    <input type="url" name="linkurl"
                        class="w-full bg-[#111823] border border-blue-500 rounded-xl px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-blue-200 mb-1">Status</label>
                    <select name="status"
                        class="w-full bg-[#111823] border border-blue-500 rounded-xl px-4 py-2 text-blue-100 outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option value="completed">Completed</option>
                        <option value="in_progress">In progress</option>
                        <option value="not_started">Not started</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-xl drop-shadow-[0_0_10px_rgba(59,130,246,0.7)] transition">
                    Save Project
                </button>
            </form>

        </div>
    </section>
</x-admin-layout>
