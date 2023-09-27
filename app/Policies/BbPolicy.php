<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;

class BbPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Comment $bb){
        return $bb->user->id === $user->id;
    }

    public function destroy(User $user, Comment $bb){
        return $this->update($user, $bb);
    }
}
