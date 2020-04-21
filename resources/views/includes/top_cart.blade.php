<a href="#" id="top-cart-trigger"><i class="icon-line2-handbag"></i><span>{{ $cartQty }}</span></a>
<div class="top-cart-content">
    <div class="top-cart-title">
        <h4>購物車</h4>
    </div>
    <div class="top-cart-items">
        @foreach ($cartContent as $item)
            <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                    <a href="#"><img
                            src="{{ $item->associatedModel->pic_url }}"
                            alt="{{ $item->associatedModel->title }}" /></a>
                </div>
                <div class="top-cart-item-desc">
                    <a href="#" class="t400">{{ $item->associatedModel->title }}</a>
                    <span class="top-cart-item-price">${{ $item->price }}</span>
                    <span class="top-cart-item-quantity">x {{ $item->quantity }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="top-cart-action clearfix">
        <span class="fleft top-checkout-price t600 font-secondary" style="color: #333;">${{ \Cart::getTotal() }}</span>
        <button onclick="location.href='{{ url("\checkoutCart") }}'"
            class="button button-dark button-circle button-small nomargin fright">送出訂單</button>
    </div>
</div>
