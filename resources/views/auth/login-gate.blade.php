<x-auth-layout title="Beveiligde login" subtitle="Deze loginpagina is extra beveiligd. Vul eerst het extra wachtwoord in.">
    <form method="POST" action="{{ route('login.gate') }}" class="space-y-4">
        @csrf

        <div>
            <label for="gate_password" class="mb-2 block text-sm font-medium text-blue-300">
                Extra wachtwoord
            </label>

            <input
                id="gate_password"
                type="password"
                name="gate_password"
                required
                autofocus
                class="w-full rounded-xl border border-blue-600 bg-[#111823] text-blue-100 placeholder-blue-300/50 focus:border-blue-400 focus:ring-2 focus:ring-blue-500/40"
                placeholder="Vul je extra wachtwoord in"
            >

            @error('gate_password')
                <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-2">
            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Doorgaan naar login
            </button>
        </div>
    </form>
</x-auth-layout>
