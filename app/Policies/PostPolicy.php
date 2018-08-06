<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    // public function before(User $user){
    //     if ($user->id === 1) {
    //         return true;
    //     }
    // }
    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        // dd($user->id, $post->user_id);
        return $user->id === $post->user_id;
    }
}
