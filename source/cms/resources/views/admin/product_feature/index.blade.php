@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product Feature [ {{$total}} ] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Product Feature </li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/product-feature/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Product Feature
                        </a>
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="hidden-xs">Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Index</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feature as $item)
                        <tr>
                            <td class="hidden-xs" >
                                <img src="{{ $item->imageProductFeatureURL() }}" width="60px" height="60px"
                                     style="border: 1px solid #ddd;">
                            </td>
                            <td>
                                {{ $item->title_en }}
                            </td>
                            <td>
                                {!! $item->description_en !!}
                            </td>
                            <td>{{ $item->index }}</td>
                            <td>{{ $item->status() }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/product-feature/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/product-feature/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>

                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/admin/product-feature', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                   data-animation="false"
                                   onclick="confirmSubmit(event, this, 'Delete product feature', 'Do you want to delete this product feature?')">
                                    <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                </a>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $feature->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


