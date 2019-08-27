@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper shipping-info cart-form">
        <div class="container">
            <div class="content section">
                <h2 style="margin-bottom: 20px">{{@trans("pages.shopping_cart.payment")}}</h2>
                <div class="payment-header col-xs-12">
                    <div class="payment-process col-xs-3 ">
                        <div class="payment-circle chosen">
                            01
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.shopping_cart")}}</div>
                    </div>
                    <div class="payment-process col-xs-3 selected">
                        <div class="payment-circle">
                            02
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.shipping_info")}}</div>
                    </div>
                    <div class="payment-process col-xs-3">
                        <div class="payment-circle">
                            03
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.checkout")}}</div>
                    </div>
                    <div class="payment-process col-xs-3">
                        <div class="payment-circle">
                            04
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.confirmation")}}</div>
                    </div>
                </div>

                <form action="\shopping\save-shipping-info" id="shipping-info-form" method="POST">
                    {{ csrf_field() }}
                    <div class="col-sm-12 col-lg-6 billing-content">
                        <!-- begin billing information-->
                        <div class="row content-box">
                            <div class="title">{{@trans("pages.check_out.billing_information")}}</div>
                            <div class="row info-input {{ $errors->has('billing_address') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.address")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <input class="input-check-out" type="text" id="billing_address"
                                           name="billing_address"
                                           value="{{  $lastOrderBilling->address or '' }}" required>
                                    @if ($errors->has('billing_address'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('billing_address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="row info-input {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.telephone_number")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <input class="input-check-out" type="text" id="phone_number"
                                           name="phone_number"
                                           value="{{  $lastOrderBilling->phone_number or '' }}" required>
                                    @if ($errors->has('phone_number'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="row info-input {{ $errors->has('billing_country') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.country")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <div class="dropdown-custom">
                                        <select class="" id="billing_country" name="billing_country">
                                            @foreach ($countries as $key => $country)
                                                @php
                                                    $selected = '';
                                                    if(isset($lastOrderBilling->country_id)){
                                                        if($lastOrderBilling->country_id == $country->id){
                                                            $selected = 'selected';
                                                        }
                                                    }
                                                @endphp
                                                <option {{$selected}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @if ($errors->has('billing_country'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('billing_country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row info-input ">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.state")}}</label></div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <div class="dropdown-custom">
                                        <select class="" id="billing_state" name="billing_state">
                                        <option selected value="">{{@trans("pages.user.feet_profile.please_chosen_brief")}}</option>
                                                 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row info-input">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.city")}}</label></div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <div class="dropdown-custom">
                                        <select class="" id="billing_city" name="billing_city">
                                        <option selected value="">{{@trans("pages.user.feet_profile.please_chosen_brief")}}</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row info-input {{ $errors->has('billing_zipcode') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.zip_code")}}<span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                    <input class="input-check-out" type="text" id="billing_zipcode"
                                           name="billing_zipcode" pattern="[0-9]+"
                                           value="{{  $lastOrderBilling->zipcode or '' }}" required>
                                    @if ($errors->has('billing_zipcode'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('billing_zipcode') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="row info-input  {{ $errors->has('billing_note') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4 billing-content-title">
                                    <label>{{@trans("pages.check_out.note")}}</label></div>
                                <div class="col-sm-12 col-lg-8 billing-content-value">
                                <textarea class="input-check-out" type="text" id="billing_note"
                                          name="billing_note">{{  $lastOrderBilling->note or '' }} </textarea>
                                          @if ($errors->has('billing_note'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('billing_note') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row info-input">
                                <div class="col-sm-12 col-lg-12"><input class="" type="checkbox" id="is_same_address"
                                                                        name="is_same_address"
                                                                        value="{{ old('is_same_address') }}"> &nbsp;
                                    {{@trans("pages.check_out.is_same_address")}}
                                </div>
                            </div>
                        </div>
                        <!-- end payment information-->
                    </div>
                    <div class="col-sm-12 col-lg-6 shipping-content">
                        <!-- begin shipping information-->

                        @php
                            $shipping_country_id = isset($userShipping->country_id)?$userShipping->country_id:null;
                            $shipping_state_id = isset($userShipping->state_id)?$userShipping->state_id:null;
                            $shipping_city_id = isset($userShipping->city_id)?$userShipping->city_id:null;
                            $shipping_full_name = isset($userShipping->user)?$userShipping->user->full_name:'';
                            $shipping_email = isset($userShipping->user)?$userShipping->user->email:'';
                            $shipping_phone_number = isset($userShipping->phone_number)?$userShipping->phone_number:'';
                            $shipping_address = isset($userShipping->address)?$userShipping->address:'';
                            $shipping_zipcode = isset($userShipping->zipcode)?$userShipping->zipcode:'';
                            $shipping_note = isset($userShipping->note)?$userShipping->note:'';
                        @endphp
                        <div class="row content-box">
                            <div class="title">{{@trans("pages.check_out.shipping_information")}}</div>
                            <div class="row info-input {{ $errors->has('shipping_full_name') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.full_name")}} <span
                                                class="special-digit">*</span></label></div>
                                <div class="col-sm-12 col-lg-8">
                                    <input class="input-check-out" type="text" id="shipping_full_name"
                                           name="shipping_full_name" value="{{$shipping_full_name}}" required>
                                    @if ($errors->has('shipping_full_name'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_full_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row info-input {{ $errors->has('shipping_email') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.email")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <input class="input-check-out" type="email" id="shipping_email"
                                           name="shipping_email"
                                           value="{{$shipping_email}}" required>
                                    @if ($errors->has('shipping_email'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row info-input {{ $errors->has('shipping_phone_number') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.telephone_number")}}
                                        <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <input class="input-check-out" type="text" id="shipping_phone_number"
                                           pattern="[0-9]+"
                                           name="shipping_phone_number" value="{{$shipping_phone_number}}" required>
                                    @if ($errors->has('shipping_phone_number'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row info-input {{ $errors->has('shipping_address') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.address")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <input class="input-check-out" type="text" id="shipping_address"
                                           name="shipping_address"
                                           value="{{$shipping_address}}" required>
                                    @if ($errors->has('shipping_address'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row info-input {{ $errors->has('shipping_country') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.country")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <div class="dropdown-custom">
                                        <select class="" id="shipping_country" name="shipping_country">
                                            @foreach ($countries as $key => $country)
                                                @php
                                                    $selected = '';
                                                    if(isset($userShiping->country_id)){
                                                        if($userShiping->country_id == $country->id){
                                                            $selected = 'selected';
                                                        }
                                                    }
                                                @endphp
                                                <option {{$selected}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('shipping_country'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row info-input ">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.state")}}</label></div>
                                <div class="col-sm-12 col-lg-8">
                                    <div class="dropdown-custom">
                                        <select class="" id="shipping_state" name="shipping_state">
                                        <option selected value="">{{@trans("pages.user.feet_profile.please_chosen_brief")}}</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row info-input">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.city")}}</label></div>
                                <div class="col-sm-12 col-lg-8">
                                    <div class="dropdown-custom">
                                        <select class="" id="shipping_city" name="shipping_city">
                                        <option selected value="">{{@trans("pages.user.feet_profile.please_chosen_brief")}}</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row info-input {{ $errors->has('shipping_zipcode') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.zip_code")}} <span
                                                class="special-digit">*</span></label>
                                </div>
                                <div class="col-sm-12 col-lg-8">
                                    <input class="input-check-out" type="text" id="shipping_zipcode"
                                           name="shipping_zipcode" pattern="[0-9]+"
                                           value="{{$shipping_zipcode}}" required>
                                    @if ($errors->has('shipping_zipcode'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_zipcode') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="row info-input  {{ $errors->has('shipping_note') ? ' has-error' : '' }}">
                                <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.note")}}</label></div>
                                <div class="col-sm-12 col-lg-8">
                                <textarea class="input-check-out" type="text" id="shipping_note"
                                          name="shipping_note">{{$shipping_note}} </textarea>
                                          @if ($errors->has('shipping_note'))
                                        <span class="help-block" style="text-align: left">
                                            <strong>{{ $errors->first('shipping_note') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- end shipping information-->
                    </div>


                    <div class="cart-submit btn-list row">
                        <div class="col-sm-6 btn-content">
                            <div class="col-sm-6 nopadding">
                                <a href="/shopping/cart">
                                    <input class="btn btn-default col-sm-4" id="btn-con-shop" type="button"
                                           value="{{@trans('pages.shopping_cart.shopping_cart')}}"/>
                                </a>
                            </div>
                            <div class="col-sm-6 nopadding">
                            <!--<input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                                value="{{@trans('pages.shopping_cart.shipping_info')}}" onclick="validCheckOut()"/>-->

                                <a href="javascript:void(0);" data-toggle="tooltip"
                                   title=""
                                   data-animation="false"
                                   onclick="saveShippingInfo(event, this, {{ $key }}, '{{@trans('pages.check_out.save_shipping_info_title')}}', '{{@trans('pages.check_out.save_shipping_info_content')}}')">
                                    <input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                                           value="{{@trans('pages.shopping_cart.checkout')}}"/>
                                </a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script src="<?php echo e(asset('theme/admin/js/bootbox.min.js')); ?>"></script>
    <script>
        function saveShippingInfo(event, element, id, title, message) {
            event.preventDefault();
            var is_same_address = $('#is_same_address').is(':checked');
            if (is_same_address == true) {
                changeSameAddress();
            }
            bootbox.confirm({
                title: title,
                message: message,
                closeButton: false,
                buttons: {
                    confirm: {
                        label: '{{@trans("pages.check_out.save")}}',
                        className: 'btn-yes'
                    },
                    cancel: {
                        label: '{{@trans("pages.check_out.cancel")}}',
                        className: 'btn-no'
                    }
                },
                callback: function (result) {
                    console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
                    localStorage.setItem('is_save_shipping', result);
                    
                    var data = {
                            'cart_items_quantity':JSON.parse(localStorage.getItem('cart_items_quantity')),
                            'is_save_shipping':localStorage.getItem('is_save_shipping')
                           };
                          
                        // update Cart Items Quantity on Server
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax("{{ url('/shopping/update-card-items-quantity') }}", {
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            success: function (response) {
                                if (response.status === 200) {
                                    $('#shipping-info-form').submit();
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                if(jqXHR.status&&jqXHR.status==400){
                                    alert(jqXHR.responseText);
                                } else {
                                    alert("{{@trans("pages.shoes_style_detail.network_error")}}");
                                }
                            }
                        });

                    
                }
            })
        }

        $(document).ready(function () {
            redirectOtherPageWhenClickBackButton('/shopping/cart');
            // pattern inputs
            formatInputType($('#phone_number'), /[^0-9]/g);
            formatInputType($('#shipping_phone_number'), /[^0-9]/g);
            formatInputType($('#billing_zipcode'), /[^0-9]/g);
            formatInputType($('#shipping_zipcode'), /[^0-9]/g);            
            // Load States and Cities data for Shipping
            <?php             
            if(!empty($userShipping)){
            ?>
                loadCountries($('#shipping_country'), '{{$shipping_country_id}}');
                if('{{$shipping_state_id}}' != '') {
                    loadStatesInCountry('{{$shipping_country_id}}', $('#shipping_state'), '{{$shipping_state_id}}');
                    loadCitiesInState('{{$shipping_state_id}}', $('#shipping_city'), '{{$shipping_city_id}}');
                }
                else {
                    loadCitiesInCountry('{{$shipping_country_id}}', $('#shipping_city'), '{{$shipping_city_id}}')
                }
            <?php 
            } else {
            ?>            
                $countryId = 1;
                $selectedIndex = 1;
                loadStatesOrCities($countryId, $('#shipping_state'), $('#shipping_city'), 0, function() {
                    loadCitiesInState($('#shipping_state').find(':selected').val(), $('#shipping_city'), 0);
                });

            <?php 
            }
            ?>

            <?php             
            if(!empty($lastOrderBilling)){
            ?>
                loadCountries($('#billing_country'), '{{$lastOrderBilling->country_id}}');
                if('{{$lastOrderBilling->state_id}}' != '') {
                    loadStatesInCountry('{{$lastOrderBilling->country_id}}', $('#billing_state'), '{{$lastOrderBilling->state_id}}');
                    loadCitiesInState('{{$lastOrderBilling->state_id}}', $('#billing_city'), '{{$lastOrderBilling->city_id}}');
                }
                else {
                    loadCitiesInCountry('{{$lastOrderBilling->country_id}}', $('#billing_city'), '{{$lastOrderBilling->city_id}}')
                }
            <?php
            } else {
                ?>
                    $countryId = 1;
                    $selectedIndex = 1;
                    loadStatesOrCities($countryId, $('#billing_state'), $('#billing_city'), 0, function() {
                        loadCitiesInState($('#billing_state').find(':selected').val(), $('#billing_city'), 0);
                    });

            <?php
            }
            ?>

        });
        // Trigger elements
        $("#is_same_address").change(function () {
            var is_same_address = $('#is_same_address').is(':checked');
            if (is_same_address == true) {
                $('.shipping-content').css('display', 'none');
                $('.billing-content').prop('style', 'width: 100%');
                $('#billing_country_chosen').prop('style', 'width: 100% !important');
                $('#billing_state_chosen').prop('style', 'width: 100% !important');
                $('#billing_city_chosen').prop('style', 'width: 100% !important');
                $('#billing_zipcode').prop('style', 'width: 100% !important');

                $("#shipping_full_name").val('{{ Auth::user()->full_name}}');
                $("#shipping_email").val('{{ Auth::user()->email}}');
                $("#shipping_phone_number").val('{{ Auth::user()->phone}}');
                changeSameAddress();
            } else {
                $("#shipping_address").val('');
                $("#shipping_note").val('');
                $("#shipping_zipcode").val('');
                $("#shipping_full_name").val('');
                $("#shipping_email").val('');
                $("#shipping_phone_number").val('');
                
                $countryId = 1;
                $selectedIndex = 0;
                $("#shipping_country").val($countryId);
                $("#shipping_country").trigger("chosen:updated");
                loadStatesOrCities($countryId, $('#shipping_state'), $('#shipping_city'), 0, function() {
                    loadCitiesInState($('#shipping_state').find(':selected').val(), $('#shipping_city'), 0);
                });

                $('.shipping-content').css('display', 'block');
                if (window.matchMedia('(min-width: 1200px)').matches) {
                    $('.billing-content').prop('style', 'width: 50%');
                    $('#billing_country_chosen').prop('style', 'width: 70% !important');
                    $('#billing_state_chosen').prop('style', 'width: 70% !important');
                    $('#billing_city_chosen').prop('style', 'width: 70% !important');
                    $('#billing_zipcode').prop('style', 'width: 70% !important');
                }
            }
        });
        $(window).resize(function () {
            var is_same_address = $('#is_same_address').is(':checked');
            if (is_same_address == true) {
                $('.shipping-content').css('display', 'none');
                $('.billing-content').prop('style', 'width: 100%');
                $('#billing_country_chosen').prop('style', 'width: 100% !important');
                $('#billing_state_chosen').prop('style', 'width: 100% !important');
                $('#billing_city_chosen').prop('style', 'width: 100% !important');
                $('#billing_zipcode').prop('style', 'width: 100% !important');
            }
            else {
                $('.shipping-content').css('display', 'block');
                if ($(window).width() > 1200) {
                    $('.billing-content').prop('style', 'width: 50%');
                    $('#billing_country_chosen').prop('style', 'width: 70% !important');
                    $('#billing_state_chosen').prop('style', 'width: 70% !important');
                    $('#billing_city_chosen').prop('style', 'width: 70% !important');
                    $('#billing_zipcode').prop('style', 'width: 70% !important');
                }
                else {
                    $('.billing-content').prop('style', 'width: 100%');
                    $('#billing_country_chosen').prop('style', 'width: 100% !important');
                    $('#billing_state_chosen').prop('style', 'width: 100% !important');
                    $('#billing_city_chosen').prop('style', 'width: 100% !important');
                    $('#billing_zipcode').prop('style', 'width: 100% !important');
                }
            }
        });

        function changeSameAddress() {
            console.log('changeSameAddress');
            $("#shipping_address").val($("#billing_address").val());
            $("#shipping_phone_number").val($("#phone_number").val());
            $("#shipping_zipcode").val($("#billing_zipcode").val());
            $("#shipping_note").val($("#billing_note").val());
            $("#shipping_country").val($("#billing_country").val()); 
            $("#shipping_country").trigger("chosen:updated");
            if($("#billing_state").val() != null) {
                console.log("billing_state not empty");
                loadStatesInCountry($("#billing_country").val(), $('#shipping_state'), $("#billing_state").val());
                loadCitiesInState($("#billing_state").val(), $('#shipping_city'), $("#billing_city").val());
            }
            else {
                console.log("billing_state empty");
                $("#shipping_state").html('');
                $("#shipping_state").trigger("chosen:updated");
                loadCitiesInCountry($("#billing_country").val(), $('#shipping_city'), $("#billing_city").val());
            }
        }
        $("#billing_country").change(function () {
            loadStatesOrCities($(this).find(':selected').val(), $('#billing_state'), $('#billing_city'), 0, function() {
                loadCitiesInState($("#billing_state").find(':selected').val(), $('#billing_city'), 0);
            });
        });
        $("#billing_state").change(function () {
            loadCitiesInState($(this).find(':selected').val(), $('#billing_city'), 0);
        });
        $("#shipping_country").change(function () {
            console.log('change shipping_country');
            loadStatesOrCities($(this).find(':selected').val(), $('#shipping_state'), $('#shipping_city'), 0, function() {
                loadCitiesInState($('#shipping_state').find(':selected').val(), $('#shipping_city'), 0);
            });
        });
        $("#shipping_state").change(function () {
            console.log('change shipping_state');
            loadCitiesInState($(this).find(':selected').val(), $('#shipping_city'), 0);
        });
    </script>
@endsection
