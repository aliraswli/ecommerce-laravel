<div class="mobile-menu z-50 flex flex-col">
    <!--  MENU MOBILE header -->
    <div class="flex w-full items-center justify-between border-b-normal pb-4">
        <a class="text-xl font-MorabbaMedium"> <span class="text-blue-500">فروشگاه</span> لاراول </a>
        <button class="close-menu-mobile">
            <svg class="size-5 text-gray-500 dark:text-gray-200">
                <use href="#x-mark"/>
            </svg>
        </button>
    </div>
    <!-- MENU MOBILE CATEGORY & ACTION  -->
    <ul class="flex flex-col gap-y-2 text-gray-800 dark:text-gray-100 mt-4">
        <li>
            <span class="open-category mobile-menu-item">
                <svg class="size-5">
                    <use href="#squares"/>
                </svg>
                <a href="#">دسته بندی</a>
            </span>
        </li>
        <li class="mobile-menu-item">
            <svg class="size-5">
                <use href="#user"/>
            </svg>
            <a href="">حساب کاربری</a>
        </li>
        <li class="mobile-menu-item">
            <svg class="size-5">
                <use href="#heart"/>
            </svg>
            <a href="">علاقه مندی ها</a>
        </li>
        <li class="mobile-menu-item">
            <svg class="size-5">
                <use href="#shopping-cart"/>
            </svg>
            <a href="{{ route("cart.index") }}">سبد خرید</a>
        </li>
        <li class="mobile-menu-item">
            <svg class="size-5">
                <use href="#check-badge"/>
            </svg>
            <a href="#">دربـاره مـا</a>
        </li>
        <li class="mobile-menu-item">
            <svg class="size-5">
                <use href="#phone"/>
            </svg>
            <a href="">تـماس بـا مـا</a>
        </li>
    </ul>
</div>
