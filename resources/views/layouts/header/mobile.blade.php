<div class="flex justify-center lg:hidden">
    <!-- Top Navbar -->
    <nav
        class="absolute top-0 inset-x-0 w-full h-16 px-4 shadow-sm dark:bg-gray-800 flex items-center justify-between">
        <!-- Menu -->
        <button class="open-menu-mobile flex-center p-2 app-border rounded-full">
            <svg class=" size-6">
                <use href="#bars"/>
            </svg>
        </button>
        <div class="mobile-menu z-50 flex flex-col">
            <!--  MENU MOBILE header -->
            <div class="flex w-full items-center justify-between border-b-normal pb-4">
                <a href="main.html" class="text-xl font-MorabbaMedium">
                    <span class="text-blue-500">کارین</span> شاپ
                </a>
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
                    <!-- MENU CATEGORY SLIDE -->
                    <div class="category-slide">
                        <div class=" w-full border-b-normal pb-4">
                                    <span class="close-category-slide flex items-center gap-x-1 cursor-pointer">
                                        <svg class="size-4">
                                            <use href="#arrow"/>
                                        </svg>
                                        دسته بندی
                                    </span>
                        </div>
                        <ul class="child:flex pt-4 child:cursor-pointer space-y-2">
                            <li>
                                <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                موبایل
                                            </span>
                                    <img src="{{ asset("assets/images/category/1.webp") }}"
                                         class="h-28 w-full object-cover rounded"
                                         alt="">
                                </div>
                                <!-- Mobile SLIDE -->
                                <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                موبایل
                                                <svg class="size-4">
                                                    <use href="#arrow"/>
                                                </svg>
                                            </span>
                                    <ul
                                        class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">گوشی‌های هوشمند</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">آیفون</li>
                                                <li href="">سامسونگ</li>
                                                <li href="">شیائومی</li>
                                                <li href="" class="text-red-500">پرفروش‌ها</li>
                                                <li href="">نوکیا</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">قاب موبایل</li>
                                                <li href="">محافظ صفحه</li>
                                                <li href="">پاوربانک</li>
                                                <li href="" class="text-red-500">تخفیف‌ها</li>
                                                <li href="">شارژر</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">گجت‌های پوشیدنی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">ساعت هوشمند</li>
                                                <li href="">دستبند هوشمند</li>
                                                <li href="">هدفون بی‌سیم</li>
                                                <li href="" class="text-red-500">جدیدترین‌ها</li>
                                                <li href="">هدست</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم مخصوص بازی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">کنترلر بازی</li>
                                                <li href="">دسته بازی موبایل</li>
                                                <li href="">لوازم جانبی گیمرها</li>
                                                <li href="" class="text-red-500">محصولات جدید</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                لپ تاپ
                                            </span>
                                    <img src="{{ asset("assets/images/category/2.jpg") }}"
                                         class="h-28 w-full object-cover rounded"
                                         alt="">
                                </div>
                                <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                لپ تاپ
                                                <svg class="size-4">
                                                    <use href="#arrow"/>
                                                </svg>
                                            </span>
                                    <ul
                                        class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لپ‌تاپ‌ها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">ایسر</li>
                                                <li href="">دل</li>
                                                <li href="">اچ‌پی</li>
                                                <li href="" class="text-red-500">پرفروش‌ها</li>
                                                <li href="">لنوو</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">کیبورد</li>
                                                <li href="">ماوس</li>
                                                <li href="">کوله لپ‌تاپ</li>
                                                <li href="" class="text-red-500">محصولات تخفیف‌دار</li>
                                                <li href="">پایه خنک‌کننده</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">قطعات و تجهیزات</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">هارد اکسترنال</li>
                                                <li href="">رم لپ‌تاپ</li>
                                                <li href="">شارژر لپ‌تاپ</li>
                                                <li href="" class="text-red-500">قطعات ویژه</li>
                                                <li href="">کارت گرافیک</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">نرم‌افزارها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">آنتی‌ویروس</li>
                                                <li href="">نرم‌افزارهای اداری</li>
                                                <li href="">نرم‌افزارهای طراحی</li>
                                                <li href="" class="text-red-500">جدیدترین نرم‌افزارها</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                هدفون
                                            </span>
                                    <img src="{{ asset("assets/images/category/4.webp") }}"
                                         class="h-28 w-full object-cover rounded"
                                         alt="">
                                </div>
                                <div class="detail-category">
                                            <span
                                                class="close-detail-category flex-center gap-x-1 mx-4 bg-gray-100 dark:bg-gray-900 rounded p-2 cursor-pointer">
                                                هدفون
                                                <svg class="size-4">
                                                    <use href="#arrow"/>
                                                </svg>
                                            </span>
                                    <ul
                                        class="mt-5 flex flex-col child:py-3 divide-y-2 dark:divide-gray-700 child:px-4">
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">هدفون‌های بی‌سیم</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">ایرپاد</li>
                                                <li href="">هدفون‌های بلوتوثی</li>
                                                <li href="">هدفون‌های ورزشی</li>
                                                <li href="" class="text-red-500">محصولات تخفیف‌دار</li>
                                                <li href="">هدفون‌های نویزگیر</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">هدفون‌های باسیم</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">هدفون‌های استودیویی</li>
                                                <li href="">هدفون‌های گیمینگ</li>
                                                <li href="">هدفون‌های اقتصادی</li>
                                                <li href="" class="text-red-500">مدل‌های ویژه</li>
                                                <li href="">هدفون‌های حرفه‌ای</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">لوازم جانبی هدفون</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">کیس شارژ</li>
                                                <li href="">پد گوش</li>
                                                <li href="">کابل و مبدل</li>
                                                <li href="" class="text-red-500">محصولات تخفیف‌دار</li>
                                                <li href="">هولدر هدفون</li>
                                            </ul>
                                        </li>
                                        <li>
                                                    <span class="flex group items-center justify-between open-submenu">
                                                        <a href="#">برندها</a>
                                                        <svg class="size-4 rotate-90">
                                                            <use href="#chevron"/>
                                                        </svg>
                                                    </span>
                                            <ul
                                                class="menu-category-submenu child:list-disc child-hover:mr-2 child:transition-all child:duration-300">
                                                <li href="">سونی</li>
                                                <li href="">بوز</li>
                                                <li href="">جبرا</li>
                                                <li href="" class="text-red-500">برندهای تخفیف‌دار</li>
                                                <li href="">انکر</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="relative open-detail-category">
                                            <span class="mobile-menu-category-badge">
                                                پرفروش ها
                                            </span>
                                    <img src="{{ asset("assets/images/category/3.webp") }}"
                                         class="h-28 w-full object-cover rounded"
                                         alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-menu-item">
                    <svg class="size-5">
                        <use href="#user"/>
                    </svg>
                    <a href="dashboard.html">حساب کاربری</a>
                </li>
                <li class="mobile-menu-item">
                    <svg class="size-5">
                        <use href="#heart"/>
                    </svg>
                    <a href="dashboard-favorite.html">علاقه مندی ها</a>
                </li>
                <li class="mobile-menu-item">
                    <svg class="size-5">
                        <use href="#shopping-cart"/>
                    </svg>
                    <a href="shopping-cart.html">سبد خرید</a>
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
                    <a href="contact-us.html">تـماس بـا مـا</a>
                </li>
            </ul>
        </div>
        <!-- Logo -->
        <a href="main.html" class="flex flex-col text-center">
                    <span class="font-MorabbaMedium text-3xl flex items-center">
                        <span class="text-blue-500">کارین</span> شاپ
                    </span>
        </a>
        <!-- Toggle theme -->
        <button class="toggle-theme flex-center p-2 app-border rounded-full ">
            <svg class="inline-block dark:hidden size-6">
                <use href="#moon"/>
            </svg>
            <svg class="hidden dark:inline size-6">
                <use href="#sun"/>
            </svg>
        </button>
    </nav>
    <!-- Search baer -->
    <button class="open-mobile_search-modal">
        <svg class=" size-6">
            <use href="#search"/>
        </svg>
        <p>جستجو در <span class="font-MorabbaMedium">کارین شاپ</span></p>
    </button>
    <!-- Search Moadal -->
    <div class="mobile_search-modal">
        <!-- TOP -->
        <div class="w-full flex items-center gap-x-2">
            <button
                class="w-full flex items-center gap-x-1 bg-gray-200 dark:bg-gray-800 text-gray-500 py-2 px-4 rounded-3xl">
                <svg class="size-6">
                    <use href="#search"/>
                </svg>
                <input type="text" placeholder="جستجو در همه کالاها">
            </button>
            <svg class="size-6 close-mobile_search-modal">
                <use href="#x-mark"/>
            </svg>
        </div>
        <div class="w-full space-y-4">
            <!-- Result -->
            <span class=" flex items-center text-sm gap-x-1 text-gray-600 dark:text-gray-200">
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
