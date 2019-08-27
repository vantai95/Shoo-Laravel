@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pre Orders [{{$total}}] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Pre Orders</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <a class="btn btn-success pull-right m-b-10" href="{{ url('/admin/pre-orders/export-to-excel') }}">
                    Download Excel
                </a>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Perk</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($preOrders as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->email}}
                            </td>
                            <td>
                                {{ $item->phone }}
                            </td>
                            <td>
                                <span class="badge badge-info">${{$item->price}}</span>
                                {{ $item->package_name }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $preOrders->appends(['q' => Request::get('q')])->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
