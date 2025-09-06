<?php

namespace App\Observers;

class PostObserver
{
    public function creating($post)
    {
        // Automatically set the author_id to the currently authenticated user
        if (auth()->check()) {
            $post->author_id = auth()->id();
        }
    }
}
