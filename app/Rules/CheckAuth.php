<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;

class CheckAuth implements Rule
{
    public function passes($attribute, $value)
    {
        return !User::where('name', $value)->orWhere('email', $value)->exists();
    }

    public function message()
    {
        return 'The username or email has already been taken.';
    }
}
