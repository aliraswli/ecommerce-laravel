<div class="flex items-center gap-x-2 sm:gap-x-4">
    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
        <svg class="size-7 text-gray-700 dark:text-gray-100">
            <use href="{{ $icon }}"></use>
        </svg>
    </span>
    <div class="space-y-1 md:space-y-1">
        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">
            {{ $title }}
        </h3>
        <p class="text-sm text-gray-500 dark:text-gray-300">
            {{ $subtitle }}
        </p>
    </div>
</div>
