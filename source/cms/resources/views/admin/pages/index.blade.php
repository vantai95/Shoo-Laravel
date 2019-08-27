@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Page Banner [{{$total}}] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Page Banner</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/page-banner/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Page Banner
                        </a>
                    </label>
                </div>
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr>
                        <th>Banner Image</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $item)
                        <tr>
                            <td>
                                <img class="col-sm-12" src="{{ $item->bannerUrl() }}" width="50px" style="border: 1px solid #ddd;">
                            </td>
                            <td>
                                {{ $item->status()}}
                            </td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/page-banner/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>
                                <a href="{{ url('/admin/page-banner/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>

                                {!! Form::open([
                                  'method'=>'DELETE',
                                  'url' => ['/admin/page-banner', $item->id],
                                  'style' => 'display:inline'
                              ]) !!}
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                   data-animation="false"
                                   onclick="confirmSubmit(event, this, 'Delete page banner', 'Do you want to delete this page banner?')">
                                    <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                </a>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $pages->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
