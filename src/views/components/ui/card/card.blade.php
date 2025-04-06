<div {{ $attributes->merge(['class' => 'card']) }}>
    @if ($body)
        <x-card-body>
            {{ $slot }}
        </x-card-body>
    @else
        {{ $slot }}
    @endif
</div>
