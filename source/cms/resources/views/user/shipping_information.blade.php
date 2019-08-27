`@extends('layouts.user.app')

@section('content')
<div class="main-wrapper check-out shipping-information-page">
    <div class="container">
        <div class="content">
            <h2 class='title'>{{@trans("pages.check_out.shipping_information")}}</h2>
            <form action="\user\change-shipping-info" id="shipping-form" method="POST">
                {{ csrf_field() }}
                <div class="col-sm-12 col-xs-12 col-lg-12">                  
                    <!-- begin shipping information-->                   
                    <div class="row content-box shipping-form">
                       
                        <div class="row info-input {{ $errors->has('shipping_phone_number') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-xs-12 col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.telephone_number")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <input class="col-sm-12 col-xs-12 col-lg-8 input-check-out" type="text" id="shipping_phone_number" pattern="[0-9]+"
                                        name="shipping_phone_number" value="{{$userShipping->phone_number or ''}}" required >

                                @if ($errors->has('shipping_phone_number'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('shipping_phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="row info-input {{ $errors->has('shipping_address') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.address")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <input class="col-sm-12 col-xs-12 col-lg-8 input-check-out" type="text" id="shipping_address"
                                        name="shipping_address"
                                        value="{{$userShipping->address or ''}}" required >
                            
                                @if ($errors->has('shipping_address'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('shipping_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="row info-input {{ $errors->has('shipping_country') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.country")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <div class="dropdown-custom">
                                        <select class="col-sm-12 col-xs-12 col-lg-8"  id="shipping_country" name="shipping_country">
                                            @foreach ($countries as $key => $country)
                                                @php
                                                    $selected = '';
                                                    
                                                    if(isset($userShipping->country_id)){
                                                        if($userShipping->country_id == $country->id){
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
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.state")}}<span class="special-digit">&nbsp;</span></label></div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <select class="col-sm-12 col-xs-12 col-lg-8" id="shipping_state" name="shipping_state">
                                    @foreach ($states as $key => $state)
                                        @php
                                            $selected = '';
                                            if(isset($userShipping->state_id)){  
                                                if($userShipping->state_id == $state->id) {
                                                    $selected = 'selected';
                                                }
                                            }
                                        @endphp
                                        <option {{$selected}} value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.city")}}<span class="special-digit">*</span></label></div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <select class="col-sm-12 col-xs-12 col-lg-8" id="shipping_city" name="shipping_city">
                                    @foreach ($cities as $key => $city)
                                    @php
                                            $selected = '';
                                            if(isset($userShiping->city_id)){
                                                if($userShiping->city_id == $city->id){
                                                    $selected = 'selected';
                                                }
                                            }
                                    @endphp
                                    <option {{$selected}} value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row info-input {{ $errors->has('shipping_zipcode') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.zip_code")}} <span
                                            class="special-digit"></span></label>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <input class="input-check-out col-sm-12 col-xs-12 col-lg-8" type="text" id="shipping_zipcode"
                                        name="shipping_zipcode" pattern="[0-9]+"
                                        value="{{$userShipping->zipcode or ''}}" required >
                                @if ($errors->has('shipping_zipcode'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('shipping_zipcode') }}</strong>
                                </span>
                                @endif
                            </div>
                           
                        </div>

                        <div class="row info-input  {{ $errors->has('shipping_note') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2 title-lb"><label>{{@trans("pages.check_out.note")}}<span class="special-digit">&nbsp;</span></label></div>
                            <div class="col-sm-12 col-xs-12 col-lg-8">
                                <textarea class="input-check-out  col-sm-12 col-xs-12 col-lg-8" type="text" id="shipping_note"
                                        name="shipping_note">{{$userShipping->note or ''}} </textarea>
                                @if ($errors->has('shipping_note'))
                                    <span class="col-sm-12 help-block" style="text-align: left">
                                        <strong>{{ $errors->first('shipping_note') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12  col-lg-2 col-lg-offset-2"></div>
                            <div class="col-sm-12 col-xs-12 col-lg-8 btn-shipping">
                                                               
                                <input class="btn btn-default kt-button" id="btn-cancel" type="button" onClick="window.location.reload()" value='{{@trans("pages.user.cancel")}}'>
                                <input class="btn btn-default kt-button" id="btn-save" type="submit" value='{{@trans("pages.user.save")}}'> 
                            </div>
                        </div>
                    </div>

                    <!-- end shipping information-->
                </div>

              
            </form>
        </div>
    </div>
</div>
@endsection

@section('extra_scripts')
    <script>
        // Init Page
        $(document).ready(function () {
            // Load States and Cities data for Shipping
            var userShipping = {!! isset($userShipping) ? $userShipping : '""' !!};
            // console.log(userShipping);
            
            if(userShipping) {
                // console.log('userShipping is existed');
                var userShippingCountry = userShipping['country_id'];
                loadCountries($('#shipping_country'), userShippingCountry);
                var userShippingState = userShipping['state_id'];
                var userShippingCity = userShipping['city_id'];               
                if(userShippingState != '' && userShippingState != null) {
                    loadStatesInCountry(userShippingCountry, $('#shipping_state'), userShippingState);
                    loadCitiesInState(userShippingState, $('#shipping_city'), userShippingCity);
                }
                else {
                    loadCitiesInCountry(userShippingCountry, $('#shipping_city'), userShippingCity);
                }
            }
            else {
                // console.log('userShipping is not existed');
                $countryId = 1;
                $selectedIndex = 0;
                loadStatesOrCities($countryId, $('#shipping_state'), $('#shipping_city'), $selectedIndex, function() {});
            }
            // disable btn cancel
            $("#btn-cancel").prop("disabled", true);
        });
        // Trigger elements
        $("#shipping_country").change(function () {
            loadStatesOrCities($(this).find(':selected').val(), $('#shipping_state'), $('#shipping_city'), 0, function() {
                loadCitiesInState($('#shipping_state').find(':selected').val(), $('#shipping_city'), 0);
            });
        });
        $("#shipping_state").change(function () {
            loadCitiesInState($(this).find(':selected').val(), $('#shipping_city'), 0);
        });
        $("#shipping-form").on('change keyup', function() {
            var userShippingUpdate = {
                'phone_number': $('#shipping_phone_number').val(),
                'address': $('#shipping_address').val(),
                'country_id': parseInt($('#shipping_country').children('option:selected').val()),
                'state_id': parseInt($('#shipping_state').children('option:selected').val()),
                'city_id': parseInt($('#shipping_city').children('option:selected').val()),
                'zipcode': $('#shipping_zipcode').val(),
                'note': $('#shipping_note').val() == "" || $('#shipping_note').val() == " " ? null : $('#shipping_note').val()
            };
            // check when data on change then enable btn-cancel
            var userShipping =  {!! $userShipping !!};
            if(userShippingUpdate.phone_number == userShipping.phone_number &&
                userShippingUpdate.address == userShipping.address &&
                userShippingUpdate.country_id == userShipping.country_id &&
                userShippingUpdate.state_id == userShipping.state_id &&
                userShippingUpdate.city_id == userShipping.city_id &&
                userShippingUpdate.zipcode == userShipping.zipcode &&
                userShippingUpdate.note == userShipping.note)
                $("#btn-cancel").prop("disabled", true);
            else
                $("#btn-cancel").prop("disabled", false);
        })
    </script>
@endsection
