@props([
    'leadingAddOn' => false,
])

<div class="flex rounded-md">
    <input {{ $attributes->merge([
        'autocomplete' => 'off',
        'class' => 'flex-1 text-black form-input px-0 py-3 border-0 border-b border-gray-300 bg-transparent shadow-none block w-full transition duration-150 ease-in-out placeholder-gray-400 sm:text-lg sm:leading-5 focus:outline-none focus:ring-0 focus:border-green-500'
        ]) }}
    />
</div>
