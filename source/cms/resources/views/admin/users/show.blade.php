@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Profile</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                @if ($isMyProfile)
                    <li class="active">My Profile</li>
                @else
                    <li>
                        <a href="{{ url($user->isAdmin() ? 'admin/users?is_admin=true' : 'admin/users') }}">{{ $user->isAdmin() ? 'Staffs' : 'Users' }}</a>
                    </li>
                    <li class="active">User Profile</li>
                @endif
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 text-center">
            <img class="col-sm-12" src="{{ $user->imageUrl() }}">
        </div>
        <div class="col-sm-9">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Full Name
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{$user->full_name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Email
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{$user->email}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Phone Number
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{$user->phone }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Day Of Birth
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{$user->birth_day}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Address
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{$user->address}}
                        </div>
                    </div>
                    @if (!$isMyProfile)
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-5 col-form-label">
                                Status
                            </label>
                            <div class="col-md-9 col-sm-7">
                                {{$user->status() }}
                            </div>
                        </div>
                    @endif

                    <div class="m-t-20">
                        @if ($isMyProfile)
                            <a href="{{ url('admin/my-profile/edit') }}" class="btn btn-info">
                                Edit Profile
                            </a>
                        @else
                            <a href="{{ URL::previous() }}"
                               class="btn btn-secondary">
                                Back
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            <div class="white-box">
                <div class="form-horizontal">
                    <label class="">
                        Measurements
                    </label>
                    <div class="user_measurements">
                        <br/>
                        <br/>
                        <div class="measurement">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($measurements as $indexKey => $item)
                                    <tr>
                                        <td>
                                            {{ $indexKey + 1 }}
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::parse($item->created_at)->format('H:i:s') }}
                                        </td>
                                        <td class="text-center text-nowrap">
                                            <a data-toggle="modal" data-target="#popup{{ $item->id }}" href="#"
                                               onclick="getMeasurement(event, {{ $item->id }})">
                                                <i class="fa fa-eye text-inverse m-l-5 m-r-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal Measurement--}}
    <div class="modal fade border-between" id="popup" role="dialog" style="overflow: auto;">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content equal flexbox-align-item-start">
                <div class="modal-header width-100">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">MEASUREMENT</h4>
                </div>
                <div>
                    <div class="modal-body modal-measurement">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script>
        function getMeasurement(event, id) {
            $.ajax("{{ url('admin/measurements/get-measurement-info-by-id') }}", {
                type: 'GET',
                data: {id: id},
                success: function (response){
                    $('.modal-body').html(response);
                    $('#popup').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        };
    </script>
@endsection
