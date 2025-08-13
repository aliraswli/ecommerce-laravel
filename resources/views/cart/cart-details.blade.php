<div class="w-full lg:w-1/4 lg:sticky top-5 flex flex-col gap-y-4">
    <!-- PRICE -->
    <ul class="child:flex child:items-center child:justify-between space-y-8">
        <li>
            <p>قیمت کالاها({{ $cartItems->count() }})</p>
            <p class="flex gap-x-1 text-gray-600 dark:text-gray-300">
                {{ number_format($totalPrice) }}
                <span class="hidden xl:flex">تومان</span>
            </p>
        </li>
        <li>
            <p>تخفیف</p>
            <p class="font-DanaMedium text-gray-700 dark:text-gray-200">
                {{ number_format($totalDiscount) }} تومان
            </p>
        </li>
        <li class="border-t-2 border-dashed border-gray-400 pt-8">
            <p>مبلغ نهایی :</p>
            <p>{{ number_format($finalPrice) }} تومان</p>
        </li>
    </ul>

    {{--  Confirm and complete the order  --}}
    <a
        href="{{ route("checkout.index") }}"
        class="w-full mt-4 flex items-center gap-x-1 justify-center bg-blue-500 text-white hover:bg-blue-600 transition-all rounded-lg shadow py-2"
    >
        تایید و تکمیل سفارش
        <svg class="w-5 h-5">
            <use href="#shopping-bag"></use>
        </svg>
    </a>
</div>

