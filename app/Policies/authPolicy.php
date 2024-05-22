<?php

namespace App\Policies;

use App\Models\User;

class authPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function update(User $user, User $model)
    {
          
        return $user;
    }

}
