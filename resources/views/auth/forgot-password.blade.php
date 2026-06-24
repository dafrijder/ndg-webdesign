<x-auth-layout title="Wachtwoord vergeten" subtitle="Vul je e-mailadres in. Je ontvangt een link om je wachtwoord te resetten.">
    <x-auth-session-status class="mb-4 text-sm text-green-300" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-blue-300">Email</label>
            <input id="email" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="email" name="email" value="{{ old('email') }}" required autofocus />
            @error('email')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-2">
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Verstuur resetlink
            </button>
        </div>
    </form>
</x-auth-layout>
