<x-jet-action-section>
    <x-slot name="title">
        {{ __('Zwei-Faktor-Authentifizierung') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Erhöhen Sie die Sicherheit Ihres Kontos mit der Zwei-Faktor-Authentifizierung.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('Sie haben die Zwei-Faktor-Authentifizierung aktiviert.') }}
            @else
                {{ __('Sie haben die Zwei-Faktor-Authentifizierung nicht aktiviert.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Wenn die Zwei-Faktor-Authentifizierung aktiviert ist, werden Sie während der Authentifizierung zur Eingabe eines sicheren, zufälligen Tokens aufgefordert. Sie können dieses Token über die Google Authenticator-Anwendung Ihres Telefons abrufen.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Die Zwei-Faktor-Authentifizierung ist jetzt aktiviert. Scannen Sie den folgenden QR-Code mit der Authenticator-Anwendung Ihres Telefons.') }}
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Speichern Sie diese Wiederherstellungscodes in einem sicheren Passwort-Manager. Sie können verwendet werden, um den Zugang zu Ihrem Konto wiederherzustellen, wenn Ihr Zwei-Faktor-Authentifizierungsgerät verloren geht.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Aktivieren') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Wiederherstellungs-Codes regenerieren') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Wiederherstellungscodes anzeigen') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Deaktivieren ') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
