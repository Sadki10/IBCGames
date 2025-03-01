<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Gràcies per registrar-te! Abans de començar, podries verificar la teva adreça de correu electrònic fent clic a l'enllaç que t'hem enviat per correu electrònic? Si no has rebut el correu electrònic, t'enviarem un altre amb gust.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            Un altre correu electrònic de verificació ha estat enviat a l'adreça de correu electrònic que vas proporcionar durant el registre.
        </div>
    @endif

    <div class="mt-4 flex items-center justify-content-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    Reenviar correu electrònic de verificació
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Tanca la sessió
            </button>
        </form>
    </div>
</x-guest-layout>
