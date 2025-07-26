@extends("layouts.app")

@section("content")
    <main class="relative">
        <!-- CATEGORY -->
        @include("dashboard.popular-categories-section")
        <!-- AMAZING SLIDER -->
        @include("dashboard.amazing-offers-section")
        <!-- Latest products -->
        @include("dashboard.latest-products-section")
        <!-- Hottest products -->
        @include("dashboard.hottest-products-section")
    </main>
@endsection
