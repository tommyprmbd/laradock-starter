<?php

use App\Models\Admins;

if (!function_exists('isAdminActive')) {
    function isAdminActive($email)
    {
        return Admins::where('email', $email)
            ->isActive()
            ->exists() ? true : false;
    }
}