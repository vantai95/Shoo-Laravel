@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"> Styles [ {{$total}} ] </h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active"> Styles</li>
            </ol>
        </div>
    </div>
    <div class="white-box">
        <div class="table-responsive">
            <div class="dataTables_wrapper no-footer">
                <div class="dataTables_length">
                    <label>
                        <a href="{{ url('/admin/shoe-styles/create') }}" class="btn btn-success pull-left">
                            <i class="fa fa-plus"></i> Add New Style
                        </a>
                    </label>
                </div>
                <div class="dataTables_filter">
                    {!! Form::open(['method' => 'GET', 'url' => '/admin/shoe-styles', 'class' => '', 'role' => 'search'])  !!}
                    <div class="input-group">
                        <select onchange="this.form.submit()" name="shoe_types_id" style="width: 200px;">
                            <option value="" {{ $shoe_types_id ? '' : 'selected' }}>All Models</option>
                            @foreach(\App\Models\ShoeTypes::select('name_en','id')->get() as $shoesType)
                                <option value="{{ $shoesType->id }}" {{ $shoe_types_id != $shoesType->id ? '' : 'selected' }}>{{ $shoesType->name_en }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control search-text" name="q"
                               value="{{ Request::get('q') }}" placeholder="Search By Main Name Or Sub Name...">
                        <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
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
                        <th>Model</th>
                        <th>Main Name</th>
                        <th>Sub Name</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Description</th>
                        <th>Sub Description</th>
                        <th class="text-center" style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shoeStyles as $item)
                        <tr>
                            <td class="hidden-xs" >
                                <img src="{{ $item->thumbnailUrl() }}" style="border: 1px solid #ddd;">
                            </td>
                            <td>
                                {{ $item->shoeTypes->name_en }}
                            </td>
                            <td>
                                {{ $item->main_name_en }}
                            </td>
                            <td>
                                {{ $item->sub_name_en }}
                            </td>
                            <td>
                                ${{ $item->price }}
                            </td>
                            <td>
                                ${{ $item->discount_price }}
                            </td>
                            <td>
                                {!!  $item->description_en !!}
                            </td>
                            <td>
                                {!!  $item->sub_description_en !!}

                            </td>
                            <td class="text-center text-nowrap">
                                <a href="{{ url('/admin/shoe-styles/' . $item->id) }}" data-toggle="tooltip"
                                   title="Show" data-animation="false">
                                    <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                </a>

                                <a href="{{ url('/admin/shoe-styles/' . $item->id . '/edit') }}"
                                   data-toggle="tooltip" title="Edit" data-animation="false">
                                    <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                </a>

                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/admin/shoe-styles', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                   data-animation="false"
                                   onclick="confirmSubmit(event, this, 'Delete shoe style', 'Do you want to delete this shoe style?')">
                                    <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                </a>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers">
                    {!! $shoeStyles->appends(['q' => Request::get('q'),'shoe_types_id' => $shoe_types_id])->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
