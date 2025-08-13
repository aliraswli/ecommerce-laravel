<header class="header">
    <!-- Desktop -->
    <div class="container mt-5 hidden flex-col gap-y-6 lg:flex">
        <!-- TOP-BAR -->
        @include("layouts.header.desktop-topbar")
        <!-- NAVBAR -->
        @include("layouts.header.desktop-navbar")
    </div>
    <!-- Mobile -->
    <div class="flex justify-center lg:hidden">
        {{--  Navbar  --}}
        @include("layouts.header.mobile-navbar")

        {{--  Search Feature  --}}
        @include("layouts.header.mobile-search")
    </div>
</header>
