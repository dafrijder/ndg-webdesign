<x-auth-layout title="Registreren" subtitle="Maak een account aan om toegang te krijgen tot het platform.">
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="mb-2 block text-sm font-medium text-blue-300">Naam</label>
            <input id="name" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            @error('name')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-blue-300">Email</label>
            <input id="email" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
            @error('email')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-medium text-blue-300">Wachtwoord</label>
            <input id="password" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="password" name="password" required autocomplete="new-password" />
            @error('password')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-blue-300">Bevestig wachtwoord</label>
            <input id="password_confirmation" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="password" name="password_confirmation" required autocomplete="new-password" />
            @error('password_confirmation')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:items-center sm:justify-between">
            <a class="text-sm text-blue-200 underline hover:text-blue-400" href="{{ route('login') }}">
                Al geregistreerd?
            </a>

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Registreren
            </button>
        </div>
    </form>
</x-auth-layout>
