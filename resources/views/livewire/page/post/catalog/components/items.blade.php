<div>
    @if ($posts->count() > 0)
        <div class="flex flex-col divide-y divide-gray-200">
            @foreach($posts as $post)
                <livewire:page.post.catalog.components.item :post="$post" :wire:key="$post->uuid" />
            @endforeach
        </div>
        <div class="mt-2">
            {{ $posts->links() }}
        </div>
    @else
        Empty posts
    @endif
</div>
