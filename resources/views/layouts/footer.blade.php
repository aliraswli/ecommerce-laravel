<footer class="md:container my-12">
    <div class=" relative w-full bg-gray-900 dark:bg-gray-800 text-white rounded-2xl p-4 lg:p-9">
        <div class="flex items-start flex-col gap-x-7 lg:gap-x-10 gap-y-10 lg:flex-row flex-wrap">
            <div class="flex-[2] w-full">
                <h2 class="footer_title">درباره کارین شاپ</h2>
                <p class="leading-8 text-gray-400 mb-5">در فروشگاه آنلاین ما، بهترین مدل‌های موبایل و لپ‌تاپ از
                    برندهای معتبر جهانی را با کیفیت بالا و قیمتی مناسب برای شما فراهم آورده‌ایم. با انتخاب محصولات
                    ما، تجربه‌ای حرفه‌ای و لذت‌بخش از فناوری را در خانه یا محل کار داشته باشید.

                </p>
                <div class="flex items-center gap-x-4">
                    <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                        <svg class="size-6 text-blue-500">
                            <use href="#instagram"></use>
                        </svg>
                    </a>
                    <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                        <svg class="size-6 text-blue-500">
                            <use href="#whatsapp"></use>
                        </svg>
                    </a>
                    <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                        <svg class="size-6 text-blue-500">
                            <use href="#linkedin"></use>
                        </svg>
                    </a>
                    <a href="#" class="size-10 bg-gray-950 rounded-xl flex-center">
                        <svg class="size-6 text-blue-500">
                            <use href="#youtube"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex-1 flex flex-col w-full lg:w-auto">
                <h2 class="footer_title">دسترسی سریع</h2>
                <div class="flex gap-x-10 child:space-y-2 child:text-gray-400">
                    <ul class="child-hover:text-blue-500 child:transition-all">
                        <li>
                            <a href="main.html">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="shop.html">فروشگاه</a>
                        </li>
                        <li>
                            <a href="contact-us.html">تماس با ما </a>
                        </li>
                        <li>
                            <a href="questions.html">سوالات متداول </a>
                        </li>
                    </ul>
                    <ul class="child-hover:text-blue-500 md:hidden child:transition-colors">
                        <li>
                            <a href="login.html"> ثبت نام | ورود </a>
                        </li>
                        <li>
                            <a href="articles.html">وبلاگ</a>
                        </li>
                        <li>
                            <a href="">شرایط و قوانین</a>
                        </li>
                        <li>
                            <a href="">حریم خصوصی </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex-[1.5] w-full">
                <h2 class="footer_title">تماس با ما</h2>
                <ul
                    class="flex flex-col child:flex child:text-gray-400 child:items-center child:justify-between gap-y-6">
                    <li>
                        <p>شماره تماس :</p>
                        <p dir="ltr">012-345 678</p>
                    </li>
                    <li>
                        <p>آدرس ایمیل :</p>
                        <p>KarinShop@gmail.com</p>
                    </li>
                    <li>
                        <p>آدرس :</p>
                        <p>بلوار آزادی، استاد معین پلاک ۱۰</p>
                    </li>
                </ul>
            </div>
            <div
                class="flex-1 w-full md:w-1/6 flex flex-col items-end justify-end ml-5 md:ml-0 md:mr-5">

                <div
                    class="flex justify-center md:justify-end items-center gap-x-3  child:bg-gray-950 child:dark:bg-gray-900">
                        <span class="w-16 h-16 lg:w-20 lg:h-20 flex-center rounded-xl ">
                            <img class="w-16 h-16" src="{{ asset("assets/images/footer/1.png") }}" alt="">
                        </span>
                    <span class="w-16 h-16 lg:w-20 lg:h-20 flex-center rounded-xl ">
                            <img class="w-16 h-16" src="{{ asset("assets/images/footer/2.png") }}" alt="">
                        </span>
                </div>
                <!-- GO TOP -->
                <a href="#"
                   class="ring-2 ring-gray-400 text-gray-300 w-32 rounded-lg text-sm flex-center gap-x-2 py-1.5 px-2 mt-10 ">
                    بازگشت به بالا
                    <svg class="size-4 rotate-180">
                        <use href="#chevron"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- DIV -->
        <div
            class="w-full rounded-xl bg-gray-950 dark:bg-gray-900 flex flex-col md:flex-row gap-y-4 items-center justify-between p-4 md:p-6 mt-6">
            <a href="#" class="text-3xl font-MorabbaMedium">
                <span class="text-blue-500">کارین</span> شاپ
            </a>
            <div
                class="bg-gray-900 dark:bg-gray-800 p-1.5 rounded-xl w-72 lg:w-[350px] flex items-center justify-between">
                <input type="text" class="bg-transparent text-gray-200 px-2 w-full"
                       placeholder="از جدیدترین تخفیف ها با خبر شوید                    "/>
                <button class="px-4 py-1 bg-blue-500 rounded-xl font-DanaMedium">
                    ثبت
                </button>
            </div>
        </div>
    </div>
    <p class="text-center text-sm my-4 text-gray-400">Copyright © 2025 Karin. All rights reserved.</p>
</footer>
