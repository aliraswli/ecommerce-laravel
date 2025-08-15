<section class="mx-4 lg:container mt-10 lg:mt-20">
    <!-- SECTION TITLE -->
    <x-dashboard.section-header
        href=""
        icon="#mobile"
        title="جدیدترین محصولات"
        subtitle="جدیدترین و بروزترین محصولات"
        prev-class="LatestProducts-prev-slide"
        next-class="LatestProducts-next-slide"
    />

    <!-- Latest Products Slider -->
    <div class="swiper LatestProducts mt-5 w-full">
        <div class="swiper-wrapper py-5">
            <!-- PRODUCT ITEMS -->
            @foreach($latestProducts as $product)
                <x-product.product-card :product="$product"/>
            @endforeach
        </div>
    </div>
</section>
