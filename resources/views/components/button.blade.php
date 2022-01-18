@props(['size' => 'md', 'loading' => null])

@php
    $size = match ($size) {
        'xs' => 'py-1 px-4',
        'sm' => 'py-2 px-6',
        'md' => 'py-3 px-8',
        default => $size
    }
@endphp

<button
    @if($loading)
        wire:loading.attr="disabled"
        wire:loading.class="opacity-75 cursor-not-allowed hover:scale-100"
    @endif

    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'inline-block rounded-full leading-5 font-medium transition duration-150 ease-in-out transform hover:scale-105 motion-reduce:transform-none focus:ring-2 focus:ring-offset-background focus:ring-offset-2 focus:outline-none'
        . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : '')
        . ' ' . $size,
    ]) }}
>
    @if($loading)
        <div wire:loading.delay.short>
            <svg wire:loading wire:target="{{ $loading }}" class="animate-spin -ml-1 mr-3 h-4 w-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    @endif
    <span>
        {{ $slot }}
    </span>
</button>
