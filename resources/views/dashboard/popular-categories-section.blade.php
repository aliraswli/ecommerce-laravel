<section class="mx-4 lg:container mt-20">
    <!-- SECTION TITLE -->
    <div class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
        <x-dashboard.section-heading
            icon="#squares"
            title="دسـته بندی هـای محبوب"
            subtitle="جدیدترین و بروزترین دسته بندی ها"
        />

        <div class="w-full xs:w-auto flex justify-between xs:justify-end items-center gap-x-2">
            <x-dashboard.button-link-with-icon
                href=""
                text="مشاهده همه"
                icon="#arrow"
            />
        </div>
    </div>

    <!-- ITEMS -->
    <div
        class="flex items-center justify-evenly flex-wrap mt-12 child:mb-8 gap-x-8 child:items-center child:flex-col child:duration-300 child:cursor-pointer child:gap-y-1 child:text-gray-800 child:dark:text-gray-300 child:relative">
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/5.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                موبایل
            </p>
        </a>
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/6.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                کالای دیجیتال
            </p>
        </a>
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/7.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                خانه و آشپزخانه
            </p>
        </a>
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/8.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                آرایشی بهداشتی
            </p>
        </a>
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/9.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                لوازم تحریر
            </p>
        </a>
        <a href="shop.html" class="group flex">
            <img src="{{ asset("assets/images/category/10.png") }}"
                 class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                 alt="category1"/>
            <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                گیفت کارت
            </p>
            <a href="shop.html" class="group hidden md:flex">
                <img src="{{ asset("assets/images/category/11.png") }}"
                     class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                     alt="category1"/>
                <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                    ابزار آلات
                </p>
            </a>
        </a>

    </div>
</section>
