@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">How It Work [ {{ $total }} ]</h4>
        </div>
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">How It Work</li>
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
                                <a href="{{ url('/admin/page-how-it-works/create') }}" class="btn btn-success pull-left"
                                   title="Create new How It Work">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New How It Work
                                </a>
                            </label>
                        </div>
                        <div class="dataTables_filter">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/page-how-it-works', 'class' => '', 'role' => 'search'])  !!}
                            <div class="input-group">
                                <input type="text" class="form-control search-text" name="q"
                                       value="{{ Request::get('q') }}"
                                       placeholder="Search by title or description...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">
                                        Search <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        <table class="table table-borderless table-striped">
                            <thead>
                            <tr>
                                <th class="hidden-xs"></th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                {{--<th>Page</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($howItWorks as $work)
                                <tr>
                                    <td class="hidden-xs"><img class="img img-responsive" src="{{ asset($work->imageUrl()) }}" ></td>
                                    <td>{{ $work->title_en }}</td>
                                    <td>{!! $work->description_en !!}</td>
                                    <td>{{ $work->status() }}</td>
                                    {{--<td>{{ $work->page->title }}</td>--}}
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/page-how-it-works/' . $work->id) }}"
                                           data-toggle="tooltip"
                                           title="Show" data-animation="false">
                                            <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                        <a href="{{ url('/admin/page-how-it-works/' . $work->id . '/edit') }}"
                                           data-toggle="tooltip" title="Edit" data-animation="false">
                                            <i class="fa fa-pencil-square-o text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/admin/page-how-it-works', $work->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                        <a href="javascript:void(0);" data-toggle="tooltip" title="Delete"
                                           data-animation="false"
                                           onclick="confirmSubmit(event, this, 'Delete how it work', 'Do you want to delete this how it work?')">
                                            <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                        </a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers">
                            {{--{!! $users->appends(['q' => Request::get('q'), 'is_user' => $isUser, 'is_admin' => $isAdmin])->render() !!}--}}
                            {{--{{ $howItWorks->links() }}--}}
                            {!! $howItWorks->appends(['q' => Request::get('q')])->render() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
