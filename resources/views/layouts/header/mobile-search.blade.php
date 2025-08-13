<!-- Search baer -->
<button class="open-mobile_search-modal">
    <svg class=" size-6">
        <use href="#search"/>
    </svg>
    <p>جستجو</p>
</button>
<!-- Search Modal -->
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
        <ul class="pt-4 text-gray-500 dark:text-gray-300 flex flex-col gap-y-4 child:flex-between child:cursor-pointer">
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
</div>
