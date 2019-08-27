@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Facebook Leads [{{$total}}] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Facebook Leads</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                {!! Form::model(null, ['method' => 'POST', 'url' => url('/admin/facebook-leads/import-from-excel'), 'files' => true]) !!}
                {{Form::file('excel_file', ['id' => 'excel_file', 'style' => 'display: none', 'onchange' => 'uploadFileWithLimit(this, 20)'])}}
                {{Form::button('<i class="fa fa-plus"></i> Import Leads', ['onclick' => "document.getElementById('excel_file').click();" ,'class' => 'btn btn-success pull-right btn-sm m-l-5'])}}
                {!! Form::close() !!}

                <a class="btn btn-sm btn-info pull-right m-b-10" href="{{ url('/admin/facebook-leads/export-to-excel') }}">
                    <i class="fa fa-undo"></i> Export
                </a>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone #</th>
                        <th>Facebook Id</th>
                        <th>Registered Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($facebookLeads as $item)
                        <tr>
                            <td>
                                {{ $item->full_name}}
                            </td>
                            <td>
                                {{ $item->phone_number }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td>
                                {{ $item->facebook_id}}
                            </td>
                            <td>
                                {{ $item->registered_date }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $facebookLeads->appends(['q' => Request::get('q')])->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection
