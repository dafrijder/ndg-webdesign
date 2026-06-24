<x-auth-layout title="Bevestig wachtwoord" subtitle="Dit is een beveiligde handeling. Voer je wachtwoord opnieuw in.">
    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-4">
        @csrf

        <div>
            <label for="password" class="mb-2 block text-sm font-medium text-blue-300">Wachtwoord</label>
            <input id="password" class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40" type="password" name="password" required autocomplete="current-password" />
            @error('password')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-2">
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Bevestigen
            </button>
        </div>
    </form>
</x-auth-layout>
