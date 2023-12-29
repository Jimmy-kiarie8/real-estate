
<div class="wd-cart-table wd-wpb wd-rs-636e3ce8f3c24 vc_custom_1668168942159">
    <form class="woocommerce-cart-form cart-data-form"
        action="#" method="post">
        <div class="cart-table-section">


            <table
                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">
                            Product </th>
                        <th class="product-price">
                            Price </th>
                        <th class="product-quantity">
                            Quantity </th>
                        <th class="product-subtotal">
                            Subtotal </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cart as $cart_item)
                    {{-- {{ dd($cart_item) }} --}}

                    <tr class="woocommerce-cart-form__cart-item cart_item cart-item" data-product-id="{{ $cart_item->id }}">

                        <td class="product-remove">
                            {{-- <a href="#"
                                class="remove"
                                aria-label="Remove Belt - French Bistre from cart"
                                data-product_id="436"
                                data-product_sku="AR-209">×</a> --}}
                                <a href="#" class="remove-item" data-product-id="{{ $cart_item->id }}">X</a>

                        </td>

                        <td class="product-thumbnail">
                            <a
                                href="https://woodmart.xtemos.com/furniture2/product/belt/?attribute_pa_color=french-bistre">
                                <picture
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                    decoding="async" loading="lazy">
                                    <source type="image/webp" sizes="(max-width: 430px) 100vw, 430px">
                                    <img width="430" height="491" style="width: 50px; border-radius: 30px"
                                        src="{{ $cart_item->attributes->image }}"
                                        alt="" decoding="async"
                                        loading="lazy"
                                        sizes="(max-width: 430px) 100vw, 430px">
                                </picture>
                            </a>
                        </td>

                        <td class="product-name" data-title="Product">
                            <a
                                href="#">{{$cart_item->name}}</a>
                        </td>


                        <td class="product-price" data-title="Price">
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">Ksh</span>{{$cart_item->price}}</bdi></span>
                        </td>

                        <td class="product-quantity" data-title="Quantity">

                            <div class="quantity">
                                <input type="button" class="minus" data-product-id="{{ $cart_item->id }}" value="-">
                                <input type="number" class="input-text qty text" value="{{ $cart_item->quantity }}" data-product-id="{{ $cart_item->id }}" style="width:100px">
                                {{-- <input type="button" class="plus" data-product-id="{{ $cart_item->id }}" value="+"> --}}
                                <input type="button" class="plus loading" data-product-id="{{ $cart_item->id }}" value="+">


                            </div>
                        </td>

                        <td class="product-subtotal" data-title="Subtotal">
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">Ksh</span>{{$cart_item->price * $cart_item->quantity}}</bdi></span>
                        </td>
                    </tr>

                    @endforeach

                    <tr class="wd-cart-action-row">
                        <td colspan="6" class="actions">
                            <div class="cart-actions">
                                <div class="coupon wd-coupon-form">
                                    <label for="coupon_code">
                                        Coupon: </label>
                                    <input type="text" name="coupon_code"
                                        class="input-text" id="coupon_code"
                                        value="" placeholder="Coupon code">
                                    <button type="submit" class="button"
                                        name="apply_coupon" value="Apply coupon">
                                        Apply coupon </button>
                                </div>

                                <button type="submit" class="button  wd-hide"
                                    name="update_cart" value="Update cart"
                                    disabled="">
                                    Update cart </button>


                                <input type="hidden" id="woocommerce-cart-nonce"
                                    name="woocommerce-cart-nonce"
                                    value="7b7499de64"><input type="hidden"
                                    name="_wp_http_referer"
                                    value="/furniture2/cart/?removed_item=1">
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </form>
</div>
