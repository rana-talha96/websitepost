<?php

namespace App\Observers;

use App\Jobs\SendNewPostMails;
use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        if($post->website->subscribers->count()) {
            SendNewPostMails::dispatch($post);
        }
    }
}
