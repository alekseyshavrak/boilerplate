<form wire:submit.prevent="submit">
    <div class="flex flex-col space-y-10">

        <!-- Title -->
        <x-input.group label="Title" for="postTitle" :error="$errors->first('post.title')" required>
            <x-input.text wire:model.lazy="post.title" id="postTitle" type="text" placeholder="Hello world" />
        </x-input.group>

        <!-- Content -->
        <x-input.group label="Content" for="postContent" :error="$errors->first('post.content')" required>
            <x-input.textarea wire:model.lazy="post.content" id="postContent" placeholder="Content ..." />
        </x-input.group>

        <!-- Action -->
        <x-button.indigo type="submit">Save</x-button.indigo>
    </div>
</form>
