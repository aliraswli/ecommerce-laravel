<ul class="w-full relative space-y-2 child:duration-300 child:transition-all child:py-3  child:px-2 child:flex child:gap-x-2 text-lg child:cursor-pointer child:rounded-lg">
    <li class="hover:text-blue-500 {{ accountMenuActive('account.index') }}">
        <svg class="w-6 h-6 ">
            <use href="#cog"></use>
        </svg>
        <a href="{{ route("account.index") }}">اطلاعات حساب </a>
    </li>

    <li class="hover:text-blue-500 {{ accountMenuActive('orders.index') }}">
        <svg class="w-6 h-6 ">
            <use href="#shopping-bag"></use>
        </svg>
        <a href="{{ route("orders.index") }}">سفارش ها</a>
    </li>
    <li class="dark:text-gray-500 text-gray-500">
        <svg class="w-6 h-6 ">
            <use href="#heart"></use>
        </svg>
        <a @disabled(true) href="">علاقه‌مندی ها</a>
    </li>
    <li class="hover:text-blue-500 {{ accountMenuActive('address.index') }}">
        <svg class="w-6 h-6 ">
            <use href="#map"></use>
        </svg>
        <a href="{{ route("address.index") }}">آدرس ها</a>
    </li>
    <li class="text-red-400">
        <svg class="w-6 h-6 ">
            <use href="#arrow-left-end"></use>
        </svg>
        <a href="{{ route("logout") }}">خروج</a>
    </li>
</ul>

