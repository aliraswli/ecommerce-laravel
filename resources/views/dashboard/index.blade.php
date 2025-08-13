@extends("layouts.app")

@section("content")
    <main class="relative">
        <!-- CATEGORY -->
        @if(isset($categories))
            @include("dashboard.sections.popular-categories-section")
        @endif
        <!-- Latest products -->
        @if(isset($latestProducts))
            @include("dashboard.sections.latest-products-section")
        @endif
    </main>
@endsection
