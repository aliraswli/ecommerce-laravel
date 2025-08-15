<div class="swiper-slide product-card group">
    <!-- Product Header -->
    <div class="product-card_header">
        <div class="flex items-center gap-x-2">
            <div class="tooltip">
                <button class="rounded-full p-1.5 app-border app-hover">
                    <svg class="size-4">
                        <use href="#shopping-cart"/>
                    </svg>
                </button>
                <div class="tooltiptext">سبد خرید</div>
            </div>
            <div class="tooltip">
                <button
                    id="favorite-{{ $product->id }}"
                    data-product-id="{{ $product->id }}"
                    @class([
                        'rounded-full p-1.5 app-border app-hover favorite-btn',
                        'text-red-500' => $product->is_favorite
                    ])
                >
                    <svg class="size-4">
                        <use href="#heart"/>
                    </svg>
                </button>
                <div class="tooltiptext">علاقه مندی</div>
            </div>
        </div>
        <!-- Badge Discount -->
        @isset($product->discount)
            <span class="product-card_badge">{{ $product->discount }}% تخفیف‌</span>
        @endisset
    </div>
    <!-- Product Image -->
    <a href="{{ route("product.details", $product->id) }}">
        @if(isset($product?->file?->path))
            <img class="product-card_img" src="{{ asset("storage/" . $product?->file?->path) }}" alt="">
        @endif
    </a>
    <!--  Product Footer -->
    <div class="space-y-2">
        <a href="{{ route("product.details", $product->id) }}" class="product-card_link">
            {{ $product->name }}
        </a>
        <!-- Rate and Price -->
        <div class="product-card_price-wrapper">
            <!-- Price -->
            <div class="product-card_price">
                @isset($product->discount)
                    <del>{{ number_format($product->price) }} تومان</del>
                @endisset
                <p>{{ number_format($product->final_price) }}</p>
                <span>تومان</span>
            </div>
        </div>
    </div>
</div>

@push("scripts")
    <script>
        $(document).ready(function () {
            $('.favorite-btn').click(function (e) {
                e.preventDefault();

                let button = $(this);
                let productId = button.data('product-id');

                if (button.data('loading')) return;

                button.data('loading', true);

                $.ajax({
                    url: "{{ route('favorite') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId
                    },
                    success: function (response) {
                        if (response.status) {
                            button.addClass('text-red-500');
                        } else {
                            button.removeClass('text-red-500');
                        }

                        button.data('loading', false);
                    },
                    error: function () {
                        button.data('loading', false);
                    }
                });
            });
        });
    </script>
@endpush

