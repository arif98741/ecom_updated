<?php


namespace App\Providers;

use Auth;

class AuthData
{
    /**
     * Get Login User Data
     * @param $guard
     * @return mixed
     */
    static public function user($guard)
    {
        return Auth::guard($guard)->user();
    }

    static public function userId($guard)
    {
        return AuthData::user($guard)->id;
    }
}
