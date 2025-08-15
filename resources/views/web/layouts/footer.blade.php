<footer class="md:container my-12">
    <div class=" relative w-full bg-gray-900 dark:bg-gray-800 text-white rounded-2xl p-4 lg:p-9">
        <div class="flex items-start flex-col gap-x-7 lg:gap-x-10 gap-y-10 lg:flex-row flex-wrap">
            <div class="flex-[2] w-full">
                <h2 class="footer_title">درباره {{ config("project.project-name") }}</h2>
                <p class="leading-8 text-gray-400 mb-5">
                    در فروشگاه آنلاین ما، بهترین مدل‌های موبایل و لپ‌تاپ از
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
            <div class="flex-[1.5] w-full">
                <h2 class="footer_title">تماس با ما</h2>
                <ul
                    class="flex flex-col child:flex child:text-gray-400 child:items-center child:justify-between gap-y-6">
                    <li>
                        <p>شماره تماس :</p>
                        <p dir="ltr">{{ config("project.phone") }}</p>
                    </li>
                    <li>
                        <p>آدرس ایمیل :</p>
                        <p>{{ config("project.email") }}</p>
                    </li>
                    <li>
                        <p>آدرس :</p>
                        <p>{{ config("project.address") }}</p>
                    </li>
                </ul>
            </div>

            <a href="#"
               class="ring-2 ring-gray-400 text-gray-300 w-32 rounded-lg text-sm flex-center gap-x-2 py-1.5 px-2 mt-10 ">
                بازگشت به بالا
                <svg class="size-4 rotate-180">
                    <use href="#chevron"/>
                </svg>
            </a>
        </div>
    </div>
</footer>
