
<div
class="wd-shipping-details wd-wpb wd-rs-64d4a440ad0ba vc_custom_1691657287309">
<div class="woocommerce-shipping-fields">

    {{-- <h3 id="ship-to-different-address">
        <label
            class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
            <input id="ship-to-different-address-checkbox"
                class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                type="checkbox" name="ship_to_different_address"
                value="1"> <span>Ship to a different address?</span>
        </label>
    </h3> --}}

    <div class="shipping_address" style="display: none;">


        <div class="woocommerce-shipping-fields__field-wrapper">
            <p class="form-row form-row-first validate-required"
                id="shipping_first_name_field" data-priority="10"><label
                    for="shipping_first_name" class="">First
                    name&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_first_name"
                        id="shipping_first_name" placeholder=""
                        value="Jimmy" autocomplete="given-name"></span></p>
            <p class="form-row form-row-last validate-required"
                id="shipping_last_name_field" data-priority="20"><label
                    for="shipping_last_name" class="">Last
                    name&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_last_name"
                        id="shipping_last_name" placeholder="" value="Kiarie"
                        autocomplete="family-name"></span></p>
            <p class="form-row form-row-wide" id="shipping_company_field"
                data-priority="30"><label for="shipping_company"
                    class="">Company name&nbsp;<span
                        class="optional">(optional)</span></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_company"
                        id="shipping_company" placeholder="" value=""
                        autocomplete="organization"></span></p>
            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                id="shipping_country_field" data-priority="40"><label
                    for="shipping_country" class="">Country /
                    Region&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper">
                    <select name="shipping_country" id="shipping_country"
                        class="country_to_state country_select select2-hidden-accessible"
                        autocomplete="country"
                        data-placeholder="Select a country / region…"
                        data-label="Country / Region" tabindex="-1"
                        aria-hidden="true">
                        <option value="">Select a country / region…
                        </option>
                    </select><span
                        class="select2 select2-container select2-container--default"
                        dir="ltr" style="width: 100%;"><span
                            class="selection"><span
                                class="select2-selection select2-selection--single"
                                aria-haspopup="true" aria-expanded="false"
                                tabindex="0" aria-label="Country / Region"
                                role="combobox"><span
                                    class="select2-selection__rendered"
                                    id="select2-shipping_country-container"
                                    role="textbox" aria-readonly="true"
                                    title="Kenya">Kenya</span><span
                                    class="select2-selection__arrow"
                                    role="presentation"><b
                                        role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper"
                            aria-hidden="true"></span></span><noscript><button
                            type="submit"
                            name="woocommerce_checkout_update_totals"
                            value="Update country / region">Update country /
                            region</button></noscript></span></p>
            <p class="form-row form-row-wide address-field validate-required"
                id="shipping_address_1_field" data-priority="50"><label
                    for="shipping_address_1" class="">Street
                    address&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_address_1"
                        id="shipping_address_1"
                        placeholder="House number and street name"
                        value="Saku Business Park, Eastern Bypass Slip Road Nairobi, Kenya"
                        autocomplete="address-line1"></span></p>
            <p class="form-row form-row-wide address-field"
                id="shipping_address_2_field" data-priority="60"><label
                    for="shipping_address_2"
                    class="screen-reader-text">Apartment, suite, unit,
                    etc.&nbsp;<span
                        class="optional">(optional)</span></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_address_2"
                        id="shipping_address_2"
                        placeholder="Apartment, suite, unit, etc. (optional)"
                        value="" autocomplete="address-line2"></span>
            </p>
            <p class="form-row form-row-wide address-field validate-required"
                id="shipping_city_field" data-priority="70"
                data-o_class="form-row form-row-wide address-field validate-required">
                <label for="shipping_city" class="">Town /
                    City&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_city"
                        id="shipping_city" placeholder="" value="Nairobi"
                        autocomplete="address-level2"></span>
            </p>
            <p class="form-row form-row-wide address-field validate-required validate-state"
                id="shipping_state_field" data-priority="80"
                data-o_class="form-row form-row-wide address-field validate-required validate-state">
                <label for="shipping_state" class="">State /
                    County&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><select
                        name="shipping_state" id="shipping_state"
                        class="state_select select2-hidden-accessible"
                        autocomplete="address-level1"
                        data-placeholder="Select an option…"
                        data-input-classes="" data-label="State / County"
                        tabindex="-1" aria-hidden="true">
                        <option value="">Select an option…</option>
                        <option value="KE01">Baringo</option>
                        <option value="KE02">Bomet</option>
                    </select><span
                        class="select2 select2-container select2-container--default"
                        dir="ltr" style="width: 100%;"><span
                            class="selection"><span
                                class="select2-selection select2-selection--single"
                                aria-haspopup="true" aria-expanded="false"
                                tabindex="0" aria-label="State / County"
                                role="combobox"><span
                                    class="select2-selection__rendered"
                                    id="select2-shipping_state-container"
                                    role="textbox" aria-readonly="true"><span
                                        class="select2-selection__placeholder">Select
                                        an option…</span></span><span
                                    class="select2-selection__arrow"
                                    role="presentation"><b
                                        role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper"
                            aria-hidden="true"></span></span></span>
            </p>
            <p class="form-row form-row-wide address-field validate-required validate-postcode"
                id="shipping_postcode_field" data-priority="90"
                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                <label for="shipping_postcode" class="">Postcode /
                    ZIP&nbsp;<abbr class="required"
                        title="required">*</abbr></label><span
                    class="woocommerce-input-wrapper"><input type="text"
                        class="input-text " name="shipping_postcode"
                        id="shipping_postcode" placeholder="" value="00100"
                        autocomplete="postal-code"></span>
            </p>
        </div>


    </div>

</div>
<div class="woocommerce-additional-fields">
    <div class="woocommerce-additional-fields__field-wrapper">
        <p class="form-row notes thwcfd-field-wrapper thwcfd-field-textarea"
            id="order_comments_field" data-priority=""><label
                for="order_comments" class="">Order notes&nbsp;<span
                    class="optional">(optional)</span></label><span
                class="woocommerce-input-wrapper">
                <textarea name="order_comments" class="input-text " id="order_comments"
                    placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
            </span></p>
    </div>


</div>
</div>
