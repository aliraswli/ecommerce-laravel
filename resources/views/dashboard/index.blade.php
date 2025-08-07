@extends("layouts.app")

@section("content")
    <main class="relative">
        <!-- CATEGORY -->
        @if($categories)
            @include("dashboard.sections.popular-categories-section")
        @endif
        <!-- Latest products -->
        @if($latestProducts)
            @include("dashboard.sections.latest-products-section")
        @endif
    </main>
@endsection
