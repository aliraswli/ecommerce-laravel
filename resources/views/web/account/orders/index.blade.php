@extends("web.account.layout") @section("account-content")
    <div class="lg:w-3/4">
        <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
            <span class="flex items-center justify-between">
                <span class="flex items-center gap-x-2">
                    <img src="{{ asset("assets/images/svg/status-delivered.svg") }}" class="w-10" alt="">
                    <h2 class="font-DanaMedium text-lg">سفارش های من :</h2>
                </span>
            </span>
            <div class="relative mt-5 overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
                <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3.5">
                            شناسه سفارش
                        </th>
                        <th scope="col" class="px-6 py-3.5">
                            تاریخ
                        </th>
                        <th scope="col" class="px-6 py-3.5">
                            قیمت
                        </th>
                        <th scope="col" class="px-6 py-3.5">
                            وضعیت
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders ?? [] as $item)
                        <tr class="bg-white border-b cursor-pointer dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                            <th
                                scope="row"
                                class="px-6 py-5 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center gap-x-2"
                            >
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-5">
                                {{ verta($item->created_at) }}
                            </td>
                            <td class="px-6 py-5">
                                {{ number_format($item["total_amount"] ?? 0) }} تومان
                            </td>
                            <td class="px-6 py-5 {{ $item->status->color() }} font-DanaDemiBold">
                                {{ $item->status->label() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
