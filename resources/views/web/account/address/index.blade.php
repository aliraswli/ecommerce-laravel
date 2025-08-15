@extends("web.account.layout")

@section("account-content")
    <div class="lg:w-3/4">
        <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
            <div class="flex items-center justify-between">
                <span class="flex items-center gap-x-2">
                    <img src="{{ asset("assets/images/svg/map.png") }}" class="w-8" alt="">
                    <h2 class="font-DanaMedium text-lg"> آدرس های من:</h2>
                </span>
                <a href="{{ route('address.create') }}" class="flex items-center gap-x-1 text-blue-500">
                    <svg class="size-5  ">
                        <use href="#plus"></use>
                    </svg>
                    <h2 class="font-DanaMedium">آدرس جدید</h2>
                </a>
            </div>

            <ul class="mt-5 space-y-3">
                @foreach($addresses as $address)
                    <li class="relative w-full border border-blue-300 dark:border-blue-400 p-4 rounded-lg">
                        <span href="#" class="flex items-center gap-x-1 text-blue-500 dark:text-blue-400">
                            <svg class="size-6">
                            <use href="#map"></use>
                            </svg>
                            <h2 class="font-DanaMedium">
                                {{ $address->title }}
                            </h2>
                        </span>
                        <div class="space-y-1.5 text-gray-600 dark:text-gray-300 mt-3 mr-2">
                            <p>کد پستی: {{ $address->postal_code }}</p>
                            <p>استان: {{ $address->province }}</p>
                            <p>شهرستان: {{ $address->city }}</p>
                            <p>{{ $address->address }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
