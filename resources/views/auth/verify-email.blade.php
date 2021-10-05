<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Vielen Dank für die Anmeldung! Bevor Sie beginnen, könnten Sie Ihre E-Mail-Adresse verifizieren, indem Sie auf den Link klicken, den wir Ihnen soeben gemailt haben? Wenn Sie die E-Mail nicht erhalten haben, schicken wir Ihnen gerne eine neue zu.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Ein neuer Verifizierungslink wurde an die E-Mail-Adresse geschickt, die Sie bei der Registrierung angegeben haben.') }}
            </div>
        @endif

        <div class="mt-4">
            <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                @csrf

                <div>
                    <x-jet-button type="submit" class="block my-3">
                        {{ __('Verifizierungs-E-Mail erneut senden') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="text-center">
                @csrf

                <button type="submit" class="inline-block py-3 underline text-sm text-center text-gray-600 hover:text-gray-900">
                    {{ __('Abmelden') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
