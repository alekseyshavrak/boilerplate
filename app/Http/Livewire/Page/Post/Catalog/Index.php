<?php

namespace App\Http\Livewire\Page\Post\Catalog;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Mount component.
     *
     * @param Post $post
     * @return void
     */
    public function mount(Post $post)
    {
        $this->post = $post;
    }
}
