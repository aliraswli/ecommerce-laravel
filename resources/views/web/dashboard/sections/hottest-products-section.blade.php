<section class="mx-4 lg:container mt-10 lg:mt-20">
    <!-- SECTION TITLE -->
    <x-dashboard.section-header
        href=""
        icon="#mobile"
        title="داغ ترین محصولات"
        subtitle="داغ ترین محصولات چند ساعت گذشته"
        prev-class="LatestProducts-prev-slide"
        next-class="LatestProducts-next-slide"
    />

    <!-- Hottest Products Slider -->
    <div class="swiper LatestProducts mt-5 w-full">
        <div class="swiper-wrapper py-5">
            <!-- PRODUCT ITEMS -->
            @foreach($hottestProducts as $item)
                <div class="swiper-slide product-card group">
                    <!-- Product Header -->
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
                        </div>
                        <!-- Badge Discount -->
                        @isset($item->discount)
                            <span class="product-card_badge">{{ $item->discount }}% تخفیف‌</span>
                        @endisset
                    </div>
                    <!-- Product Image -->
                    <a href="product-details.html">
                        <img class="product-card_img" src="{{ asset("storage/" . $item?->file?->path) }}" alt="">
                    </a>
                    <!--  Product Footer -->
                    <div class="space-y-2">
                        <a href="product-details.html" class="product-card_link">
                            {{ $item->name }}
                        </a>
                        <!-- Rate and Price -->
                        <div class="product-card_price-wrapper">
                            <!-- Price -->
                            <div class="product-card_price">
                                @isset($item->discount)
                                    <del>{{ number_format($item->price) }} تومان</del>
                                @endisset
                                <p>
                                    {{ number_format($item->final_price) }}
                                </p>
                                <span>{{ config("project.price-type") }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
