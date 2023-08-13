<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }"
         x-init="
         (async () => {
         window.onloadTurnstileCallback = function () {
            turnstile.render('#filament-turnstile', {
                callback: function (token) {
                    Livewire.find('{{$getId()}}')
                    $wire.$set('{{$getStatePath()}}', token)
                },
                errorCallback: function () {
                    Livewire.find('{{$getId()}}')
                    $wire.$set('{{$getStatePath()}}', error)
                }
            });
        };
         })()"
         wire:ignore>
        <!-- Interact with the `state` property in Alpine.js -->
        <div
            id="filament-turnstile"
            data-sitekey="{{config('turnstile.turnstile_site_key')}}"
            data-theme="{{$getTheme()}}"
            data-language="{{$getLanguage()}}"
            data-size="{{$getSize()}}">
        </div>
    </div>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
</x-dynamic-component>
