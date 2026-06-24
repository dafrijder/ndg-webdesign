<x-auth-layout title="Email verifiëren" subtitle="Controleer je inbox en bevestig je e-mailadres via de link die we hebben gestuurd.">
    @if (session('status') == 'verification-link-sent')
        <p class="mb-4 text-sm font-medium text-green-300">
            Er is een nieuwe verificatielink verstuurd.
        </p>
    @endif

    <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:items-center sm:justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition-all hover:bg-blue-400 hover:drop-shadow-[0_0_10px_rgba(59,130,246,0.7)]"
            >
                Verstuur opnieuw
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="text-sm text-blue-200 underline hover:text-blue-400">
                Uitloggen
            </button>
        </form>
    </div>
</x-auth-layout>
