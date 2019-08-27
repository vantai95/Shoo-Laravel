@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Outsole Types[ {{$total}} ] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Outsole Types</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/outsole-types/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Outsole Type
                        </a>
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="hidden-xs"></th>
                        <th>Name English</th>
                        <th>Description English</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($outsoleTypes as $item)
                        <tr>
                            <td>
                                <img src="{{ $item->thumbnailUrl() }}" style="border: 1px solid #ddd;">
                            </td>
                            <td>
                                {{ $item->name_en }}
                            </td>
                            <td>
                                {!! $item->description_en !!}
                            </td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/outsole-types/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/outsole-types/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>

                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/admin/outsole-types', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                   data-animation="false"
                                   onclick="confirmSubmit(event, this, 'Delete outsole type', 'Do you want to delete this outsole type?')">
                                    <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                </a>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $outsoleTypes->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
