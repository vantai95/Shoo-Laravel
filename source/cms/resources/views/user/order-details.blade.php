@extends('layouts.user.app')
@section('content')

    <div class="container top-oder">
        <div class="row order-detai">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 detail">
                <h3 class="text-center">{{@trans("pages.user.orders-detail.order_detail")}}</h3>
                <h4>{{@trans("pages.user.orders-detail.order_number")}} : {{$order_id}}</h4>
                <h4>{{@trans("pages.user.orders-detail.order_status")}} :4</h4>

            </div>
        </div>


    </div>
    <div class="container content1">

        <div class="row">
            <div class=" col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        01
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        02
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        03
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        04
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        05
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="text-center">
                    <div class="rounded-corners">
                        06
                    </div>
                    <span class="b">Ordered</span>
                    <hr class="hr">
                </div>


            </div>
        </div>
    </div>
    <div class="container  ">
        <div class="content">
            <div class="col-sm-12 ">
                <div class="cart-form bot-oder">
                    <div class="section col-sm-12 ">

                        <div class="col-sm-8 p-0">
                            <div class="shoes-chosen">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th class="col-md-6">{{@trans("pages.user.orders-detail.shoe")}}</th>
                                        <th class="col-md-3">{{@trans("pages.user.orders-detail.unit_price")}}</th>
                                        <th class="col-md-3">{{@trans("pages.user.orders-detail.quantity")}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="">
                                        <td class="col-md-6">
                                            <div class="image col-md-6">
                                                <a href="#">
                                                    <img src=""/>
                                                </a>
                                            </div>
                                            <div class="content col-md-6">
                                                <div class="name">
                                                    <a href="#">

                                                    </a>
                                                </div>
                                                <div class="size">
                                                    {{@trans("pages.user.orders-detail.size")}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-md-3">
                                            <div class="base-price">
                                                USD
                                            </div>
                                            <div class="custom-fit">111</div>
                                        </td>
                                        <td class="col-md-6">
                                            <div class="quantity">
                                                <div><input type="number"
                                                            value="" size="2"
                                                            min="1" max="10"
                                                            onchange="" class="quantity"/></div>
                                                <div>
                                                    <a href="javascript:void(0);" data-toggle="tooltip"
                                                       title=""
                                                       data-animation="false"
                                                       onclick="">
                                                        <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                            {{ csrf_field() }}
                            <div class="col-sm-4 order-summary">
                                <h3>{{@trans("pages.user.orders-detail.order_summary")}}</h3>
                                <div class="sub-total">
                                    <h4>{{@trans("pages.user.orders-detail.sub_total")}}</h4>
                                    <div class="list1">
                                        <div class="label">

                                            {{@trans("pages.user.orders-detail.shipping_fee")}}
                                        </div>
                                        <div class="price pull-right">
                                            USD
                                        </div>
                                    </div>

                                    <div class="list">
                                        <div class="label">

                                            {{@trans("pages.user.orders-detail.shipping_fee")}}
                                        </div>
                                        <div class="price pull-right">
                                            USD
                                        </div>
                                    </div>

                                </div>

                                <div class="shipping-fee">
                                    <div class="list"></div>
                                    <div class="label">
                                        {{@trans("pages.user.orders-detail.shipping_fee")}}
                                    </div>
                                    <div class="price pull-right">
                                        USD
                                    </div>
                                </div>

                                <div class="total">
                                    <h4 class="pull-left">{{@trans("pages.user.orders-detail.total")}}</h4>

                                    <div class="price pull-right">
                                        USD
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!--  -->
@endsection