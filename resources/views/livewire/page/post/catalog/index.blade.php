<div>
    <div class="relative py-16 max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-12 gap-12">

            <div class="col-span-8">
                <!-- Post Items -->
                <div class="relative">
                    <div class="text-2xl mt-2 font-medium">Posts</div>

                    <div class="mt-6">
                        <livewire:page.post.catalog.components.items />
                    </div>
                </div>
            </div>

            <div class="col-span-4">
                <!-- Post Form -->
                <div class="relative bg-gray-100 p-6 border border-gray-200 rounded">
                    <div class="text-lg font-medium">New post</div>

                    <div class="mt-6">
                        <livewire:page.post.store.components.form :post="$post" />
                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
