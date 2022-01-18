<?php

namespace App\Http\Livewire\Page\Post\Catalog\Components;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    /**
     * The listeners events.
     *
     * @return array<string, string>
     */
    protected $listeners = ['postAdded' => '$refresh'];

    /**
     * Render template.
     *
     * @return mixed
     */
    public function render()
    {
        # Load Posts with pagination
        $posts = Post::orderByDesc('id')->paginate(5);

        return view('livewire.page.post.catalog.components.items', compact('posts'));
    }
}
