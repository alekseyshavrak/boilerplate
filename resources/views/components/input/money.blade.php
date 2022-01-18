{{--
-- Important note:
--
-- This template is based on an example from Tailwind UI, and is used here with permission from Tailwind Labs
-- for educational purposes only. Please do not use this template in your own projects without purchasing a
-- Tailwind UI license, or they’ll have to tighten up the licensing and you’ll ruin the fun for everyone.
--
-- Purchase here: https://tailwindui.com/
--}}
<div
    class="relative"
    x-data="{
        value: @entangle($attributes->wire('model')),
        mask (value) {
            new IMask(value, {
                mask: 'num', blocks: {
                num: {
                    mask: Number,
                    thousandsSeparator: ' '
                }
            }})
        }
    }"
    x-init="mask($refs.input)"
    x-on:change="value = $event.target.value"
>
    <input {{ $attributes->merge([
            'autocomplete' => 'off',
            'x-ref' => 'input',
            'class' => 'flex-1 text-white form-input text-white px-0 py-4 border-0 border-b bg-transparent border-inherit shadow-none block w-full transition duration-150 ease-in-out placeholder-gray-400 sm:text-lg sm:leading-5 focus:outline-none focus:ring-0 focus:border-green-500',
        ]) }}
    />

    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
        <span class="text-gray-200 sm:text-sm sm:leading-5 uppercase">
            RUB
        </span>
    </div>
</div>
