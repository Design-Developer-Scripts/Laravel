<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-7 text-sm text-gray-600">
            {{ __('Passwort vergessen? Kein Problem. Teilen Sie uns einfach Ihre E-Mail-Adresse mit und wir senden Ihnen einen Link zum Zurücksetzen des Passworts per E-Mail zu, mit dem Sie ein neues auswählen können.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('E-Mail') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-12">
                <x-jet-button>
                    {{ __('Link zum Zurücksetzen des E-Mail-Passworts') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
