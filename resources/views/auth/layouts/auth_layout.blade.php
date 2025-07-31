@extends("layouts.app")

@section("content")
    <section class="relative flex items-center justify-center min-h-screen w-full">
        {{--Background Paint--}}
        <div
            class="pointer-events-none absolute inset-0 flex w-screen items-center justify-center overflow-hidden [mask-image:radial-gradient(circle_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0)_85%)]">
            <svg
                class="absolute left-0 top-0 h-full w-full stroke-black/10 stroke-[2] [mask-image:radial-gradient(circle_at_center,rgba(255,255,255,1)_20%,rgba(255,255,255,0)_95%)] dark:stroke-white/10">
                <rect width="100%" height="100%" stroke-width="0" fill="url(#grid-pattern)"></rect>
                <defs>
                    <pattern id="grid-pattern" viewBox="0 0 64 64" width="60" height="60" patternUnits="userSpaceOnUse">
                        <path d="M64 0H0V64" fill="none"></path>
                    </pattern>
                </defs>
            </svg>
        </div>

        {{--Main Content--}}
        <div
            class="relative w-[27rem] mx-5 flex flex-col justify-center py-12 px-4 md:px-8 bg-white dark:bg-gray-800 shadow-md rounded-xl">
            <div class="flex items-center justify-center">
                <button class="toggle-theme absolute left-2 top-2 flex-center p-1.5 rounded-full text-gray-300">
                    <svg class="inline-block dark:hidden size-5">
                        <use href="#moon"/>
                    </svg>
                    <svg class="hidden dark:inline size-5">
                        <use href="#sun"/>
                    </svg>
                </button>
                <a href="{{ route("user.dashboard") }}" class="flex flex-col text-center">
                    <span class="font-MorabbaMedium text-4xl flex items-center">
                        <span class="text-blue-500">فروشگاه</span>
                        لاراول
                    </span>
                </a>
            </div>

            @yield("auth.content")
        </div>
    </section>
@endsection
