<?php

if (function_exists("getCurrentUserFullname")) {
    function getCurrentUserFullname(): string
    {
        $user = Auth::user();

        if (Auth::check()) {
            return $user->first_name . "" . $user->last_name;
        }

        return "کاربر مهمان";
    }
}
