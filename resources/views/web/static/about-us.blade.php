@extends("web.layouts.app")

@section("content")
    <main class="container">
        <!-- Breadcrumb -->
        <x-breadcrumb route="about-us"/>

        <!-- Content -->
        <section class="w-full  flex flex-col lg:flex-row gap-4 p-5 rounded-lg shadow bg-white dark:bg-gray-800 mt-8">
            <div class=" w-full lg:w-2/4">
                <!-- Logo -->
                <a href="index.html" class="flex flex-col text-center w-fit">
                    <span class="font-MorabbaMedium text-4xl flex items-center">
                        <span class="text-blue-500">کارین</span> شاپ
                    </span>
                    <p class="font-DanaMedium text-gray-400"> خرید موبایل و لپ‌تاپ</p>
                </a>

                <p class="mt-3 leading-10 text-gray-600 dark:text-gray-300">
                    به دیجیتال مارکت کارین شاپ خوش آمدید! فروشگاهی تخصصی در حوزه موبایل، لپ‌تاپ و لوازم جانبی دیجیتال.
                    ما در کارین شاپ با تکیه بر تجربه، دانش فنی و تعهد به رضایت مشتریان، به دنبال ارائه بهترین محصولات
                    دیجیتال با قیمت مناسب و خدمات حرفه‌ای هستیم.
                </p>
                <h2 class="mt-3 font-DanaMedium text-xl"> خدمات ما</h2>
                <ul class="mt-3 text-gray-600 dark:text-gray-300 space-y-2 child:flex child:items-center child:gap-x-2">
                    <li>
                        <span class="w-3 h-3 rounded-full bg-blue-500 hidden lg:flex"></span>
                        <p>فروش انواع موبایل و لپ‌تاپ از برندهای معتبر با گارانتی رسمی و معتبر.</p>
                    </li>
                    <li>
                        <span class="w-3 h-3 rounded-full bg-blue-500 hidden lg:flex"></span>
                        <p>مشاوره تخصصی پیش از خرید برای انتخاب مناسب‌ترین محصول بر اساس نیاز شما.</p>
                    </li>
                    <li>
                        <span class="w-3 h-3 rounded-full bg-blue-500 hidden lg:flex"></span>
                        <p>ارسال سریع و مطمئن به سراسر کشور با پشتیبانی کامل پس از خرید.</p>
                    </li>
                </ul>
                <h2 class="mt-3 font-DanaMedium text-xl">
                    چشم‌انداز ما
                </h2>
                <p class="mt-3 leading-10 text-gray-600 dark:text-gray-300">
                    هدف ما در کارین شاپ این است که به یکی از برترین مراجع خرید دیجیتال کشور تبدیل شویم. با به‌روزرسانی
                    مداوم موجودی، پشتیبانی متمایز و ارتقاء تجربه کاربری، در تلاشیم تا فرآیند خرید آنلاین را ساده‌تر،
                    امن‌تر و لذت‌بخش‌تر کنیم.
                </p>

                <div class="flex items-center gap-x-4 text-gray-600 dark:text-gray-300 mt-3">
                    <span class="flex items-center gap-x-2">
                        <p>KarinShop</p>
                        <img class="w-5 h-5" src="./images/svg/instagram.png" alt="instagram">
                    </span>
                    <span class="flex items-center gap-x-2">
                        <p>KarinShop</p>
                        <img class="w-5 h-5" src="./images/svg/telegram.png" alt="telegram">
                    </span>
                </div>
            </div>
            <div class="flex justify-end w-full lg:w-2/4">
                <img src="./images/aboute/1.jpg" class="rounded-lg lg:h-[35rem] object-cover w-[70%]" alt="">
            </div>
        </section>

    </main>
@endsection
