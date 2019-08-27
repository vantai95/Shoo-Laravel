@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">About Us Description </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">About Us Description</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Sub Description</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($AboutUsDescriptions as $item)
                        <tr>
                            
                            <td>
                                {!! $item->sub_description_en !!}
                            </td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/about-us-description/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/about-us-description/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $AboutUsDescriptions->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
