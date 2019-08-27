@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container payments">
            <div class="content">
                <div class="col-sm-12">
                    <div class="info-container">
                        <div class="section" style="padding: 0px">
                            <h2>PAYMENT</h2>
                            <br/>
                            <form action="\payments" id="payment-form" class="text-center" method="POST">
                                {{ csrf_field() }}
                                <div class="col-sm-6">
                                    <div class="paycard">
                                        <div class="title-form" style="padding: 0px">
                                            <div class="col-sm-" style="padding: 0px">
                                                <h4 class="payment">Pay Card Form</h4>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>NAME <span class="special-digit">*</span></label>
                                            <input name="card-name" class="form-control"
                                                   minlength="4" placeholder="Jane Doe"
                                                   required />
                                        </div>
                                        <div class="form-group">
                                            <label>CREDIT OR DEBIT CARD<span class="special-digit">*</span></label>
                                            <input name="card-number" class="form-control" type="tel"
                                                   size="16" minlength="16"
                                                   data-stripe="number"
                                                   placeholder="4242 4242 4242 4242"
                                                   required/>
                                        </div>
                                        <div style="display: flex;">
                                            <label>MM/YY CVC <span class="special-digit">*</span></label>
                                        </div>
                                        <div class="card-time">
                                            <input name="card-expiry-month" type="tel"
                                                   size="2" maxlength="2" minlength="2"
                                                   data-stripe="exp_month" pattern="[0-9]+"
                                                   required>
                                            /
                                            <input name="card-expiry-year" size="2"
                                                   maxlength="2" minlength="2"
                                                   data-stripe="exp_year" pattern="[0-9]+"
                                                   type="tel" required>
                                            <span length="2">&nbsp;</span>
                                            <input name="card-cvc" data-stripe="cvc"
                                                   type="tel" size="3"
                                                   maxlength="3" minlength="3" required>
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" class="help-block card-errors"  role="alert"></div>
                                    </div>
                                    <div class="billing">
                                        <div class="title-form" style="padding: 0px">
                                            <div class="col-sm-" style="padding: 0px">
                                                <h4 class="payment">Billing Information</h4>
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('bill_full_name') ? ' has-error' : '' }}">
                                            <label>FULL NAME <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" id="full_name"
                                                   name="bill_full_name" value="{{ old('bill_full_name') }}"
                                                   minlength="4" placeholder="Jane Doe"
                                                   required >
                                            @if ($errors->has('bill_full_name'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_full_name') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('bill_email') ? ' has-error' : '' }}>
                                            <label>EMAIL <span class="special-digit">*</span></label>
                                            <input class="form-control" type="email" placeholder="" id="bill_email"
                                                   name="bill_email" value="{{ old('bill_email') }}"
                                                   required>
                                            @if ($errors->has('bill_email'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_email') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('bill_tel') ? ' has-error' : '' }}>
                                            <label>TELEPHONE NUMBER <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="bill_tel"
                                                   name="bill_tel" value="{{ old('bill_tel') }}"
                                                   pattern="[0-9]+" minlength="9" maxlength="16"
                                                   required>
                                            @if ($errors->has('bill_tel'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_tel') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('bill_address') ? ' has-error' : '' }}>
                                            <label>ADDRESS <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="bill_address"
                                                   name="bill_address" value="{{ old('bill_address') }}"
                                                   minlength="10"
                                                   required>
                                            @if ($errors->has('bill_address'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_address') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-sm-12 country">
                                            <label class="col-sm-4">COUNTRY <span class="special-digit">*</span></label>
                                            <select class="col-sm-8" name="bill_country" id="bill_country"
                                                    chosen="false"
                                                    required>
                                                <option>Select Country</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12 state">
                                            <label class="col-sm-4">STATE <span class="special-digit">*</span></label>
                                            <select class="col-sm-8" name="bill_state" id="bill_state" chosen="false"
                                                    required>
                                                <option>Select State</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>CITY <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="bill_city"
                                                   name="bill_city" value="{{ old('bill_city') }}"
                                                   minlength="10"
                                                   required>
                                            @if ($errors->has('bill_city'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_city') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('bill_zipcode') ? ' has-error' : '' }}>
                                            <label>ZIP CODE <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="bill_zipcode"
                                                   name="bill_zipcode" value="{{ old('bill_zipcode') }}"
                                                   pattern="[0-9]+" minlength="5"
                                                   required>
                                            @if ($errors->has('bill_zipcode'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_zipcode') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('bill_note') ? ' has-error' : '' }}>
                                            <label>NOTE</label>
                                            <textarea rows="5" class="form-control" type="text" placeholder=""
                                                      id="bill_note"
                                                      name="bill_note" value="{{ old('bill_note') }}"></textarea>
                                            @if ($errors->has('bill_note'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('bill_note') }}</strong>
                                        </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="shipping">
                                        <div class="title-form" style="padding: 0px">
                                            <div class="col-sm-" style="padding: 0px">
                                                <h4 class="payment">Shipping Information</h4>
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('ship_full_name') ? ' has-error' : '' }}">
                                            <label>FULL NAME <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" id="ship_full_name"
                                                   name="ship_full_name" value="{{ old('ship_full_name') }}"
                                                   minlength="4" placeholder="Jane Doe"
                                                   required >
                                            @if ($errors->has('ship_full_name'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_full_name') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('ship_email') ? ' has-error' : '' }}>
                                            <label>EMAIL <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="ship_email"
                                                   name="ship_email" value="{{ old('ship_email') }}"
                                                   required>
                                            @if ($errors->has('ship_email'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_email') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('ship_tel') ? ' has-error' : '' }}>
                                            <label>TELEPHONE NUMBER <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="ship_tel"
                                                   name="ship_tel" value="{{ old('ship_tel') }}"
                                                   pattern="[0-9]+" minlength="9" maxlength="16"
                                                   required>
                                            @if ($errors->has('ship_tel'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_tel') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('ship_address') ? ' has-error' : '' }}>
                                            <label>ADDRESS <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="ship_address"
                                                   name="ship_address" value="{{ old('ship_address') }}"
                                                   minlength="10"
                                                   required>
                                            @if ($errors->has('ship_address'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_address') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-sm-12 country">
                                            <label class="col-sm-4">COUNTRY <span class="special-digit">*</span></label>
                                            <select class="col-sm-8" name="ship_country" id="ship_country"
                                                    chosen="false"
                                                    required>
                                                <option>Select Country</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12 state">
                                            <label class="col-sm-4">STATE <span class="special-digit">*</span></label>
                                            <select class="col-sm-8" name="ship_state" id="ship_state" chosen="false"
                                                    required>
                                                <option>Select State</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>CITY <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="ship_city"
                                                   name="ship_city" value="{{ old('ship_city') }}"
                                                   minlength="10"
                                                   required>
                                            @if ($errors->has('ship_city'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_city') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('ship_zipcode') ? ' has-error' : '' }}>
                                            <label>ZIP CODE <span class="special-digit">*</span></label>
                                            <input class="form-control" type="text" placeholder="" id="ship_zipcode"
                                                   name="ship_zipcode" value="{{ old('ship_zipcode') }}"
                                                   pattern="[0-9]+" minlength="5"
                                                   required>
                                            @if ($errors->has('ship_zipcode'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_zipcode') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group" {{ $errors->has('ship_note') ? ' has-error' : '' }}>
                                            <label>NOTE</label>
                                            <textarea rows="5" class="form-control" type="text" placeholder=""
                                                      id="ship_note"
                                                      name="ship_note" value="{{ old('ship_note') }}"></textarea>
                                            @if ($errors->has('ship_note'))
                                                <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('ship_note') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="pay-submit">--}}
                                    {{--<input type="submit" class="submit form-submit"--}}
                                           {{--value="Pay {{ $currency }} {{ $amount/100 }} "/>--}}
                                {{--</div>--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script src="https://js.stripe.com/v2/"></script>
    {{--<script src="https://js.stripe.com/v3/"></script>--}}
    <script>
        Stripe.setPublishableKey('{{env('STRIPE_KEY')}}');
        var stripeResponseHandler = function (status, response) {
            // Grab the form:
            var form = document.getElementById('payment-form');

            if (response.error) { // Problem!
                // Show the errors on the form:
                $('#card-errors').text(response.error.message);
            } else { // Token was created!
                // Get the token ID:
                var token = response.id;

                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        };

        // Create a token when the form is submitted
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Stripe.card.createToken(form, stripeResponseHandler);
        });
    </script>
    <script language="javascript">
        getCountriesAndStates("bill_country", "bill_state");
        getCountriesAndStates("ship_country", "ship_state");
    </script>
    <script>
        $(".billing").keyup(function () {
            $("input[name*='ship_full_name']").val($("input[name*='bill_full_name']").val());
            $("input[name*='ship_email']").val($("input[name*='bill_email']").val());
            $("input[name*='ship_tel']").val($("input[name*='bill_tel']").val());
            $("input[name*='ship_address']").val($("input[name*='bill_address']").val());
            $("input[name*='ship_city']").val($("input[name*='bill_city']").val());
            $("input[name*='ship_zipcode']").val($("input[name*='bill_zipcode']").val());
            $("textarea[name*='ship_note']").val($("textarea[name*='bill_note']").val());
        });
        $("#bill_country").on('change', function(){
            $("#ship_country").val($("#bill_country").val());
            getStatesFromCountry("ship_country", "ship_state");
        });
        $("#bill_state").on('change', function(){
            $("#ship_state").val($("#bill_state").val());
        });
    </script>

@endsection
