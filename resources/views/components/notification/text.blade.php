<div
    class="text-sm text-gray-500"
    x-data="{ open: false }"
    x-show.transition.out.duration.1000ms="open"
    x-init="
        @this.on('notification:text', () => {
            if (open === false) setTimeout(() => { open = false }, 1500);
            open = true;
        })
    "
>{{ $slot }}</div>
