<?php

namespace App\Http\Controllers\Auth;

class LoginHelper
{
    public static function authenticatedUserIs($type) {
        return $type == 'admin';
    }
}