@extends("account.layout")

@section("account-content")
    <div class="lg:w-3/4">
        <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
            <div class="flex items-center justify-between">
                <h2 class="font-DanaMedium text-lg">ثبت آدرس جدید</h2>
            </div>
            <form
                method="POST"
                action="{{ route("address.store") }}"
                class="mt-5 grid grid-cols-12 gap-5 child:col-span-12 child:lg:col-span-6"
            >
                @csrf

                <x-forms.text-input
                    name="title"
                    label="عنوان"
                    :required="false"
                />
                <x-forms.text-input
                    name="province"
                    label="استان"
                    :required="false"
                />
                <x-forms.text-input
                    name="city"
                    label="شهرستان"
                    :required="false"
                />
                <x-forms.text-input
                    name="postal_code"
                    label="کدپستی"
                    :required="false"
                />
                <x-forms.text-input
                    name="address"
                    label="آدرس"
                    :required="false"
                />

                <br>
                <button style="height: 3rem" type="submit" class="submit-btn flex-center">
                    ثبت آدرس
                </button>
            </form>
        </div>
    </div>
@endsection
