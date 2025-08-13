<?php

if (!function_exists('getPublicFile')) {
    function getPublicFile(?App\Models\File $file): string
    {
        return asset('storage/' . $file?->path);
    }
}

