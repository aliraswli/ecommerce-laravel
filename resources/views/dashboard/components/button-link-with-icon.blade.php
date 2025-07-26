<a href="{{ $href }}"
   class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">

    <p>{{ $text }}</p>
    <span
        class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
        <svg class="size-5">
            <use href="{{ $icon }}"/>
        </svg>
    </span>
</a>
