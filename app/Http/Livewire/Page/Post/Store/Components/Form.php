<?php

namespace App\Http\Livewire\Page\Post\Store\Components;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Form extends Component
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

    /**
     * Rules validation.
     *
     * @return array<string, array>
     */
    public function rules(): array
    {
        return [
            'post.title' => ['required', 'min:1', 'max:255'],
            'post.content' => ['required', 'min:1'],
        ];
    }

    /**
     * Submit form.
     *
     * @return void
     */
    public function submit(): void
    {
        $this->validate();

        try {
            DB::beginTransaction();

            # Save post
            $this->post->save();

            DB::commit();

            $this->emit('postAdded', $this->post->id);

            $this->dispatchBrowserEvent('notification:toast', [
                'text' => 'Ваш пост успешно добавлен',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error(__CLASS__, ['message' => $e->getMessage()]);

            $this->dispatchBrowserEvent('notification:toast', [
                'text' => __('app.server.500'),
                'type' => 'error'
            ]);
        }

        # Clear Post Model
        $this->post = new Post();
    }
}
