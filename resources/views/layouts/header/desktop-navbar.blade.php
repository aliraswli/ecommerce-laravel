<div class="relative flex-between h-16 bg-gray-900 dark:bg-gray-800 rounded-full text-gray-200 px-10">
    <!-- MENU -->
    <ul class="flex items-center gap-x-8">
        <li class="menu-item">
            <a href="{{ route("dashboard") }}" class="menu-item_link">صفحه اصلی</a>
        </li>
        <!-- MENU ITEM --- Mega Menu -->

        {{-- Categories --}}
        @if(isset($categories))
            <li class="menu-item megamenu-link">
                <a href="" class="menu-item_link flex items-center justify-center gap-x-1">
                    دسته بندی ها
                    <svg class="size-4">
                        <use href="#chevron"/>
                    </svg>
                </a>

                <div class="megamenu">
                    <!-- RIGHT MENU -->
                    <ul class="megamenu_category max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-100">
                        @foreach($categories as $item)
                            <li class="megamenu_category-item {{ $loop->first ? 'active' : '' }}">
                                <a href="">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="megamenu_left">
                        <a href="" class="text-blue-400 flex items-center gap-x-0.5 text-sm mb-4">
                            مشاهده همه
                            <svg class="size-4 rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </a>

                        @foreach($categories as $index => $item)
                            <ul class="megamenu_left-item {{ $loop->first ? 'active' : '' }}">
                                @foreach($item->categories as $sub)
                                    <li><a href="">{{ $sub->name }}</a></li>
                                @endforeach
                            </ul>
                        @endforeach

                    </div>
                </div>
            </li>
        @endif

        <li class="menu-item">
            <a href="" class="menu-item_link">فروشگاه</a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-item_link">وبلاگ</a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-item_link">درباره ما</a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-item_link">سوالات متداول</a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-item_link">تماس با ما</a>
        </li>
    </ul>
</div>
