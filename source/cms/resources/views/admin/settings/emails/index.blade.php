@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Email Templates [ {{ $total }} ]</h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Email Templates</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <div class="dataTables_wrapper no-footer">
                        <div class="dataTables_length">
                        </div>
                        <div class="dataTables_filter">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/settings/emails', 'class' => '', 'role' => 'search'])  !!}
                            <div class="input-group">
                                <input type="text" class="form-control search-text" name="q"
                                       value="{{ Request::get('q') }}"
                                       placeholder="Search by name or subject...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">
                                        Search <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="hidden-xs"></th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($emails as $email)
                                <tr>
                                    <td class="hidden-xs"></td>
                                    <td>{{ $email->name }}</td>
                                    <td>{{ $email->subject_en }}</td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/settings/emails/' . $email->id) }}"
                                           data-toggle="tooltip"
                                           title="Show" data-animation="false">
                                            <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                        <a href="{{ url('/admin/settings/emails/' . $email->id . '/edit') }}"
                                           data-toggle="tooltip" title="Edit" data-animation="false">
                                            <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers">
                            {!! $emails->appends(['q' => Request::get('q')])->render() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
