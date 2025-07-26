<header class="header">
    <!-- Desktop -->
    @include("layouts.header.desktop")
    <!-- Mobile -->
    @include("layouts.header.mobile")
    <!-- bottom Navbar-->
    <ul class="bottom-navbar">
        <li class="dark:text-sky-400 text-blue-500 font-DanaMedium">
            <svg class="size-5">
                <use href="#home"/>
            </svg>
            <a href="main.html">خانه</a>
        </li>
        <li>
            <svg class="size-5">
                <use href="#squares"/>
            </svg>
            <a href="shop.html">فروشگاه</a>
        </li>
        <li>
            <svg class="size-5">
                <use href="#shopping-bag"/>
            </svg>
            <a href="shopping-cart.html">سبد خرید</a>
        </li>
        <li>
            <svg class="size-5">
                <use href="#user"/>
            </svg>
            <a href="dashboard.html">حساب من</a>
        </li>
    </ul>
    <div class="px-3 lg:container group w-full mt-4 lg:mt-10">
        <div dir="rtl" class="swiper header-slider h-52 md:h-96 cursor-pointer">
            <div class="swiper-wrapper">
                <a href="shop.html" class="swiper-slide">
                    <img src="{{ asset("assets/images/slider/4.webp") }}" class="rounded-xl" alt="">
                </a>
                <a href="shop.html" class="swiper-slide">
                    <img src="{{ asset("assets/images/slider/1.jpg") }}" class="rounded-xl" alt="">
                </a>
                <a href="shop.html" class="swiper-slide">
                    <img src="{{ asset("assets/images/slider/2.webp") }}" class="rounded-xl" alt="">
                </a>
                <a href="shop.html" class="swiper-slide">
                    <img src="{{ asset("assets/images/slider/3.gif") }}" class="rounded-xl" alt="">
                </a>
            </div>
            <div class="swiper-pagination-wrapper">
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper Navigation -->
            <div
                class="absolute z-10 bottom-5 opacity-0 invisible group-hover:opacity-100 transition-all duration-300 group-hover:visible right-6 hidden lg:flex items-center gap-x-2 child:flex-center child:w-9 child:h-9 child:cursor-pointer child:bg-white child:dark:bg-gray-800 child:text-gray-700 child:dark:text-gray-200 child:rounded-full child:shadow child-hover:text-blue-600 child-hover:dark:text-blue-500">
                <button class="button-prev">
                    <svg class="size-5 -rotate-90">
                        <use href="#chevron"/>
                    </svg>
                </button>
                <button class="button-next">
                    <svg class="size-5 rotate-90">
                        <use href="#chevron"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</header>
