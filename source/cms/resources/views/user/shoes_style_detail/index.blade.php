@extends('layouts.user.app')

@section('content')

    {{--SHOES STYLE DETAIL--}}
    <div class="main-wrapper shoe-details" style="padding-top: 10px">
        <div class="container">
            <div class="main-container ">
                <div class="kt-single-product">
                    <div class="row product-main-info catalog-product-view ">
                        <div class="product-wrap product-view product-shop-wrap">
                            <!-- product images -->
                            <div class="col-sm-6">
                                <div class="img-container img-responsive">
                                    <div class="item img-wrapper">
                                        <img src="{{$shoesStyleDetail->imageUrl()}}"
                                             alt="{{$shoesStyleDetail->main_name}}" itemprop="image">
                                    </div>
                                </div>
                                <div class="img-small">
                                    <div class="owl-carousel" chosen="1" data-items="4"
                                         data-dots="true"
                                    >
                                        @foreach ( $shoesStyleDetail->images() as $image)
                                            <div class="item">
                                                <img src="{{ $image }}"
                                                     alt="{{$shoesStyleDetail->main_name}}" itemprop="image">
                                                <div class="img-filter"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 product-item-center">
                                <div>
                                    <div class="text-divider title">
                                        <h1 class="align-left no-margin h h1"
                                            itemprop="name">{{$shoesStyleDetail->main_name}}</h1>
                                        <div>
                                            <div>
                                                @if(empty($shoesStyleDetail->discount_price))
                                                    <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">
                                                             {{CommonService::formatPriceBaseCodeExchange($shoesStyleDetail->price,$currencyCode,"$exchangeRate")}}
                                                        </span>
                                                    </span>
                                                    </div>
                                                @else
                                                    <div class="price-box">
                                                        <div class="regular-price save-off">
                                                        <span class="">
                                                            <h4>{{CommonService::formatPriceBaseCodeExchange($shoesStyleDetail->price,$currencyCode,"$exchangeRate")}}</h4>
                                                        </span>
                                                        </div>
                                                        <div class="regular-price">
                                                        <span class="price">
                                                            <h3>{{CommonService::formatPriceBaseCodeExchange($shoesStyleDetail->discount_price,$currencyCode,"$exchangeRate")}}</h3>
                                                        </span>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-divider text-divider-last">
                                        <div class="size "><div class="title"><b class="label">{{@trans("pages.shoes_style_detail.euro_shoe_size")}}</b></div>
                                            <span id="size-selected"></span>
                                            <span class="price"></span>
                                            <div class="size-select">
                                                <div class="list">
                                                    <ul>
                                                        @foreach($shoeSizes as $shoeSize)
                                                        @php 
                                                          $size_selected = '';
                                                          $size_custom_fit = '';                                                        
                                                          if($shoeSize->value == $sizeDefaultValue){
                                                            $size_selected = 'shoe-size-selected';
                                                          } 
                                                          if($shoeSize->value==0){
                                                            $size_custom_fit = 'shoe-size-custom-fit'; 
                                                          }                                                          
                                                        @endphp
                                                        <li>
                                                            <a class="item {{$size_selected}} {{ $size_custom_fit}}" size-id="{{$shoeSize->id}}">{{ $shoeSize->value == '0' ? @trans("pages.shoes_style_detail.custom_fit")  : $shoeSize->value }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quantity ">
                                            <b class="label">{{@trans("pages.shoes_style_detail.quantity")}}</b>
                                            <div class="input-spinner quantity">
                                                <input type="text" id="quantity"  value="1" size="2" min="1" max="10" step="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" />
                                                 <div class="glificon">
                                                    <div id="tang">
                                                        
                                                        <i class="fa fa-sort-asc" aria-hidden="true" onclick="inputNumberIncr()"></i>
                                                    </div>
                                                    <div id="giam" >
                                                        <i class="fa fa-sort-asc icon" aria-hidden="true" onclick="inputNumberDerc()"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-divider text-divider-last btn-list">
                                        <a href="#" onclick="addToOrderCart(false)" id="btn-add-to-card" class="btn-cart kt-button">
                                            <span>{{@trans("pages.shoes_style_detail.add_to_card")}}</span>
                                        </a>
                                        <a href="#" onclick="addToOrderCart(true)" id="btn-gift" class="btn-cart kt-button">
                                            <span>{{@trans("pages.shoes_style_detail.gift_instantly")}}</span>
                                        </a>
                                    </div>
                                    <div class="text-divider" style="margin-top: 50px;"></div>
                                    <div class="text-divider text-divider-last">
                                        <div class="prod-description-desc">
                                            <div>{!! $shoesStyleDetail->description !!}</div>
                                        </div>
                                    </div>
                                    <div class="text-divider text-divider-last btn-indiegogo">
                                        <a href="{{$indiegogoLink->config_value}}" class="btn-cart kt-button" target="_blank">
                                            <span>{{@trans("pages.shoes_style_detail.get_it_on_indiegogo")}}</span>
                                        </a>
                                    </div>
                                    <div class="text-divider text-divider-last description">
                                        {!! $shoesStyleDetail->sub_description!!}
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: -10px">
                            <div id="further-details" class="col-sm-12 description back-white clearfix">
                               
                                <div class="content align-center">
                                    <div class="extra_title">
                                        <p><br></p><h2><span><font>{{@trans("pages.shoes_style_detail.a_modern_masterpiece")}} <i class="fa fa-angle-right"></i></font></span></h2>
                                    </div>
                                    <div class="extra_content">
                                    {!! $shoesStyleDetail->extra !!}
                                    </div>
                                    {{--<h2 id="details_heading"--}}
                                    {{--class="margin-bal relative lowercase font-sml supergroteska_med h">A Modern Masterpiece</h2>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 24px;"/>--}}

                                    {{--<div class="clearfix relative">--}}
                                    {{--<span>--}}
                                    {{--<h3 class="h3-title">Burgundy utah & delapré</h3>--}}
                                    {{--</span>--}}
                                    {{--<span class="description">--}}
                                    {{--<p>{!!$shoesStyleDetail->sub_description!!}</p>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 24px;"/>--}}
                                    {{--<div class="clearfix relative">--}}
                                    {{--<span class="description">--}}
                                    {{--<span>--}}
                                    {{--<h3 class="h3-title">Dainite rubber sole</h3>--}}
                                    {{--</span>--}}
                                    {{--<p> {!! $shoesStyleDetail->description !!} </p>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 0px;"/>--}}
                                </div>
                            </div>
                        </div>

                        <div class="kt-product-slide1" style="margin-top: 30px">
                            <h2 class="title-slide mg-related-text text-center"
                                style="margin-top:35px; margin-bottom: 50px">{{@trans("pages.shoes_style_detail.related_product")}}</h2>
                            <div class="products owl-carousel nav-style-1" data-margin="30" data-items="4"
                                 style="margin-bottom: 30px"
                                 data-dots="false"
                                 data-nav="true"
                                 data-responsive='{"0":{"items":1},"600":{"items":2},"992":{"items":3},"1200":{"items":4}}'>
                                @foreach($relatedProduct as $item)
                                    <div class="product kt-blog-post">
                                        <article class="blog-item">
                                            <div class="img-container-related img-responsive">
                                                <div class="item img-wrapper">
                                                    <a href="{{ url('shoes-style-detail', ['shoes_type_slug' => $shoes_type_slug, 'shoes_style_slug' => \Illuminate\Support\Str::lower($item->slug) ]) }}">
                                                        <img width="600px" src="{{ asset($item->imageUrl()) }}">
                                                    </a>
                                                </div>
                                            </div>
                                            {{--<a href="{{ url('shoes-style-detail', \Illuminate\Support\Str::lower($item->name)) }}"><img--}}
                                            {{--alt="" src="{{ $item->imageUrl() }}"></a>--}}
                                            {{--<div class="product-button">--}}
                                            {{--<a href="{{ url('shoes-style-detail', \Illuminate\Support\Str::lower($item->name)) }}">Read--}}
                                            {{--more <span class="pe-icon pe-7s-right-arrow"></span></a>--}}
                                            {{--</div>--}}
                                            <div class="info-product post-info">
                                                <h3 class="title-post text-center"><b>
                                                        <a href="{{ url('shoes-style-detail',
                                                        ['shoes_type_slug' => $shoes_type_slug, 'shoes_style_slug' => \Illuminate\Support\Str::lower($item->slug) ]) }}">{{ $item->main_name }}</a>
                                                    </b>
                                                </h3>
                                            </div>
                                            <h3 class="pf-title sub-title-post text-center">
                                                {{ $item->sub_name }}
                                            </h3>

                                        </article>

                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{--END SHOES STYLE DETAIL--}}
@endsection

@section('extra_scripts')
    <script>
        $(document).ready(function () {
            localStorage.setItem('added_to_order_cart', 0);
            var count = $("div.owl-stage").children().length;
            $("div.owl-controls").addClass('hidden-lg hidden-md');
           // $(".product-wrap .size .size-select .list ul").children('li').last().css(
           //     {'border': '1px solid'}); // set Custom-fit button attribute
           // $(".product-wrap .size .size-select .list ul li").children('a').last().css(
            //    {'background-color': '#424242', 'color': 'white', 'width': '120px'}); // set Custom-fit button attribute
            $(".img-small .img-filter").first().css({'border': '2px solid #ddbe86', 'background-color': 'rgba(221, 190, 134, 0.1)'});// select first image on slider
            $(".img-container .img-wrapper img").attr("src", $(".img-small .item img").first()[0].src); // set large image
            //$("#size-selected").text($(".product-wrap .size .size-select .list ul li:first-child a").text());// set size default
           // $('.size .price').text('(' + {{ $shoesStyleDetail->price }} + ' USD )'); // set price default

           //  localStorage.setItem('shoe_size', -1);
            localStorage.setItem('shoe_size', 41);
            $('.size-select ul li a').on('click', function() {
                if($.isNumeric($(this).text()))
                    localStorage.setItem('shoe_size', $(this).text());
                else localStorage.setItem('shoe_size', 0); // Custom-fit
                // console.log( JSON.parse(localStorage.getItem("shoe_size")) );
            });
        });
    </script>
    <script>
        $(".img-small .img-filter").on("click", function (e) {
            $(".img-small .img-filter").css({'border': 'none', 'background-color': 'transparent'}) // reset all border and background of image
            $(e.target).closest(".img-filter").css({'border': '2px solid #ddbe86', 'background-color': 'rgba(221, 190, 134, 0.1)'}); // border and background of image which is clicked
            $(".img-container .img-wrapper img").attr("src", $(e.target).closest(".img-filter").parent().find('img')[0].src); // change large image
        });
        $(".extra_title").on("click", function (e) {    
            var style =  $(".extra_content").css('display');
            if(style=='block'){
                $(".extra_content").hide("slow");
            }else{
                $(".extra_content").show("slow");   
            }             
        });
        $('#quantity').on('input', function () {
    
            var value = $(this).val();            
            if ((value !== '') && (value.indexOf('.') === -1)) {                
                $(this).val(Math.max(Math.min(value, 10), 1));
            }
            var value1 = $(this).val().replace(/[^0-9\.]+/g, '');
            if (value1 < 1) 
                $(this).val(1);
        }); 
    </script>
    <script>
        $(".product-wrap .size .size-select .list ul").on("click", function (e) { // change shoe size
            console.log($(e.target).closest("a").html());
            console.log("------------------------");
            var quantity = $(".product-wrap .quantity input").val();
            var size = $(e.target).closest("a").text();

            var size_id = $(e.target).closest("a").attr('size-id');
            if(size_id == 1){
                $("#size-selected").text('{{@trans("pages.shoes_style_detail.custom_fit")}}');
                $('.size .price').text('({{CommonService::formatPriceBaseCodeExchange(100,$currencyCode,$exchangeRate)}})')
                $("#item_price_custom_fit").val(100);
                $("#item_size_name").val('{{@trans("pages.shoes_style_detail.custom_fit")}}');
            }else{
                $("#size-selected").text(size);
                $('.size .price').text('');
                $("#item_price_custom_fit").val('');
                $("#item_size_name").val(size);
            }
            $("#item_size").val($(e.target).closest("a").attr("size-id"));
            
            $('.item').removeClass('shoe-size-selected');
            $(e.target).closest("a").addClass('shoe-size-selected');
        });
    </script>
    <script>
        function inputNumberIncr() {
            inputNumberIncrease( $('#quantity'), 1, 10);
        }
        function inputNumberDerc(){
            inputNumberDecrease( $('#quantity'), 1, 1);
        }
        function addToOrderCart(isGift) {
            if (localStorage.getItem('added_to_order_cart') != 1) {
                localStorage.setItem('added_to_order_cart', 1);
                var orderId = Math.floor(1000000 + Math.random() * 9000000).toString();
                var data = {
                    'selectedShoe': {
                        'type': "{{ $shoes_type_slug }}",
                        'order_id': orderId,
                        'id': "{{ $shoesStyleDetail->id }}",
                        'size': JSON.parse(localStorage.getItem("shoe_size")),
                        'quantity': $(".product-wrap .quantity input").val(),
                        'is_gift': isGift
                    }
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax("{{ url('shopping/add-to-cart') }}", {
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    success: function (response) {
                        if (response.status === 200) {
                            // save Item Quantity into Client cart_items_quantity
                            console.log('isGift: ' + isGift);
                            if (localStorage.getItem('cart_items_quantity') != null) {
                                var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
                                if (isGift === true) {
                                    cartItemsQuantity.items = [];
                                }
                            }
                            else {
                                var cartItemsQuantity = {};
                                cartItemsQuantity.items = [];
                            }
                            cartItemsQuantity.isGift = isGift;
                            cartItemsQuantity.items.push({
                                'order_id': orderId,
                                'id': "{{ $shoesStyleDetail->id }}",
                                'size': JSON.parse(localStorage.getItem("shoe_size")),
                                'quantity': $(".product-wrap .quantity input").val()
                            });
                            localStorage.setItem('cart_items_quantity', JSON.stringify(cartItemsQuantity));
                            // console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
                            // Goto next page
                            if(isGift)
                                window.location="/shopping/cart";
                            else
                                window.location="/shopping/user-cart";
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        localStorage.setItem('added_to_order_cart', 0);
                        if (jqXHR.status && jqXHR.status == 400) {
                            alert(jqXHR.responseText);
                        } else {
                            alert("{{@trans("pages.shoes_style_detail.network_error")}}");
                        }
                    }
                });
            }
        }
    </script>
@endsection