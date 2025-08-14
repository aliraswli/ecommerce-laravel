@extends("account.layout")

@section("account-content")
    <div class="lg:w-3/4">
        <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
            <div class="flex items-center justify-between">
                <h2 class="font-DanaMedium text-lg">اطلاعات حساب کاربری</h2>
            </div>
            <form
                method="POST"
                action="{{ route("account.post") }}"
                class="mt-5 grid grid-cols-12 gap-5 child:col-span-12 child:lg:col-span-6"
            >
                @csrf

                <x-forms.text-input
                    name="first_name"
                    label="نام"
                    :required="false"
                    :value="old('first_name', $user->first_name)"
                />
                <x-forms.text-input
                    name="last_name"
                    label="نام خانوادگی"
                    :required="false"
                    :value="old('last_name', $user->last_name)"
                />
                <x-forms.text-input
                    name="phone"
                    label="شماره تماس"
                    :required="false"
                    :value="old('phone', $user->phone)"
                />

                <br>
                <button style="height: 3rem" type="submit" class="submit-btn flex-center">
                    ثبت
                </button>
            </form>
        </div>
    </div>
@endsection
