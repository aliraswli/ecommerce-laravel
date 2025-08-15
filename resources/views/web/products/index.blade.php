@extends("web.layouts.app")

@section("content")
    <main class="container">
        <!-- Breadcrumb -->
        <x-breadcrumb route="shop"/>

        <div class="flex flex-col lg:flex-row gap-4 mt-5">
            <!-- SIDE FILTER BOX -->
            @include("web.products.blades.filter")

            <!-- TOP FILTER BOX & PRODUCT & PAGINATION -->
            <div class="lg:w-3/4">
                <!-- MOBILE FILTERS -->
                @include("web.products.blades.mobile-filter")
                <!-- TOP FILTER BOX -->
                <div class="hidden lg:flex items-center justify-between  mb-6">
                    <div class="flex items-center gap-x-5">
                        <div class="flex items-center gap-x-2">
                            <svg class="size-6 text-gray-400">
                                <use href="#sort-list"></use>
                            </svg>
                            <h2 class="font-DanaDemiBold text-gray-400">مرتب سازی :</h2>
                        </div>
                        <ul
                            class="flex items-center gap-x-1 lg:gap-x-4 child:transition-all child:cursor-pointer child:rounded-lg child:px-1 child:py-1 child:text-sm child:lg:text-base">
                            <li class="text-blue-500">محبوب ترین</li>
                            <li class="text-gray-400">پرفروش ترین</li>
                            <li class="text-gray-400">ارزان ترین</li>
                            <li class="text-gray-400">گران ترین</li>
                        </ul>
                    </div>
                    <span class="text-sm text-gray-400 end">۱۳,۰۴۰ کالا </span>
                </div>

                <!-- PRODUCTS -->
                <div
                    class="grid grid-cols-1 xxs:grid-cols-2 xs:grid-cols-2
                    sm:grid-cols-2 xl:grid-cols-3 gap-3 xs:gap-2 sm:gap-4"
                >
                    @foreach($products as $product)
                        <x-product.product-card :product="$product"/>
                    @endforeach
                </div>

                <!-- PAGINATION -->
                <div class="mt-10 w-full flex items-center justify-center">
                    <ul
                        class="flex items-center gap-x-3 child:flex child:items-center child:justify-center child:w-8 child:h-8 child:cursor-pointer child:shadow child:rounded-lg child:transition-all child:duration-300">
                        <li class="bg-white dark:bg-gray-800 hover:bg-gray-800 dark:hover:bg-blue-500 hover:text-white">
                            <svg class="size-5 rotate-180">
                                <use href="#chevron-left"></use>
                            </svg>
                        </li>
                        <li class="text-white bg-blue-500">
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li class="bg-white dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white">
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li class="bg-white dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white">
                            <a href="#">
                                ...
                            </a>
                        </li>
                        <li class="bg-white dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white">
                            <svg class="size-5">
                                <use href="#chevron-left"></use>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
