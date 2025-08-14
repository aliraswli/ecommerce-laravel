<?php

if (!function_exists('getPublicFile')) {
    function getPublicFile(?App\Models\File $file): string
    {
        return asset('storage/' . $file?->path);
    }
}

if (!function_exists('accountMenuActive')) {
    // Highlight active link in account side menu.
    function accountMenuActive(string $route, string $activeClass = 'bg-blue-500/10 text-blue-500'): string
    {
        return request()->routeIs($route) ? $activeClass : '';
    }
}


if (!function_exists('getCurrentUserFullname')) {
    function getCurrentUserFullname(): string
    {
        $user = auth()->user();
        return isset($user) ? ($user->first_name . ' ' . $user->last_name) : '';
    }
}
