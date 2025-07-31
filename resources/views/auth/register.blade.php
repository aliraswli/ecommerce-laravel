@extends("auth.layouts.auth_layout")

@section("auth.content")
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <p class="mb-2 text-gray-800 dark:text-gray-100 font-DanaMedium text-lg">
            ثبت نام در {{ config('project.project-name') }}
        </p>

        <form class="space-y-5" action="{{ route("auth.register.post") }}" method="POST">
            @csrf

            <x-forms.text-input
                name="first_name"
                placeholder="نام"
                :required="true"
            />
            <x-forms.text-input
                name="last_name"
                placeholder="نام خانوادگی"
                :required="true"
            />
            <x-forms.text-input
                name="username"
                placeholder="نام کاربری"
                :required="true"
            />
            <x-forms.text-input
                name="email"
                type="email"
                placeholder="ایمیل"
                :required="true"
            />
            <x-forms.text-input
                name="password"
                type="password"
                placeholder="رمزعبور"
                :required="true"
            />
            <x-forms.text-input
                name="password_confirmation"
                type="password"
                placeholder="رمزعبور"
                :required="true"
            />

            <button type="submit" class="submit-btn">
                ساخت حساب
            </button>

        </form>

        <a href="{{ route("auth.login") }}" class="mt-10 flex flex-col text-center text-sm">
            حساب کاربری دارم, ورود به فروشگاه
        </a>
    </div>
@endsection
