@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product Packages [{{$total}}] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Product Packages</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/product-packages/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Package
                        </a>
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Volume</th>
                        <th>Description</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productPackages as $item)
                        <tr>
                            <td>
                                {{ $item->name_en }}
                            </td>
                            <td>
                                {{ $item->category->name_en }}
                            </td>
                            <td>
                                {{ $item->price }}
                            </td>
                            <td>
                                {{ $item->volume }}
                            </td>
                            <td>
                                {!! $item->description_en !!}
                            </td>
                            <td class="text-center">{{ $item->status() }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/product-packages/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/product-packages/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>
                                @if(!$item->canDelete())
                                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="left"
                                       title="Can not delete because orders are existing"
                                       data-animation="false" data-placement="left">
                                        <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                    </a>
                                @else
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['/admin/product-packages', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                    <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                       data-animation="false"
                                       onclick="confirmSubmit(event, this, 'Delete product packages', 'Do you want to delete this product packages?')">
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
                    {!! $productPackages->appends(['q' => Request::get('q')])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
