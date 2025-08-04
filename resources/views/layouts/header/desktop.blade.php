<div class="container mt-5 hidden flex-col gap-y-6 lg:flex">
    <!-- TOP-BAR -->
    <div class="flex-between">
        <!-- Search Box -->
        <div class="relative z-20">
            <!-- INPUT -->
            <div
                class="search-btn-open flex gap-x-2 app-border bg-gray-50 dark:bg-gray-700 p-1 rounded-full cursor-pointer ring-blue-400 w-84 transition-all">
                <svg class="size-6 p-1.5 flex-center text-gray-100 bg-blue-600 rounded-full w-9 h-9">
                    <use href="#search"/>
                </svg>
                <input placeholder="جستجو در کارین..." type="text">
            </div>
            <!-- Search Modal -->
            <div class="search-modal space-y-4">
                <!-- Result -->
                <div>
                            <span class="flex items-center text-sm gap-x-1 text-gray-600 dark:text-gray-200">
                                <p>نتیجه جستجو : <span class="font-DanaMedium text-blue-400">iphone</span></p>
                            </span>
                    <ul
                        class="pt-4 text-gray-500 dark:text-gray-300 flex flex-col gap-y-4 child:flex-between child:cursor-pointer">
                        <li>
                            <a href="#" class="flex items-center gap-x-2">
                                <svg class="size-5">
                                    <use href="#search"/>
                                </svg>
                                آیفون 14
                            </a>
                            <svg class="size-4">
                                <use href="#arrow-up-right"/>
                            </svg>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-x-2">
                                <svg class="size-5">
                                    <use href="#search"/>
                                </svg>
                                قاب آیفون
                            </a>
                            <svg class="size-4">
                                <use href="#arrow-up-right"/>
                            </svg>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-x-2">
                                <svg class="size-5">
                                    <use href="#search"/>
                                </svg>
                                کاور ایفون 16
                            </a>
                            <svg class="size-4">
                                <use href="#arrow-up-right"/>
                            </svg>
                        </li>
                    </ul>
                </div>
                <!-- Trend -->
                <div class="pt-4">
                            <span class="flex items-center gap-x-1 text-sm text-gray-500 dark:text-gray-200">
                                <svg class="size-4">
                                    <use href="#fire"/>
                                </svg>
                                <p>جستجو های پرطرفدار :</p>
                            </span>
                    <ul class="w-full flex items-center gap-1.5 mt-3 child:search-modal-list-item">
                        <li>
                            <a href="#">#آیفون</a>
                        </li>
                        <li>
                            <a href="#">#لپ تاپ</a>
                        </li>
                        <li>
                            <a href="#">#هدفون</a>
                        </li>
                        <li>
                            <a href="#">#هلدر</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Logo -->
        <a href="{{ route("home") }}" class="flex flex-col text-center ml-20">
                    <span class="font-MorabbaMedium text-4xl flex items-center">
                        <span class="text-blue-500">کارین</span> شاپ
                    </span>
            <p class="font-DanaMedium text-gray-400"> خرید موبایل و لپ‌تاپ</p>
        </a>
        <!--  Action -->
        <div class="flex items-center gap-x-3">
            <!-- LOGIN -->

            @guest
                <button class="flex-center py-2 px-4  app-border rounded-full app-hover">
                    <a href="{{ route("auth.login") }}" class="flex items-center gap-x-2">
                        <p>ورود | ثبت‌نام</p>
                        <svg class="size-5">
                            <use href="#arrow-left-end"/>
                        </svg>
                    </a>
                </button>
            @endguest
            <!-- Account Btn -->
            @auth
                <button class="group relative flex-center py-2 px-4 app-border rounded-full app-hover delay-75">
                    <a href="dashboard.html" class="flex items-center gap-x-1">
                        <svg class="size-5">
                            <use href="#user"/>
                        </svg>
                        <p>حساب کاربری</p>
                    </a>
                    <div
                        class="absolute dark:border-none border border-gray-100 w-52 p-2 bg-white text-gray-900 dark:text-gray-100 flex flex-col gap-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:top-12 transition-all delay-100 dark:bg-gray-700 top-20 rounded-lg text-base shadow child:transition-all duration-300 child:py-1.5 child:px-2 z-30 child:rounded-lg child:w-full">
                        <a href="dashboard-orders.html"
                           class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                            <svg class="h-5 w-5">
                                <use href="#user"></use>
                            </svg>
                            سفارشات من
                        </a>
                        <a href="dashboard-messages.html"
                           class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                            <svg class="h-5 w-5">
                                <use href="#envelope"></use>
                            </svg>
                            لیست پیام ها
                        </a>
                        <a href="dashboard-account.html"
                           class="flex items-center gap-x-2  hover:bg-blue-500 hover:text-gray-100">
                            <svg class="h-5 w-5">
                                <use href="#cog"></use>
                            </svg>
                            اطلاعات کاربری
                        </a>
                        <a href="{{ route("logout") }}"
                           class="flex items-center gap-x-2  hover:bg-red-500 dark:hover:bg-red-500 hover:text-gray-100">
                            <svg class="h-5 w-5">
                                <use href="#arrow-left-end"></use>
                            </svg>
                            خروج از حساب
                        </a>
                    </div>
                </button>
            @endauth
            <!-- Toggle theme -->
            <button class="toggle-theme flex-center p-2 app-border rounded-full app-hover">
                <svg class="inline-block dark:hidden size-6">
                    <use href="#moon"/>
                </svg>
                <svg class="hidden dark:inline size-6">
                    <use href="#sun"/>
                </svg>
            </button>
            <!-- Shoping cart -->
            <button class="flex-center p-2 bg-blue-600 text-gray-100 rounded-full open-cart relative">
                <svg class="size-6">
                    <use href="#shopping-bag"/>
                </svg>
                <span class="absolute -top-1 -right-1 flex h-4 w-4">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
                            <span
                                class="relative inline-flex rounded-full h-4 w-4 bg-red-500 text-xs pt-1 flex-center text-white">2</span>
                        </span>
            </button>
            <!-- Cart -->
            <div class="cart ">
                <!-- HEADER -->
                <div
                    class="flex items-center justify-between pb-2 border-b-2 border-gray-200 dark:border-gray-600 text-gray-800 dark:text-gray-300">
                    <h2 class="font-DanaMedium text-lg">سبد خرید <span class="text-sm text-gray-400 font-Dana">
                                    (2
                                    مورد)</span></h2>
                    <svg class="size-5 cursor-pointer close-cart mb-.5">
                        <use href="#x-mark"/>
                    </svg>
                </div>
                <!-- MAIN -->
                <div class="flex flex-col divide-y-2 divide-gray-200 dark:divide-gray-600 my-4">
                    <!-- CART ITEM -->
                    <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
                        <!-- img -->
                        <div class="col-span-4 w-24 h-20">
                            <img src="{{ asset("assets/images/products/5.webp") }}" class="rounded-lg"
                                 alt="product">
                        </div>
                        <!-- detail -->
                        <div class="col-span-8 flex flex-col justify-between">
                            <h2 class="font-DanaMedium line-clamp-2">
                                گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                                - نات اکتیو
                            </h2>
                            <div class="flex items-center justify-between gap-x-2 mt-2">
                                <button
                                    class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                                    <svg class="size-4 increment text-green-600">
                                        <use href="#plus"></use>
                                    </svg>
                                    <input type="number" name="customInput" id="customInput" min="0" max="20"
                                           value="2" class="custom-input w-4 mr-2 text-sm">
                                    <svg class="size-4 decrement text-red-500">
                                        <use href="#minus"></use>
                                    </svg>
                                </button>
                                <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                                    <span class="font-Dana text-sm">تومان</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- CART ITEM -->
                    <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
                        <!-- img -->
                        <div class="col-span-4 w-24 h-20">
                            <img src="{{ asset("assets/images/products/1.png") }}" class="rounded-lg" alt="product">
                        </div>
                        <!-- detail -->
                        <div class="col-span-8 flex flex-col justify-between">
                            <h2 class="font-DanaMedium line-clamp-2">
                                گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                                - نات اکتیو
                            </h2>
                            <div class="flex items-center justify-between gap-x-2 mt-2">
                                <button
                                    class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                                    <svg class="size-4 increment text-green-600">
                                        <use href="#plus"></use>
                                    </svg>
                                    <input type="number" name="customInput" id="customInput" min="0" max="20"
                                           value="2" class="custom-input w-4 mr-2 text-sm">
                                    <svg class="size-4 decrement text-red-500">
                                        <use href="#minus"></use>
                                    </svg>
                                </button>
                                <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                                    <span class="font-Dana text-sm">تومان</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER -->
                <div
                    class="w-[90%] fixed bottom-2 flex items-center justify-between border-t-2 border-gray-200 dark:border-gray-600 pt-4">
                    <div>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">مبلغ قابل پرداخت :</p>
                        <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaDemiBold">1,130,000
                            <span class="font-Dana text-sm">تومان</span>
                        </p>
                    </div>
                    <a href="shopping-cart.html"
                       class="py-2 px-4 bg-blue-600 flex-center hover:bg-blue-700 transition-all rounded-lg text-gray-200">
                        ثبت سفارش
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- NAVBAR -->
    <div class="relative flex-between h-16 bg-gray-900 dark:bg-gray-800 rounded-full text-gray-200 px-10">
        <!-- MENU -->
        <ul class="flex items-center gap-x-8">
            <li class="menu-item">
                <a href="main.html" class="menu-item_link">
                    صفحه اصلی
                </a>
            </li>
            <!-- MENU ITEM --- Mega Menu -->
            <li class="menu-item megamenu-link">
                <a href="" class="menu-item_link flex items-center justify-center gap-x-1">
                    دسته بندی ها
                    <svg class="size-4">
                        <use href="#chevron"/>
                    </svg>
                </a>
                <div
                    class="megamenu">
                    <!-- RIGHT MENU -->
                    <ul class="megamenu_category">
                        <li class="megamenu_category-item active">
                            <svg class="w-5 h-5">
                                <use href="#mobile"></use>
                            </svg>
                            <a href="">موبایل</a>
                        </li>
                        <li class="megamenu_category-item ">
                            <svg class="w-5 h-5">
                                <use href="#tv"></use>
                            </svg>
                            <a href="">لپتاپ</a>
                        </li>
                        <li class="megamenu_category-item ">
                            <svg class="w-5 h-5">
                                <use href="#tablet"></use>
                            </svg>
                            <a href="">تبلت</a>
                        </li>
                        <li class="megamenu_category-item ">
                            <svg class="w-5 h-5">
                                <use href="#headphone"></use>
                            </svg>
                            <a href="">هدفون</a>
                        </li>
                        <li class="megamenu_category-item ">
                            <svg class="w-5 h-5">
                                <use href="#tag"></use>
                            </svg>
                            <a href="">تخفیف</a>
                        </li>
                        <li class="megamenu_category-item ">
                            <svg class="w-5 h-5">
                                <use href="#tv"></use>
                            </svg>
                            <a href="">کامپیوتر</a>
                        </li>
                    </ul>

                    <div class="megamenu_left">
                        <a href="shop.html" class="text-blue-400 flex items-center gap-x-0.5 text-sm mb-4">
                            مشاهده همه
                            <svg class="size-4 rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </a>
                        <ul class="megamenu_left-item active">
                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">برندهای مختلف :</h2>
                                <li>
                                    <a href="shop.html">گوشی آیفون</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی سامسونگ</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی هواووی</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی شیامی</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی نوکیا</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی آنر</a>
                                </li>
                                <li>
                                    <a href="shop.html">گوشی آیفون</a>
                                </li>
                            </div>
                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">گوشی بر اساس قیمت</h2>
                                <li><a href="shop.html">گوشی ارزان</a></li>
                                <li><a href="shop.html">گوشی موبایل قسطی</a></li>
                                <li><a href="shop.html">گوشی تا ۲ میلیون تومان</a></li>
                                <li><a href="shop.html">گوشی تا ۵ میلیون تومان</a></li>
                                <li><a href="shop.html">گوشی تا ۷ میلیون تومان</a></li>
                                <li><a href="shop.html">گوشی تا ۱۵ میلیون تومان</a></li>
                                <li><a href="shop.html">گوشی بالای ۱۵ میلیون تومان</a></li>
                            </div>
                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">لوازم جانبی موبایل</h2>
                                <li><a href="shop.html">شارژر گوشی</a></li>
                                <li><a href="shop.html">شارژر وایرلس</a></li>
                                <li><a href="shop.html">قاب و کاور گوشی</a></li>
                                <li><a href="shop.html">گلس گوشی</a></li>
                                <li><a href="shop.html">هولدر گوشی موبایل</a></li>
                                <li><a href="shop.html">کابل شارژ و مبدل</a></li>
                                <li><a href="shop.html">پاوربانک (شارژر همراه)</a></li>
                            </div>

                        </ul>
                        <ul class="megamenu_left-item ">
                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">برندهای مختلف :</h2>
                                <li><a href="shop.html">لپ‌تاپ اپل (MacBook)</a></li>
                                <li><a href="shop.html">لپ‌تاپ ایسوس</a></li>
                                <li><a href="shop.html">لپ‌تاپ لنوو</a></li>
                                <li><a href="shop.html">لپ‌تاپ اچ‌پی</a></li>
                                <li><a href="shop.html">لپ‌تاپ دل</a></li>
                                <li><a href="shop.html">لپ‌تاپ ام‌اس‌آی</a></li>
                                <li><a href="shop.html">لپ‌تاپ ایسر</a></li>
                            </div>

                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">لپ‌تاپ بر اساس قیمت</h2>
                                <li><a href="shop.html">لپ‌تاپ اقتصادی</a></li>
                                <li><a href="shop.html">لپ‌تاپ تا ۱۰ میلیون تومان</a></li>
                                <li><a href="shop.html">لپ‌تاپ تا ۲۰ میلیون تومان</a></li>
                                <li><a href="shop.html">لپ‌تاپ تا ۳۰ میلیون تومان</a></li>
                                <li><a href="shop.html">لپ‌تاپ تا ۵۰ میلیون تومان</a></li>
                                <li><a href="shop.html">لپ‌تاپ بالای ۵۰ میلیون تومان</a></li>
                            </div>

                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">لوازم جانبی لپ‌تاپ</h2>
                                <li><a href="shop.html">کیف و کوله لپ‌تاپ</a></li>
                                <li><a href="shop.html">کابل و آداپتور لپ‌تاپ</a></li>
                                <li><a href="shop.html">استند و پایه خنک‌کننده</a></li>
                                <li><a href="shop.html">ماوس و کیبورد</a></li>
                                <li><a href="shop.html">هارد اکسترنال و SSD</a></li>
                                <li><a href="shop.html">پد ماوس</a></li>
                            </div>

                        </ul>
                        <ul class="megamenu_left-item">
                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">برندهای مختلف تبلت</h2>
                                <li><a href="shop.html">تبلت اپل (iPad)</a></li>
                                <li><a href="shop.html">تبلت سامسونگ</a></li>
                                <li><a href="shop.html">تبلت لنوو</a></li>
                                <li><a href="shop.html">تبلت مایکروسافت (Surface)</a></li>
                                <li><a href="shop.html">تبلت هواوی</a></li>
                                <li><a href="shop.html">تبلت شیائومی</a></li>
                            </div>

                            <div class="megamenu_left-menu">
                                <h2 class="megamenu_left-title">لوازم جانبی تبلت</h2>
                                <li><a href="shop.html">کیف و کاور تبلت</a></li>
                                <li><a href="shop.html">قلم لمسی</a></li>
                                <li><a href="shop.html">کیبورد و استند</a></li>
                                <li><a href="shop.html">گلس و محافظ صفحه</a></li>
                                <li><a href="shop.html">کابل و شارژر</a></li>
                                <li><a href="shop.html">پاوربانک</a></li>
                            </div>

                        </ul>
                        <ul class="megamenu_left-item">
                            <li>منوی4</li>
                        </ul>
                        <ul class="megamenu_left-item">
                            <li>منوی5</li>
                        </ul>
                        <ul class="megamenu_left-item">
                            <li>منوی6</li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="menu-item">
                <a href="shop.html" class="menu-item_link">
                    فروشگاه
                </a>
            </li>
            <li class="menu-item">
                <a href="articles.html" class="menu-item_link">
                    وبلاگ
                </a>
            </li>
            <!-- MENU ITEM --- Solid submenu -->
            <li class="menu-item group">
                <a class="menu-item_link cursor-pointer">
                    منوی ساده
                    <svg class="size-4 group-hover:rotate-180 duration-300">
                        <use href="#chevron"/>
                    </svg>
                </a>
                <ul class="solid-menu">
                    <li>
                        <a href="aboute-us.html">درباره ما</a>
                    </li>
                    <li>
                        <a href="questions.html">سوالات متداول</a>
                    </li>
                    <li>
                        <a href="contact-us.html">تماس با ما</a>
                    </li>
                    <li class="solid-submenu_link">
                        <a href="#">صفحات</a>
                        <svg class="size-4 rotate-90 duration-300">
                            <use href="#chevron"/>
                        </svg>
                        <ul class="solid-submenu">
                            <li>
                                <a href="shop.html">فروشگاه</a>
                            </li>
                            <li>
                                <a href="product-details.html">جزئیات محصول</a>
                            </li>
                            <li>
                                <a href="dashboard.html">پنل کاربری</a>
                            </li>
                            <li>
                                <a href="shopping-cart.html">سبد خرید</a>
                            </li>
                            <li>
                                <a href="login.html">صفحه ورود</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Address -->
        <div class="relative">
            <button class="flex items-center gap-x-1 citylist-open">
                <svg class="size-6">
                    <use href="#map"/>
                </svg>
                <p>آدرس خود را انتخاب کنید</p>
            </button>
            <div class="citylist-menu z-30">
                <!-- Search city -->
                <button class="flex bg-gray-200 dark:bg-gray-700 gap-x-1 w-full items-center p-2 rounded-lg">
                    <svg class="size-6 text-gray-400">
                        <use href="#search"/>
                    </svg>
                    <input type="text" class="w-full placeholder:text-gray-400" placeholder="جستجوی شهر...">
                </button>
                <h2 class="my-3 pr-1.5 font-DanaMedium">شهرهای پرتکرار :</h2>
                <!-- City list -->
                <ul class="city-list">
                    <li>
                        <a href="#">
                            <svg class="size-5">
                                <use href="#map"/>
                            </svg>
                            تهران
                        </a>
                        <svg class="size-4 rotate-90">
                            <use href="#chevron"/>
                        </svg>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="size-5">
                                <use href="#map"/>
                            </svg>
                            اصفهان
                        </a>
                        <svg class="size-4 rotate-90">
                            <use href="#chevron"/>
                        </svg>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="size-5">
                                <use href="#map"/>
                            </svg>
                            مشهد
                        </a>
                        <svg class="size-4 rotate-90">
                            <use href="#chevron"/>
                        </svg>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="size-5">
                                <use href="#map"/>
                            </svg>
                            شیراز
                        </a>
                        <svg class="size-4 rotate-90">
                            <use href="#chevron"/>
                        </svg>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="size-5">
                                <use href="#map"/>
                            </svg>
                            تبریز
                        </a>
                        <svg class="size-4 rotate-90">
                            <use href="#chevron"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
