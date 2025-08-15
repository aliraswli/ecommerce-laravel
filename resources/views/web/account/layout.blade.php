@extends("web.layouts.app")

@section("content")
    <main class="container relative">

        <div
            class="message-wrapper
            @if(session('success') || session('info') || $errors->has('general')) has-message @endif"
        >

            @if(session('success'))
                <div class="success-message"> {{ session('success') }} </div>
            @endif

            @if(session('info'))
                <div class="info-message">{{ session('info') }}</div>
            @endif

            @error('general')
            <div class="error-message"> {{ $message }} </div>
            @enderror
        </div>

        <div class="flex flex-col lg:flex-row gap-x-8">
            @include("web.account.blades.side-menu")
            @include("web.account.blades.mobile-menu")

            {{-- Account screen --}}
            @yield("account-content")
        </div>
    </main>
@endsection

@push("scripts")
    <script src="{{ asset("assets/scripts/dashboard.js") }}"/>
@endpush
