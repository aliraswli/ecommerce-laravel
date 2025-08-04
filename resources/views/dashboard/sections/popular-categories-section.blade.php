<section class="mx-4 lg:container mt-20">

    <!-- SECTION TITLE -->
    <x-dashboard.section-header
        href=""
        icon="#squares"
        title="دسـته بندی هـای محبوب"
        subtitle="جدیدترین و بروزترین دسته بندی ها"
    />

    <!-- ITEMS -->
    <div
        class="flex items-center justify-evenly flex-wrap mt-12 child:mb-8 gap-x-8 child:items-center child:flex-col child:duration-300 child:cursor-pointer child:gap-y-1 child:text-gray-800 child:dark:text-gray-300 child:relative">

        @foreach($categories as $category)
            {{--{{ route('shop', ['category' => $category->slug]) }}--}}
            <a href="" class="group flex">
                <img
                    src="{{ $category->files->first() ? asset('storage/' . $category->files->first()->path) : asset('assets/images/category/home-appliances-main.png') }}"
                    class="w-[100px] h-[100px] lg:w-[120px] lg:h-[120px] object-cover group-hover:grayscale group-hover:opacity-90 duration-300"
                    alt="{{ $category->name }}"
                />
                <p class="pt-1 text-sm lg:text-lg line-clamp-1">
                    {{ $category->name }}
                </p>
            </a>
        @endforeach
    </div>
</section>
