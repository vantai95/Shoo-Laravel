@extends('layouts.user.app')

@section('content')
<section id="wrapper" class="expire">
        <div class="main-container">
            <div class="white-box">
            
                <div class="col-sm-12">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3> {{@trans("pages.passwords.expired.restore_password")}}</h3>
                                <p class="text-muted"> {{@trans("pages.passwords.expired.your_link_expired")}}</p>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <a href="{{ url('password/reset')}}"
                                class="btn btn-secondary btn-lg btn-block text-uppercase waves-effect waves-light">
                                {{@trans("pages.passwords.expired.resent_request")}}
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>

</section>
@endsection
