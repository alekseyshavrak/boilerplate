@props([
    'label',
    'for',
    'required' => false,
    'error' => false,
    'helpText' => false,
    'paddingless' => false,
    'borderless' => false,
])

<div>
    <label for="{{ $for }}" class="block text-sm leading-5 flex items-center justify-between">
        <div class="text-gray-500 basis-1/2">
            {{ $label }}
            @if($required)
                <sup class="text-red-500">*</sup>
            @endif
        </div>
        @if($error)
            <div class="basis-1/2 text-xs text-right text-red-500 truncate">
                {{ $error }}
            </div>
        @endif
    </label>

    <div class="relative mt-1">
        {{ $slot }}

        @if ($helpText)
            <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
        @endif
    </div>
</div>
