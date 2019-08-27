@extends('layouts.user.app')

@section('content')
    <div class="container indiegogo normalize-font-size">
        <div class=" equal align-normal">
            <!-- Fullscreen Video -->
            <div class="col-sm-7">
                <div class="ss-portfolio mg-t75">
                    <div class="video-wrapper">
                        <iframe id="video" src="{{ $video->value }}?loop=1&playlist=x4XRrGW7lxM&showinfo=0&frameborder=0"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Video -->
            <div class="col-sm-5 mg-t75 descriptions">
                <h2 class="title">
                    {{ $title->value }}
                </h2>
                <div class="description">
                    {{ $description->value }}
                </div>
                <div class="ratings">
                    {{ $ratings->value }}
                </div>
                <div class="social">
                    <span class="contact-text">
                        <a class="mail-contact" href="{{ $facebook->value }}" title="ShoeX facebook"><i
                                    class="fa
                        fa-facebook-official"></i></a>
                    </span>
                    <span class="contact-text">
                        <a class="mail-contact" href="{{ $youtube->value }}"
                           title="ShoeX youtube"><i class="fa fa-youtube-square"></i></a>
                    </span>
                </div>
            </div>
        </div>

        <div>
            <div class="col-sm-7">
                <ul class="nav nav-tabs">
                    <li class="active">&nbsp;</li>
                </ul>
                <div class="wrapper">
                    <div class="ss-blog-post kt-blog-post">
                        <div class="mg-t20">
                            {!! $details->value !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="perk">
                {{ @trans("pages.indiegogo.select_a_perk")}} 
                </div>
                @foreach($packages as $key => $package)
                    <div>
                        <div class="widget widget-connect">
                            <div class="img-responsive">
                                <div class="indiegogo-image">
                                    <img class=" width-100" src="{{ $package->imageUrl() }}" />
                                </div>
                            </div>
                            <div class="widget-package">
                                <div class="package-text">
                                    <span class="package-price">${{ $package->price }} USD</span>
                                </div>
                                <div class="package-text">
                                    <span class="package-name">{{ $package->name }}</span>
                                </div>
                                <div class="package-text">
                                    <span class="package-description">{!! $package->description !!}</span>
                                </div>
                                <div class="group-share">
                                    <button onclick="getConversionTag(event, {{ $package->id}}, {{ $package->price }})"
                                            data-toggle="modal" data-target="#popup{{ $package->id }}"
                                            class="kt-button pre-order-btn">                                           
                                        {{ @trans("pages.indiegogo.get_this_perk")}} 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade border-between" id="popup{{ $package->id }}" role="dialog" style="">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content equal flexbox-align-item-start">
                                <div class="modal-header width-100">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-center">{{ @trans("pages.indiegogo.thank_you")}} </h4>
                                </div>
                                <div class="col-sm-5">
                                    <div class="modal-body">
                                        <div class="kt-contact-form">
                                            <h3></h3>
                                            <p>
                                            {{ @trans("pages.indiegogo.we_will_send")}}                                               
                                                <u><a href="{{ $facebook->value }}">Facebook</a></u>
                                            {{ @trans("pages.indiegogo.for_more")}}                                                  
                                            </p>
                                            <form id="preOrderForm{{ $package->id }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $package->id }}">
                                                <div class="form-group">
                                                    <label for="name">{{ @trans("pages.indiegogo.your_name")}}  <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" id="name" autofocus="autofocus"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail">{{ @trans("pages.indiegogo.your_email")}}<span class="text-danger">*</span></label>
                                                    <input type="text" name="email" id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message">{{ @trans("pages.indiegogo.your_phone")}}<span class="text-danger">*</span></label>
                                                    <input type="tel" name="phone" id="phone" class="phone-intl">
                                                </div>
                                                <span class="help-block" style="text-align: center; color: red">
                                                    <strong id="errorMessage{{ $package->id }}"></strong>
                                                </span>
                                                <span class="help-block" style="text-align: center; color: green">
                                                    <strong id="message{{ $package->id }}"></strong>
                                                </span>

                                                <div id="recaptcha{{ $package->id }}" class="recaptchaIndiegogo"></div>
                                                <br>
                                                <div class="form-submit">
                                                    <button type="button" id="button{{ $package->id }}"
                                                            onclick="preOrder(event, {{ $package->id}} , {{ $package->price }})"
                                                            class="kt-button">{{ @trans("pages.indiegogo.get_this_perk")}}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7 background-grey">
                                    <div class="widget-package">
                                        <div class="text-center">{{ @trans("pages.indiegogo.review")}}</div>
                                        <div class="package-text">
                                            <span class="package-price">${{ $package->price }} USD</span>
                                        </div>
                                        <div class="package-text">
                                            <span class="package-name">{{ $package->name }}</span>
                                        </div>
                                        <div class="package-text">
                                            <span class="package-description">{!! $package->description !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('extra_scripts')

    <script type="text/javascript">
        var onloadCallback = function() {
            @foreach($packages as $key => $package)
            grecaptcha.render('recaptcha{{ $package->id }}', {
                'sitekey' : '{{$recaptchaKey}}'
            });
            @endforeach
        };
    </script>

    <script>
        $(".phone-intl").intlTelInput({
            initialCountry: "vn",
            geoIpLookup: function(callback) {
                callback("{{ $iso_code }}");
            },
            utilsScript: "/theme/user/js/utils.js" // just for formatting/placeholders etc
        });
    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
    </script>

    <script>
        function preOrder(event, id, packagePrice) {

            var packet_id = id;
            event.preventDefault();
            var form = $('#preOrderForm' + id);

            $('#preOrderForm' + id + " input[name='phone']").val($('#preOrderForm' + id + " input[name='phone']").intlTelInput("getNumber"));
            var data = form.serialize();

            $.ajax("{{ url('indiegogo/pre-order') }}", {
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function (response) {
                    if (response.status === 200) {
                        $("#message" + id).text(response.messages);
                        $("#errorMessage" + id).text("");
                        displayMessage("Pre Order Status", response.messages);
                        // $("#popup" + packet_id ).modal('toggle');
                        $("#preOrderForm" + packet_id + " #name").val("");
                        $("#preOrderForm" + packet_id + " #email").val("");
                        $("#preOrderForm" + packet_id + " #phone").val("");
                        $("#message" + packet_id).text("");
                        window.location="/donggiay4.0/thank-you";
                    } else {
                        $("#errorMessage" + id).text(response.errors);
                        $("#message" + id).text("");
                        displayError("Pre Order Status", response.errors)
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $("#errorMessage" + id).text(errorThrown);
                    $("#message" + id).text("");
                    displayError(errorThrown, textStatus);
                }
            });

            // Get Conversion Tag
            var conversionTabID = 0;
            switch(packagePrice) {
                case 299:
                    conversionTabID = 1134534;
                    break;
                case 329:
                    conversionTabID = 1134541;
                    break;
                case 349:
                    conversionTabID = 1134537;
                    break;
                case 379:
                    conversionTabID = 1134544;
                    break;
                case 2999:
                    conversionTabID = 1134547;
                    break;

            }
            mmConversionTag(conversionTabID, this, '_self');

        }

        function getConversionTag(packagePrice) {

            var conversionTabID = '';

            switch(packagePrice) {
                case 299:
                    conversionTabID = 1134531;
                    break;
                case 329:
                    conversionTabID = 1134540;
                    break;
                case 349:
                    conversionTabID = 1134536;
                    break;
                case 379:
                    conversionTabID = 1134543;
                    break;
                case 2999:
                    conversionTabID = 1134546;
                    break;
            }
            mmConversionTag(conversionTabID, this, '_self');
        }

        function displayMessage(head, content) {
            $.toast({
                heading: head,
                text: content,
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 4000,
                stack: 6
            })
        }

        function displayError(head, content) {
            $.toast({
                heading: head,
                text: content,
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 4000,
                stack: 6
            })
        }

    </script>


@endsection
