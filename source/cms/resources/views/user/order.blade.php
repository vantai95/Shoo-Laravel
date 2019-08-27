@extends('layouts.user.app')

@section('content')
<div class="container my-order">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2 class="text-center title-order">{{@trans("pages.user.orders.my_orders")}}</h2>      
        </div>
    </div>
    <div class="container new-order table-responsive">
        <div style="overflow-x:auto;" class="dataTables_wrapper">
            <h3 class="title">{{@trans("pages.user.orders.in_progress_order")}}</h3>
            <table class="table table-hover">
                <tr>
                <th width="20%" >{{@trans("pages.user.orders.order_id")}}</th>
                <th width="20%">{{@trans("pages.user.orders.purchased_date")}}</th>
                <th width="20%">{{@trans("pages.user.orders.detail")}}</th>
                <th width="20%">{{@trans("pages.user.orders.price")}}</th>
                <th width="20%">{{@trans("pages.user.orders.status")}}</th>
                </tr>
                @foreach ($userOrders as $userOrder)            
                <tr>
                    <td class="td">{{ $userOrder->order_number }}</td>
                    <td class="td">{{ $userOrder->created_at }}</td>
                    <td class="td td-detail"><a href="{{ url('/order/' . encrypt($userOrder->order_number)) }}">{{@trans("pages.user.orders.view")}}</a></td>
                    <td class="td">
                    {{CommonService::formatPriceBaseCodeExchange($userOrder->total_price,$currencyCode,$exchangeRate)}}
                    </td>
                    @if( $userOrder->status==1)
                    <td class="td">{{@trans("pages.user.orders.ordered")}}</td>
                    @endif
                    @if( $userOrder->status==2)
                    <td class="td">{{@trans("pages.user.orders.measured")}} </td>
                    @endif
                    @if( $userOrder->status==3)
                    <td class="td">{{@trans("pages.user.orders.produced")}} </td>
                    @endif
                    @if( $userOrder->status==4)
                    <td class="td">{{@trans("pages.user.orders.packed")}} </td>
                    @endif
                    @if( $userOrder->status==5)
                    <td class="td">{{@trans("pages.user.orders.delivered")}} </td>
                    @endif                    
                    
                </tr>
                @endforeach
            </table>
            <div class="dataTables_paginate paging_simple_numbers">
                {{$userOrders->appends(['userOrderscompleted' => $userOrderscompleted->currentPage()])->links()}}    
              
            </div>  

                     
        </div>
    </div>
    
    <div class="container completed">
        <div style="overflow-x:auto;" class="dataTables_wrapper">
            <h3 class="title">{{@trans("pages.user.orders.completed_orders")}}</h3>
            <table class="table table-hover">
                <tr>
                    <th width="20%" >{{@trans("pages.user.orders.order_id")}}</th>
                    <th width="20%">{{@trans("pages.user.orders.purchased_date")}}</th>
                    <th width="20%">{{@trans("pages.user.orders.detail")}}</th>
                    <th width="20%">{{@trans("pages.user.orders.price")}}</th>
                    <th width="20%">{{@trans("pages.user.orders.status")}}</th>
                </tr>

                @foreach($userOrderscompleted as $userOrderscompleted1)
                <tr>
                    <td class="td">{{ $userOrderscompleted1->order_number }}</td>
                    <td class="td">{{ $userOrderscompleted1->created_at }}</td><td class="td td-detail"><a href="{{ url('/order/' . encrypt($userOrderscompleted1->order_number)) }}">{{@trans("pages.user.orders.view")}}</a></td>
                    <td class="td">USD {{CommonService::formatPrice($userOrderscompleted1->total_price)}}</td>
                    <td class="td">{{@trans("pages.user.orders.completed")}}</td>
                    
                </tr>
                @endforeach
                
            </table>
          <div class="dataTables_paginate paging_simple_numbers">
                {{$userOrderscompleted->appends(['userOrders' => $userOrders->currentPage()])->links()}}    
              
            </div>  
            
        </div>

    </div>
    
</div>
@endsection

