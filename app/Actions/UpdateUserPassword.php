<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateUserPassword
{
    use AsAction;

    public function handle(User $user, array $attributes)
    {
        return $user->update([
            'password' => Hash::make($attributes['new_password'])
        ]);
    }
}
