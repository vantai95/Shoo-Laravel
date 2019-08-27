@extends('layouts.admin.app')

@section('content')
    @include('emails.style')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Order Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/orders') }}">Orders</a></li>
                <li class="active">Order Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="m-padding-left-10">
                                <span class="m-text-bold m-text-big" style="font-size: 25px">Order Number: </span>
                                <span class="booking-no"
                                      style="font-size: 25px">{{ $order->order_number}}</span>
                            </td>
                        </tr>
                    </table>
                    <table class="contact" width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="m-text-bold m-padding-left-10" width="100px" style="padding-top: 5px">Full name:
                            </td>
                            <td style="padding-top: 5px" width="35%">{{ $order->full_name }}</td>
                            <td class="m-text-bold" width="130px" style="padding-top: 5px">
                                Status:
                            </td>
                            <td class="m-text-bold m-c-blue m-text-left" style="padding-top: 5px">
                                {{ $order->statusText()}}
                            </td>
                        </tr>
                        <tr>
                            <td class="m-text-bold m-padding-left-10" style="padding-top: 5px"> Phone:</td>
                            <td style="padding-top: 5px">{{ $order->phone }}</td>
                            <td class="m-text-bold" style="padding-top: 5px">
                                Package:
                            </td>
                            <td class="m-text-left" style="padding-top: 5px">
                                {{ $order->package->name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="m-text-bold m-padding-left-10" style="padding-top: 5px; padding-bottom: 5px">
                                Email:
                            </td>
                            <td style="padding-top: 5px; padding-bottom: 5px">{{ $order->email }}</td>
                            <td class="m-text-bold" width="130px" style="padding-top: 5px">
                                Created:
                            </td>
                            <td class="m-text-left" style="padding-top: 5px">
                                {{ $order->created_at}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="white-box">
                <div class="form-horizontal">

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Shoe Type:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ !empty($order->type ) ? $order->type->name : 'None selected'}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Shoe Style:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ !empty($order->style ) ? $order->style->name : 'None selected'}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Toe Shape:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ !empty($order->toeShape ) ? $order->toeShape->name : 'None selected'}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Leather:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ !empty($order->leather ) ? $order->leather->name : 'None selected'}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Outsole Type:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ !empty($order->outsole ) ? $order->outsole->name : 'None selected'}}
                        </div>
                    </div>


                    <div class="m-t-20">
                        <a href="{{ url('/admin/orders') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
