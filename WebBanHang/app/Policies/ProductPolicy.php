<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function before(User $user){
        if($user->status === 1){
            return true;
        }
    }

    public function view(User $user)
    {
        return $user->status === 3;

    }
    public function create(User $user)
    {
        return $user->status !==3;

    }
    public function update(User $user)
    {
        return $user->status === 3;

    }
    public function delete(User $user)
    {
        return $user->status !== 3;

    }

}
