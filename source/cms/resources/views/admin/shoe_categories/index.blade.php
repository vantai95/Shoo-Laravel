@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Shoes Categories [ {{$total}} ] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Shoes Categories</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/shoe-categories/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Category
                        </a>
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name English</th>
                        <th>Name Vietnamese</th>
                        {{--   <th>Description</th>--}}
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shoeCategories as $item)
                        <tr>
                            <td>
                                {{ $item->name_en }}
                            </td>
                            <td>
                                {{ $item->name_vi }}
                            </td>
                            {{--<td>
                                {{ $item->description }}
                            </td>--}}
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/shoe-categories/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/shoe-categories/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>
                                @if(!$item->canDelete())
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="left"
                                       title="Can not delete because product packages are existing"
                                       data-animation="false" data-placement="left">
                                        <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                    </a>
                                @else
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/shoe-categories', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                    <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                       data-animation="false"
                                       onclick="confirmSubmit(event, this, 'Delete shoe Category', 'Do you want to delete this shoe Category?')">
                                        <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                    </a>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $shoeCategories->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection