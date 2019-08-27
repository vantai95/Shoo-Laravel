@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Orders [{{$total}}] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Orders</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/orders/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Order
                        </a>
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Email</th>
                        <th>Price</th>
                        <th>Full Name</th>
                        <th>Package</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $item)
                        <tr>
                            <td>
                                {{ $item->order_number }}
                            </td>
                            <td>
                                {{ $item->email}}
                            </td>
                            <td>
                                ${{ $item->total_price }}
                            </td>
                            <td>
                                {{ $item->full_name }}
                            </td>
                            <td>
                                {{ $item->package->name or '' }}
                            </td>
                            <td class="text-center">
                                @if ( $item->status == \App\Models\Order::STATUS['MEASUREMENT UPLOADED'])
                                    <a data-toggle="modal" data-target="#popup{{ $item->id }}" href="#"
                                       onclick="getMeasurement(event, {{ $item->id }})">
                                        {{ $item->statusText() }}
                                    </a>
                                @else
                                    {{ $item->statusText() }}
                                @endif
                            </td>
                            <td class="text-center text-nowrap">
                                <a target="_blank" href="{{ url('/order/' . encrypt($item->order_number)) }}"
                                   data-toggle="tooltip"
                                   title="Go to order" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/orders/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $orders->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>

    {{--Modal Measurement--}}
    <div class="modal fade border-between" id="popup" role="dialog" style="overflow: auto;">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content equal flexbox-align-item-start">
                <div class="modal-header width-100">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">MEASUREMENT</h4>
                </div>
                <div>
                    <div class="modal-body modal-measurement" style="">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script>
        function getMeasurement(event, id) {
            $.ajax("{{ url('admin/measurements/get-measurement-info-by-order-id') }}", {
                type: 'GET',
                data: {id: id},
                success: function (response){
                    $('.modal-body').html(response);
                    $('#popup').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        };
    </script>
@endsection