<div class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
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

    <div class="w-full xs:w-auto flex justify-between xs:justify-end items-center gap-x-2">

        @if($prevClass != null && $nextClass != null)
            <div class="flex items-center gap-x-2">
                <button class="slider-navigate_btn {{ $prevClass }}">
                    <svg class="size-6 -rotate-90">
                        <use href="#chevron"/>
                    </svg>
                </button>
                <button class="slider-navigate_btn {{ $nextClass }}">
                    <svg class="size-6 rotate-90">
                        <use href="#chevron"/>
                    </svg>
                </button>
            </div>
        @endif

        <a
            href="{{ $href }}"
            class="group shadow-xl text-sm md:text-base
            flex gap-x-1.5 items-center px-2 h-10 md:px-3
            text-white bg-blue-600 rounded-xl"
        >
            <p>مشاهده همه</p>
            <span
                class="w-7 h-7 rounded-full bg-blue-500 flex-center
                md:group-hover:-translate-x-1 transition-transform duration-300"
            >
                <svg class="size-5">
                    <use href="#arrow"/>
                </svg>
            </span>
        </a>
    </div>
</div>
