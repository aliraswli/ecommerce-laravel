@extends("layouts.app")

@section("content")
    <main class="container">
        <x-breadcrumb route="cart.index"/>

        <!-- Shop Cart -->
        <section
            class="flex flex-col lg:flex-row justify-between
            items-start gap-4 child:rounded-lg child:bg-white
            child:dark:bg-gray-800 child:shadow child:p-4 mt-5"
        >

            <!-- Products -->
            @include("cart.blades.cart-items")

            <!-- Cart Price Details -->
            @include("cart.blades.cart-information")
        </section>
    </main>
@endsection
