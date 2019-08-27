@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="content">
                <div class="col-sm-12">
                    <div class="cart-form">
                        <div class="section col-sm-12 nopadding ">
                            <h2 style="margin-bottom: 20px">{{@trans("pages.user.order_details.order_details")}}</h2>
                            <div class="payment-header col-xs-12 col-sm-12 col-lg-12">

                                <?php
                                $selected = 'selected';
                                ?>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1 <?php if ($order->status == 1) echo "selected"; ?>">
                                    <div class="payment-circleorder ">
                                        01
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.ordered")}}</div>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1">
                                    <img src="{{url('images/arrow.png')}}"/>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1 <?php if ($order->status == 2) echo "selected"; ?>">
                                    <div class="payment-circleorder">
                                        02
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.measured")}}</div>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1">
                                    <img src="{{url('images/arrow.png')}}"/>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1  <?php if ($order->status == 3) echo "selected"; ?>">
                                    <div class="payment-circleorder">
                                        03
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.produced")}}</div>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1">
                                    <img src="{{url('images/arrow.png')}}"/>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1  <?php if ($order->status == 4) echo "selected"; ?>">
                                    <div class="payment-circleorder">
                                        04
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.package")}}</div>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1">
                                    <img src="{{url('images/arrow.png')}}"/>
                                </div>

                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1  <?php if ($order->status == 5) echo "selected"; ?>">
                                    <div class="payment-circleorder">
                                        05
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.delivered")}}</div>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1">
                                    <img src="{{url('images/arrow.png')}}"/>
                                </div>
                                <div class="payment-process col-xs-6 col-sm-1 col-lg-1  <?php if ($order->status == 6) echo "selected"; ?>">
                                    <div class="payment-circleorder">
                                        06
                                    </div>
                                    <div class="payment-titleorder">{{@trans("pages.user.order_details.completed")}}</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-8 p-0">
                                <div class="shoes-chosen order">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="col-md-6 col-sm-4">{{@trans("pages.user.order_details.shoe")}}</th>
                                            <th class="col-md-3 col-sm-4">{{@trans("pages.user.order_details.unit_price")}}</th>
                                            <th class="col-md-3 col-sm-4">{{@trans("pages.user.order_details.quantity")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($order->orderItem as $key => $selectedShoe)
                                            <tr class="{{$key}} item-info">
                                                <td class="col-md-6 col-sm-6 tablecell">
                                                    <div class="image col-sm-6 col-md-6">
                                                        <a href="{{ $selectedShoe->item_url }}">
                                                            <img src="{{ $selectedShoe->style->imageUrl() }}"/>
                                                        </a>
                                                    </div>
                                                    <div class="content col-sm-6 col-md-6  nopadding ">
                                                        <div class="name">
                                                            <a href="{{ $selectedShoe->item_url }}">
                                                                {{$selectedShoe->style->main_name_en or ''}}
                                                            </a>
                                                        </div>
                                                        <div class="size ">
                                                            {{@trans("pages.shopping_cart.size")}}
                                                            : {{ $selectedShoe->shoeSize->value=="0" ? @trans("pages.shopping_cart.custom_fit") : $selectedShoe->shoeSize->value  }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-md-3 col-sm-4 nopadding">
                                                    <div class="base-price">
                                                        <?php if ($canSeePrice == true) { ?> {{CommonService::formatPriceBaseCodeExchange($selectedShoe->unit_price,$currencyCode,$exchangeRate)}}
                                                        <div class="custom-fit">{{ $selectedShoe->shoeSize->value ==0 ? CommonService::formatPriceBaseCodeExchange(100,$currencyCode,$exchangeRate) : "&nbsp;" }}</div>
                                                    <?php } ?>

                                                </td>
                                                <td class="col-md-6 col-sm-4 quantity-content">
                                                    <div class="quantity">
                                                        <input type="text"
                                                               value="{{ $selectedShoe->quantity }}" readonly
                                                               class="quantity"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="col-sm-5 col-md-5 col-lg-4 nopadding">
                                {{ csrf_field() }}
                                <div class="order-summary order">
                                    <h3>{{@trans("pages.user.order_details.order_summary")}}</h3>
                                    <hr/>
                                    <div class="sub-total">
                                        <h5>{{@trans("pages.user.order_details.sub_total")}}</h5>
                                        <table class="item-detail list">
                                            @foreach ($order->orderItem as $key => $selectedShoe)
                                                <tr class='item{{$key}}'>
                                                    <td class='label'>{{$selectedShoe->style->main_name_en or ''}}</td>
                                                    <?php if ($canSeePrice == true) { ?>
                                                    <td class='price'>
                                                        {{CommonService::formatPriceBaseCodeExchange($selectedShoe->total_price,$currencyCode,$exchangeRate)}}
                                                    </td><?php } ?>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <table class="item-detail">
                                            <tr class="shipping-fee">
                                                <td class="label">{{@trans("pages.shopping_cart.shipping_fee")}}</td>
                                                <?php if ($canSeePrice == true) { ?>
                                                <td class="price">
                                                    {{CommonService::formatPriceBaseCodeExchange($order->shipping_fee,$currencyCode,$exchangeRate)}}
                                                </td><?php } ?>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="total">
                                        <h4 class="pull-left col-xs-5 nopadding">{{@trans("pages.shopping_cart.total")}}</h4>
                                        <?php if ($canSeePrice == true) { ?>
                                        <div class="price col-xs-7">
                                            {{CommonService::formatPriceBaseCodeExchange($order->total,$currencyCode,$exchangeRate)}}
                                        </div><?php } ?>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
@endsection

