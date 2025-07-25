<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب فروشگاهی کارین</title>
    <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>

<!-- ALL ICONS -->
<svg class="hidden">
    <symbol id="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd"
              d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z"
              clip-rule="evenodd"/>
    </symbol>
    <symbol id="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path
            d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z"/>
    </symbol>
</svg>

<section class="relative flex items-center justify-center min-h-screen w-full">
    <!-- background -->
    <div class="pointer-events-none absolute inset-0 flex w-screen items-center justify-center overflow-hidden
  [mask-image:radial-gradient(circle_at_center,rgba(255,255,255,1)_0%,rgba(255,255,255,0)_85%)]">

        <svg
            class="absolute left-0 top-0 h-full w-full stroke-black/10 stroke-[2]
    [mask-image:radial-gradient(circle_at_center,rgba(255,255,255,1)_20%,rgba(255,255,255,0)_95%)] dark:stroke-white/10">
            <rect width="100%" height="100%" stroke-width="0" fill="url(#grid-pattern)"></rect>
            <defs>
                <pattern id="grid-pattern" viewBox="0 0 64 64" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M64 0H0V64" fill="none"></path>
                </pattern>
            </defs>
        </svg>
    </div>

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
            <a href="index.html" class="flex flex-col text-center">
          <span class="font-MorabbaMedium text-4xl flex items-center">
            <span class="text-blue-500">کارین</span> شاپ
          </span>
            </a>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <p class="mb-2 text-gray-800 dark:text-gray-100 font-DanaMedium text-lg">ورود | ثبت‌نام </p>
            <form class="space-y-5" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-500 dark:text-gray-300">لطفا شماره
                        موبایل یا
                        ایمیل خود را وارد کنید </label>
                    <div class="mt-3">
                        <input type="text" required
                               class="block w-full p-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400  sm:text-sm/6 transition-all
                text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400
                ">
                    </div>
                    <p class="text-error"></p>
                </div>
                <div>
                    <a href="confirm-code.html" class="submit-btn">ورود</a>
                </div>
            </form>
            <p class="mt-8 text-center text-sm/6 text-gray-500 dark:text-gray-300">
                ورود شما به معنای پذیرش <span class="text-blue-400">قوانین سایت</span> است
            </p>
        </div>
    </div>
</section>

<script src="{{ asset("assets/scripts/app.js") }}"></script>
</body>

</html>
