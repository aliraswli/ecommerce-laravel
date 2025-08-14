<div class="w-full flex flex-col">
    <span class="flex items-center gap-x-2">
        <a href="{{ route('cart.index') }}">
            <svg class="size-5">
                <use href="#arrow-right"></use>
            </svg>
        </a>
        <p class="font-DanaDemiBold text-lg">انتخاب روش پرداخت</p>
    </span>
    <div
        class="grid grid-cols-12 child:col-span-12 gap-4 child:w-full
        child:flex child:items-center child:gap-x-3 child:rounded-lg
        child:px-3 child:py-3.5 child:duration-300 child:border
        child:border-gray-300 child:dark:border-gray-300/20
        child:transition-all child:text-base mt-5"
    >
        <button class="group ring-transparent ring-1 focus:ring-blue-500 dark:ring-white/20 dark:focus:ring-blue-400">
            <span
                class="size-5 border border-gray-400 rounded-full
                group-focus:bg-blue-400 group-focus:border-blue-500
                duration-300 transition-all"
            >
            </span>
            <svg class="size-6">
                <use href="#card"></use>
            </svg>
            <span class="flex flex-col items-start">
                <h1 class="text-lg dark:text-gray-300 text-gray-800 font-DanaMedium">پرداخت اینترنتی</h1>
                <p class="text-gray-500 dark:text-gray-400">پرداخت آنلاین با کارت‌های بانکی</p>
            </span>
        </button>
        <button
            class="group ring-transparent ring-1 focus:ring-blue-500
            dark:ring-white/20 dark:focus:ring-blue-400"
        >
            <span
                class="size-5 border border-gray-400 rounded-full
                group-focus:bg-blue-400 group-focus:border-blue-500
                duration-300 transition-all"
            >
            </span>
            <svg style="width: 32px; height: 32px; fill: gray">
                <use xlink:href="#digipay"></use>
            </svg>
            <span class="flex flex-col items-start ">
                <h1 class="text-lg dark:text-gray-300 text-gray-800 font-DanaMedium">
                    پرداخت با کارت اعتباری
                </h1>
                <p class="text-gray-500 dark:text-gray-400">
                    ویژه بانک‌ها، سازمان‌ها و شرکت‌ها
                </p>
            </span>
        </button>
    </div>
</div>
