<?php

use App\Models\User;

if (! function_exists('ensure_mandatory')) {
    function ensure_mandatory(string $field): string
    {
        return in_array($field, array_keys(User::$rules));
    }
}
