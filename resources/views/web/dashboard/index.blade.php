@extends("web.layouts.app")

@section("content")
    <main class="relative">
        <!-- CATEGORY -->
        @if(isset($categories))
            @include("web.dashboard.sections.popular-categories-section")
        @endif
        <!-- Latest products -->
        @if(isset($latestProducts))
            @include("web.dashboard.sections.latest-products-section")
        @endif
    </main>
@endsection

