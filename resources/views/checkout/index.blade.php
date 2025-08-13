@extends("layouts.app")

@section("content")
    <main class="container">
        <!-- Breadcrumb -->
        <x-breadcrumb route="checkout.index"/>

        <section class="flex flex-col lg:flex-row justify-between items-start gap-4 mt-5">
            <!-- Form -->
            <div
                class="w-full lg:w-3/4 flex flex-col gap-y-4 child:rounded-lg child:bg-white child:dark:bg-gray-800 child:shadow child:p-4">
                <div class="w-full flex flex-col">
                    <span class="flex items-center gap-x-2">
                        <a href="{{ route("cart.index") }}">
                            <svg class="size-5">
                                <use href="#arrow-right"></use>
                            </svg>
                        </a>
                        <p class="font-DanaDemiBold text-lg">آدرس و زمان ارسال</p>
                    </span>
                    <br>
                    <div class="flex flex-col lg:flex-row items-start ">
                        <form class="w-full grid grid-cols-12 gap-4">
{{--                            <x-forms.text-input--}}
{{--                                name="dk"--}}
{{--                                placeholder="نام*"--}}
{{--                                :required="false"--}}
{{--                            />--}}

                            <input type="text" placeholder="نام*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="نام خانوادگی*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="استان*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="شهر*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="آدرس*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-12
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="تلفن*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="کد پستی*"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-6
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400 h-11">
                            <input type="text" placeholder="توضیحات"
                                   class="block w-full py-1.5 px-3 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400   transition-all col-span-12 h-11
                            text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">

                        </form>
                    </div>
                </div>
                <div>
                    <span class="flex items-center gap-x-1">
                        <a href="shopping-cart.html">
                            <svg class="size-5 mb-1">
                                <use href="#truck"></use>
                            </svg>
                        </a>
                        <h1 class="font-DanaDemiBold">نوع ارسال</h1>
                    </span>
                    <div class="grid grid-cols-12 child:col-span-12 gap-2 child:w-full child:flex child:items-center child:gap-x-2 child:rounded-lg  child:p-3 child:duration-300 child:border child:border-gray-300 child:dark:border-gray-300/20
                    child:transition-all child:text-gray-600 child:dark:text-gray-300  child:font-DanaMedium child:text-base mt-4">
                        <button
                            class=" group ring-transparent ring-1 focus:ring-blue-500 dark:ring-white/20 dark:focus:ring-blue-400">
                            <span
                                class="w-4 h-4 border border-gray-400 rounded-full group-focus:bg-blue-400 group-focus:border-blue-500 duration-300 transition-all"></span>
                            پست پیشتاز : 70,000 تومان
                        </button>
                        <button
                            class="group ring-transparent ring-1 focus:ring-blue-500 dark:ring-white/20 dark:focus:ring-blue-400">
                            <span
                                class="w-4 h-4 border border-gray-400 rounded-full group-focus:bg-blue-400 group-focus:border-blue-500 duration-300 transition-all"></span>
                            پست معمولی : 20,000 تومان
                        </button>
                    </div>
                </div>
                <div>
                    <h1 class="font-DanaDemiBold text-lg">خلاصه سفارش</h1>
                    <div class="mt-8">
                         <span class="flex items-center gap-x-1.5">
                        <a href="shopping-cart.html">
                            <svg class="size-6 text-red-500 mb-1">
                                <use href="#truck"></use>
                            </svg>
                        </a>
                        <h1 class="font-DanaMedium text-lg">جمعه ۲ خرداد-بازه ۹ - ۲۲</h1>
                        </span>
                        <div class="flex flex-col mt-8 gap-x-4">
                            <img src="./images/products/8.webp" class="w-36 h-20" alt="">
                            <ul class="flex flex-col items-start gap-y-2 font-DanaMedium text-gray-600 dark:text-gray-200 mt-5  mr-3">
                                <li class="flex items-center gap-x-1.5">
                                    <span class="size-5 bg-blue-500 rounded-full"></span>
                                    <p>آبی</p>
                                </li>
                                <li>
                                    <p>مبلغ : ۵۲,۹۹۸,۰۰۰</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRICE BOX -->
            <div
                class="w-full lg:w-1/4 lg:sticky top-5 flex flex-col gap-y-4 rounded-lg bg-white dark:bg-gray-800 shadow p-4">
                <!-- PRICE -->
                <ul class="child:flex child:items-center child:justify-between space-y-8">
                    <li>
                        <p>قیمت کالاها(۱)</p>
                        <p class="flex gap-x-1 text-gray-600 dark:text-gray-300 ">۱۲۵,۰۰۰,۰۰۰ <span
                                class="hidden xl:flex">تومان</span></p>
                    </li>
                    <li class="text-red-500 dark:text-red-400">
                        <p>تخفیف </p>
                        <p class="font-DanaMedium">۵۰۰,۰۰۰ تومان </p>
                    </li>
                    <li class="border-t-2 border-dashed border-gray-400 pt-8">
                        <p> مبلغ نهایی :</p>
                        <p>۱۱۹,۵۰۰,۰۰۰ تومان</p>
                    </li>
                </ul>

                <a href="./payment.html"
                   class="w-full mt-4 flex items-center gap-x-1 justify-center bg-blue-500 text-white hover:bg-blue-600 transition-all rounded-lg shadow py-2">
                    تایید و تکمیل سفارش
                    <svg class="w-5 h-5">
                        <use href="#shopping-bag"></use>
                    </svg>
                </a>

            </div>
        </section>
    </main>
@endsection
