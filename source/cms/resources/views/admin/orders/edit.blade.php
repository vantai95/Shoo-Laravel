@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Order</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/orders') }}">Orders</a></li>
                <li class="active">Edit Order</li>
            </ol>
        </div>
    </div>
    <div class="row order-detail white-box">
        <div class="col-sm-12 col-lg-6">
                <!-- begin billing information-->
                    <div class="title">{{@trans("pages.check_out.billing_information")}}</div>
                    <div class="row info-input">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.address")}}</label>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                                {{  $order->orderBilling->address or '' }}
                        </div>
                    </div>
                    <div class="row info-input">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.country")}}</label>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                        {{$order->orderBilling->country->name or ''}}
                        </div>
                    </div>
                    <div class="row info-input ">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.state")}}</label></div>
                        <div class="col-sm-12 col-lg-8">                            
                        {{$order->orderBilling->state->name or ''}}
                        </div>
                    </div>
                    <div class="row info-input">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.city")}}</label></div>
                        <div class="col-sm-12 col-lg-8">                                                  
                        {{$order->orderBilling->city->name or ''}}
                        </div>
                    </div>
                    <div class="row info-input">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.zip_code")}}</label>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                        {{  $order->orderBilling->zipcode or '' }}
                        </div>
                    </div>
                    <div class="row info-input">
                        <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.note")}}</label></div>
                        <div class="col-sm-12 col-lg-8">
                        {{  $order->orderBilling->note or '' }}
                        </div>
                    </div>                      
                <!-- end payment information-->
                <!-- begin shipping information-->
                    @php
                        $shipping_country_id = isset($order->orderShipping->country_id)?$order->orderShipping->country_id:null;
                        $shipping_state_id = isset($order->orderShipping->state_id)?$order->orderShipping->state_id:null;
                        $shipping_city_id = isset($order->orderShipping->city_id)?$order->orderShipping->city_id:null;
                        $shipping_full_name = isset($order->orderShipping->user)?$order->orderShipping->user->full_name:'';
                        $shipping_email = isset($order->orderShipping->user)?$order->orderShipping->user->email:'';
                        $shipping_phone_number = isset($order->orderShipping->phone_number)?$order->orderShipping->phone_number:'';
                        $shipping_address = isset($order->orderShipping->address)?$order->orderShipping->address:'';
                        $shipping_zipcode = isset($order->orderShipping->zipcode)?$order->orderShipping->zipcode:'';
                        $shipping_note = isset($order->orderShipping->note)?$order->orderShipping->note:'';
                    @endphp
                    
                        <div class="title">{{@trans("pages.check_out.shipping_information")}}</div>
                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.full_name")}}</label></div>
                            <div class="col-sm-12 col-lg-8">
                            {{$order->orderShipping->user->full_name or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.email")}}</label>
                            </div>
                            <div class="col-sm-12 col-lg-8">
                                {{$order->orderShipping->user->email or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.telephone_number")}}</label>
                            </div>
                            <div class="col-sm-12 col-lg-8">
                                {{$order->orderShipping->phone_number or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.address")}}</label>
                            </div>
                            <div class="col-sm-12 col-lg-8">                                         
                                {{$order->orderShipping->address or ''}}
                            </div>
                        </div>

                        <div class="row info-input {{ $errors->has('shipping_country') ? ' has-error' : '' }}">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.country")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-sm-12 col-lg-8">
                            {{$order->orderShipping->country->name or ''}}
                            </div>
                        </div>

                        <div class="row info-input ">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.state")}}</label></div>
                            <div class="col-sm-12 col-lg-8">                                        
                            {{$order->orderShipping->state->name or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.city")}}</label></div>
                            <div class="col-sm-12 col-lg-8">                                                                            
                            {{$order->orderShipping->city->name or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.zip_code")}}</label>
                            </div>
                            <div class="col-sm-12 col-lg-8">                                                                                                              
                                {{$order->orderShipping->zip_code or ''}}
                            </div>
                        </div>

                        <div class="row info-input">
                            <div class="col-sm-12 col-lg-4"><label>{{@trans("pages.check_out.note")}}</label></div>
                            <div class="col-sm-12 col-lg-8"> {{$order->orderShipping->note or ''}}</div>
                        </div>
                    <!-- end shipping information-->
                    
        </div>   
        <div class="col-sm-12 col-lg-6"> 
            <div class="title">Order Status</div>
            <div class="col-sm-12">
                <div class="row">
                     <form action="\admin\orders\change-status" id="change-form" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$order->id}}" name="id" id="id" />
                    <select id="status" name="status" chosen="false">
                        @foreach (\App\Models\Order::STATUS_TEXT as $key => $value)
                            @php
                                $selected = '';
                                if(\App\Models\Order::STATUS[$key] == $order->status ){                                   
                                        $selected = 'selected';
                                }
                            @endphp
                            <option {{$selected}} value="{{\App\Models\Order::STATUS[$key]}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <input class="btn btn-default kt-button" id="btn-save" type="submit"
                            value="Change"/>
                    </form>            
                </div>
            </div>

            <div class="title">{{@trans("pages.check_out.order_summary")}}</div>
            <div class="col-sm-12">
                <div class="row title-sub-total">
                    <div class="col-xs-6 col-sm-6"><label>{{@trans("pages.check_out.sub_total")}}</label></div>
                </div>
            </div>
            <div class="col-sm-12">
                @foreach ($order->orderItem as $key => $orderItem)
                    <div class="row check-out-item">
                        <div class="col-xs-8 col-sm-8">{{$orderItem->style->main_name}}</div>
                        <div class="col-xs-4 col-sm-3">USD {{CommonService::formatPrice($orderItem->total_price ) }}</div>
                    </div>    
                @endforeach                        
                    <div class="row check-out-item">
                        <div class="col-xs-11 shipping-fee"></div>
                    </div>                          
                    <div class="row check-out-item ">
                        <div class="col-xs-8 col-sm-8">{{@trans("pages.check_out.shipping_fee")}}</div>
                        <div class="col-xs-4 col-sm-3">USD {{CommonService::formatPrice($order->shipping_fee) }}</div>
                    </div>
            </div>
            <div class="col-sm-12">
                <div class="row title-total check-out-item">
                    <div class="col-xs-8 col-sm-8"><label>{{@trans("pages.check_out.total")}}</label></div>
                    <div class="col-xs-4 col-sm-3 value-total">USD {{CommonService::formatPrice($order->total) }}</div>                         
                   
                </div>
            </div>
    
        </div>      
    </div>
@endsection
