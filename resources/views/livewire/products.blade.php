<div class="row">
    @foreach ($products as $product)

        <div class="col-md-4 col-6">
            <div class="product-style-1 text-center mb-3">
                <div class="product-image">
                    <a href="{{ route('customer.single-product', $product['id']) }}"> <img class="img-fluid"
                            src="{{ $product['product_main_image'] }}"> </a>
                    <div class="product-option">
                        <span class="discount">-30% </span>

                        <span class="add-to-wishlist">
                            <a style="cursor: pointer;">

                                @if (auth()->user())
                                    @if (auth()->user()->user_type == 'customer')
                                        @if (favorite($product['id']))
                                            <i class="fas fa-heart fa-lg favorite" id="like" style="color: red;"
                                                product={{ $product['id'] }}></i>
                                        @else
                                            <i class="far fa-heart fa-lg favorite" id="like" style="color: black;"
                                                product={{ $product['id'] }}></i>
                                        @endif
                                    @endif
                                @endif

                            </a>
                        </span>
                    </div>
                </div>

                <div class="product-content border pb-2">
                    <h3 class="mb-1 mt-3 text-center h4">
                        <a href="{{ route('customer.single-product', $product['id']) }}"
                            class='text-dark text-decoration-none'>
                            {{ $product['product_name_ar'] ?? $product['product_name_en'] }} </a>
                    </h3>
                    <h4 class=" h6  text-center text-gray font-weight-bold">
                        ${{ $product['product_price'] }}</h4>
                </div>
            </div>
        </div>
    @endforeach
</div>
