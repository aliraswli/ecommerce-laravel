@extends("layouts.app")

@section("content")
    <main class="container">
        <!-- Breadcrumb -->
        <x-breadcrumb route="payment.index"/>

        <section
            class="flex flex-col lg:flex-row justify-between
            items-start gap-4 child:rounded-lg child:bg-white
            child:dark:bg-gray-800 child:shadow child:p-4 mt-5"
        >
            <div
                class="w-full lg:w-3/4 flex flex-col gap-y-4 child:rounded-lg
                child:bg-white child:dark:bg-gray-800 child:shadow child:p-4"
            >
                @include("payment.blades.payment-method")

                @include("payment.blades.discount-code")
            </div>

            <!-- Cart Price Details -->
            @include("payment.blades.payment-information")
        </section>
    </main>
@endsection
