<div
    class="lg:sticky mb-8 top-1 h-fit lg:w-1/4 hidden lg:flex flex-col gap-y-4 items-center shadow rounded-lg p-4 dark:bg-gray-800 bg-white"
>
    <div class="w-full flex items-center gap-x-3">
        <img
            alt="AVATAR"
            src="{{ asset("assets/images/svg/user.png") }}"
            class="size-10 ring-2 ring-gray-400/20 rounded-full"
        />
        <span class="flex-col gap-y-2">
            <p class="font-DanaMedium text-lg">{{ getCurrentUserFullname() }}</p>
            <p class="text-gray-400">{{ auth()->user()->phone }}</p>
        </span>
    </div>

    @include("account.blades.menu-items")
</div>
