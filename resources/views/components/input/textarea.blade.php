<div class="flex">
    <textarea {{ $attributes->merge([
        'autocomplete' => 'off',
        'rows' => 8,
        'class' => 'flex-1 form-input px-0 py-3 bg-transparent text-black border-0 border-b border-gray-300 shadow-none block w-full transition duration-150 ease-in-out placeholder-gray-400 sm:text-lg sm:leading-5 focus:outline-none focus:ring-0 focus:border-0 focus:border-b focus:border-green-500'
    ]) }}
    >
        {{ $slot }}
    </textarea>
</div>
