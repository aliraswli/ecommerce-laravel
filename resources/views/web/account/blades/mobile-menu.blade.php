<div class="flex lg:hidden">
    <button
        class="open-user-menu bg-blue-500 flex items-center gap-x-1 font-DanaMedium text-white p-2 rounded-lg text-sm mr-2"
    >
        <svg class="size-5">
            <use href="#bars-3"/>
        </svg>
        منوی کاربری
    </button>

    <div class="user-menu">
        <button class="close-user-menu">
            <svg class="size-6">
                <use href="#x-mark"/>
            </svg>
        </button>

        <!-- NAME AND AVATAR  -->
        <div class="w-full flex items-center gap-x-3 border-b border-gray-200 dark:border-white/20 py-3">
            <img src="{{ asset("assets/images/svg/user.png") }}" class="size-10 ring-2 ring-gray-400/20 rounded-full"
                 alt="AVATAR"/>
            <span class="flex-col gap-y-2">
                <p class="font-DanaMedium text-lg">{{ getCurrentUserFullname() }}</p>
                <p class="text-gray-400">{{ auth()->user()->phone }}</p>
            </span>
        </div>

        @include("web.account.blades.menu-items")
    </div>
</div>
