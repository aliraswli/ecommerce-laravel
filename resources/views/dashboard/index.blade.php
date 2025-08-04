@extends("layouts.app")

@section("content")
    <main class="relative">
        <!-- CATEGORY -->
        @include("dashboard.sections.popular-categories-section")
        <!-- AMAZING SLIDER -->
        @include("dashboard.sections.amazing-offers-section")
        <!-- Latest products -->
        @include("dashboard.sections.latest-products-section")
        <!-- Hottest products -->
        @include("dashboard.sections.hottest-products-section")
    </main>
@endsection
