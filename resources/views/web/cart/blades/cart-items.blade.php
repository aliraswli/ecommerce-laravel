<div class="w-full lg:w-3/4 flex flex-col gap-y-8">
    <!-- shopping cart header -->
    <span class="flex items-center gap-x-2">
        <h2 class="font-DanaMedium text-xl">سبد خرید</h2>
        <p class="text-gray-400">({{ $cartItems->count() }} کالا)</p>
    </span>

    <!-- PRODUCT ITEMS -->
    <div class="w-full flex flex-col gap-y-4 child:p-2 lg:child:p-4">
        @foreach($cartItems as $index => $item)
            @php $product = $item?->product; @endphp

            <div
                id="item-{{ $item->id }}"
                class="w-full flex justify-between relative {{ ($index + 1) != $cartItems->count() ? "border-b-2" : "" }} border-gray-200 dark:border-white/20">
                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <!-- IMG AND COUNT BTN -->
                    <div class="flex w-fit flex-col">
                        <img src="{{ getPublicFile($item["product"]["file"]) }}" class="w-36" alt="">
                        <br>
                        <div
                            class="flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2"
                        >
                            {{-- Increment --}}
                            <form
                                method="POST"
                                class="flex items-center"
                                action="{{ route('cart.increment', $item["id"]) }}"
                            >
                                @csrf

                                <button
                                    type="submit"
                                    class="w-4 h-4 increment text-green-600"
                                    @disabled($item["qty"] == $product["qty"])
                                >
                                    <svg class="w-4 h-4 increment text-green-600">
                                        <use href="#plus"/>
                                    </svg>
                                </button>
                            </form>

                            {{-- qty display --}}
                            <span>{{ $item["qty"] ?? 0 }}</span>

                            {{-- Decrement --}}
                            <form
                                method="POST"
                                class="flex items-center"
                                action="{{ route('cart.decrement', $item["id"]) }}"
                            >
                                @csrf
                                <button type="submit" class="w-4 h-4 decrement text-red-500">
                                    <svg class="w-4 h-4 decrement text-red-500">
                                        <use href="#minus"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Product Information -->
                    <div class="h-full flex flex-col justify-between">

                        <div class="flex flex-col gap-y-1.5">
                            <h2 class="font-DanaMedium line-clamp-1">
                                {{ $product['name'] ?? "" }}
                            </h2>
                            <h2 class="font-DanaMedium line-clamp-1 text-xs text-red-500">
                                تنها {{ $product['qty'] ?? 0 }} عدد در انبار موجود است.
                            </h2>
                        </div>

                        <div>
                            @isset($product["discount"])
                                <span
                                    style="text-decoration: line-through;"
                                    class="flex gap-x-1 text-gray-700 dark:text-gray-300 font-DanaMedium mt-2"
                                >
                                    <p class="font-DanaMedium text-base">
                                        {{ number_format($product['price'] ?? 0) }}
                                    </p>
                                    <p class="text-base">تومان</p>
                                </span>
                            @endisset
                            <span class="flex gap-x-1 text-blue-600 dark:text-blue-400 font-DanaMedium mt-2">
                                <p class="font-DanaMedium text-xl">
                                    {{ number_format(productDiscountPrice($product["price"], $product["discount"])) }}
                                </p>
                                <p class="text-lg">تومان</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
