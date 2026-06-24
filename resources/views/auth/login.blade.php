<x-auth-layout title="Inloggen" subtitle="Log in op je account om verder te gaan.">
    <x-auth-session-status class="mb-4 text-sm text-green-300" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-blue-300">Email</label>
            <input
                id="email"
                class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 placeholder-blue-300/50 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
            />
            @error('email')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-medium text-blue-300">Wachtwoord</label>
            <input
                id="password"
                class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 placeholder-blue-300/50 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40"
                type="password"
                name="password"
                required
                autocomplete="current-password"
            />
            @error('password')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-blue-200">
            <input id="remember_me" type="checkbox" class="rounded border-blue-500 bg-[#111823] text-blue-500 focus:ring-blue-500/40" name="remember" />
            Onthoud mij
        </label>

        <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:items-center sm:justify-between">
            @if (Route::has('password.request'))
                <a class="text-sm text-blue-200 underline hover:text-blue-400" href="{{ route('password.request') }}">
                    Wachtwoord vergeten?
                </a>
            @endif

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Log in
            </button>
        </div>
    </form>
</x-auth-layout>
