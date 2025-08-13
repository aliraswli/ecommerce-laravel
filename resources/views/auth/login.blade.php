@extends("auth.layouts.auth_layout")

@section("auth.content")
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <p class="mb-2 text-gray-800 dark:text-gray-100 font-DanaMedium text-lg">
            ورود به {{ config('project.project-name') }}
        </p>

        <form class="space-y-5" action="{{ route("login.post") }}" method="POST">
            @csrf

            <x-forms.text-input name="username" placeholder="نام کاربری" :required="true"/>
            <x-forms.text-input name="password" placeholder="رمزعبور" :required="true"/>

            <button type="submit" class="submit-btn">
                ورود
            </button>

        </form>

        <a href="{{ route("register.index") }}" class="mt-10 flex flex-col text-center text-sm">
            قبلا ثبت نام نکرده ام, ساخت حساب کاربری
        </a>
    </div>
@endsection
