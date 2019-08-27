@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Currency Settings</h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Currencies</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <div class="dataTables_wrapper no-footer">
                            <div class="dataTables_length">
                            <label>
                                <a href="{{ url('/admin/settings/currency/add') }}" class="btn btn-success pull-left">
                                    <i class="fa fa-plus"></i> Add New Currency
                                </a>
                            </label>
                        </div>
                        <div class="dataTables_filter">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/settings/emails', 'class' => '', 'role' => 'search'])  !!}
                           
                            {!! Form::close() !!}
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="hidden-xs"></th>
                                <th>Code</th>
                                <th>Exchange rate with USD</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($currencies as $currency)
                                <tr>
                                    <td class="hidden-xs"></td>
                                    <td>{{ $currency->code }}</td>
                                    <td>{{ $currency->exchange_rate }}</td>
                                    <td class="text-center text-nowrap">                                       
                                        <a href="{{ url('/admin/settings/currency/' . $currency->id . '/edit') }}"
                                           data-toggle="tooltip" title="Edit" data-animation="false">
                                            <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
