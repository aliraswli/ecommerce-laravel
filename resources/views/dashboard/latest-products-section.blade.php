<section class="mx-4 lg:container mt-10 lg:mt-20">
    <!-- SECTION TITLE -->
    <div
        class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
        <x-dashboard.section-heading
            icon="#mobile"
            title="جدیدترین محصولات"
            subtitle="جدیدترین و بروزترین محصولات"
        />

        <div class="w-full xs:w-auto flex justify-between xs:justify-end items-center gap-x-2">
            <x-dashboard.slider-navigation
                prev-class="LatestProducts-prev-slide"
                next-class="LatestProducts-next-slide"
            />
            <x-dashboard.button-link-with-icon
                href=""
                text="مشاهده همه"
                icon="#arrow"
            />
        </div>
    </div>

    <!-- Latest products Slider -->
    <div class="swiper LatestProducts mt-5 w-full">
        <div class="swiper-wrapper py-5">
            <!-- PRODUCT ITEM -->
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/1.png") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/2.png") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/3.png") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/4.png") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/5.webp") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/6.webp") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/7.webp") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/8.webp") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/1.png") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/2.png") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide product-card group">
                <!-- product header -->
                <div class="product-card_header">
                    <div class="flex items-center gap-x-2">
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#shopping-cart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                سبد خرید
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#heart"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                علاقه مندی
                            </div>
                        </div>
                        <div class="tooltip">
                            <button class="rounded-full p-1.5 app-border app-hover">
                                <svg class="size-4">
                                    <use href="#arrows-up-down"></use>
                                </svg>
                            </button>
                            <div class="tooltiptext">
                                مقایسه
                            </div>
                        </div>
                    </div>
                    <!-- badge offer -->
                    <span class="product-card_badge">70% تخفیف‌</span>
                </div>
                <!-- product img -->
                <a href="product-details.html">
                    <img class="product-card_img group-hover:opacity-0 absolute"
                         src="{{ asset("assets/images/products/3.png") }}"
                         alt="">
                    <img class="product-card_img opacity-0 group-hover:opacity-100"
                         src="{{ asset("assets/images/products/4.png") }}" alt="">
                </a>
                <!--  product footer -->
                <div class="space-y-2">
                    <a href="product-details.html" class="product-card_link">
                        لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                    </a>
                    <!-- Rate and Price -->
                    <div class="product-card_price-wrapper">
                        <!-- RATE -->
                        <div class="product-card_rate">
                        <span class="flex items-center gap-x-0.5">
                           <svg class="size-4 text-blue-500 mb-0.5">
                              <use href="#rocket"></use>
                           </svg>
                           <p class="text-xs">ارسال امروز</p>
                        </span>
                            <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                           <p> 5.0 </p>
                           <svg class="size-4 mb-1">
                              <use href="#star"></use>
                           </svg>
                        </span>
                        </div>
                        <!-- Price -->
                        <div class="product-card_price">
                            <del>
                                70,000,000
                                <h6>تومان</h6>
                            </del>
                            <p>70,000,000</p>
                            <span>تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
