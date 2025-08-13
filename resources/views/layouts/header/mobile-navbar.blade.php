<!-- Top Navbar -->
<nav class="absolute top-0 inset-x-0 w-full h-16 px-4 shadow-sm dark:bg-gray-800 flex items-center justify-between">
    <!-- Menu -->
    <button class="open-menu-mobile flex-center p-2 app-border rounded-full">
        <svg class="size-6">
            <use href="#bars"/>
        </svg>
    </button>

    {{--  Mobile Menu  --}}
    @include("layouts.header.mobile-menu")

    <!-- Logo -->
    <a href="main.html" class="flex flex-col text-center">
        <span class="font-MorabbaMedium text-3xl flex items-center">
            <span class="text-blue-500">فروشگاه</span>لاراول
        </span>
    </a>
    <!-- Toggle theme -->
    <button class="toggle-theme flex-center p-2 app-border rounded-full">
        <svg class="inline-block dark:hidden size-6">
            <use href="#moon"/>
        </svg>
        <svg class="hidden dark:inline size-6">
            <use href="#sun"/>
        </svg>
    </button>
</nav>
