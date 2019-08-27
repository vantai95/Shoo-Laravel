@extends('layouts.user.app')

@section('content')
    <section id="wrapper" class="login-register">
        <div class="mg-top login-box">
            <div class="white-box">
                <div class="row no-margin">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="show">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="main-container">
                    <div class="kt-login-register">
                        <div class="row no-margin">
                            <div class="col-md-8 col-md-offset-2">
                                <div id="login-div" class="show">
                                    <form action="{{ route('password.email') }}" class="login-form text-center"
                                          method="POST">
                                        {{ csrf_field() }}                         
                                        <div class="title-form" style="padding: 0px">                                            
                                            <div class="col-sm-12" style="padding: 0px">
                                                <h4 class="loggin">{{@trans("pages.password_reset.email")}}</h4>
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input class="form-control" type="text" id="email"
                                                   placeholder="{{@trans("pages.password_reset.enter_your_email")}}" 
                                                   name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span onclick="showPopup()" class="help-block" style="text-align: left">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif 
                                            
                                            {{-- <input type="text" value="{{ old('email') }}">--}}
                                        </div>
                                        <div class="form-submit">
                                            <div class="submit-btn mg-5"><input type="submit" value="{{@trans("pages.password_reset.confirm")}}"></div>
                                            <a class="mg-5" href="{{ url('/')}}">
                                                <div class=" back-btn">{{@trans("pages.password_reset.back")}}</div>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">{{@trans("pages.password_reset.forgot_password")}}</h4>
            </div>
            <div class="modal-body">
            {{@trans("pages.password_reset.forgot_password_popup_message")}}
            </div>
            <div class="modal-footer">
            <a href="/register" class="mg-5"><button type="button" id="btnYes" class="submit-btn model-btn-yes">{{@trans("pages.password_reset.yes")}}</button></a>
            <a href="/login" class="mg-5"><button type="button" id="btnNo" class="submit-btn model-btn-no">{{@trans("pages.password_reset.no")}}</button></a>
            </div>
        </div>
        </div>
        </div>
    </section>
   
@endsection

@section('extra_scripts')
<script type="text/javascript">
 @if ($errors->has('email'))
    @if (in_array(trans('passwords.user', ['attribute' => 'email']), $errors->get('email'))) 
        $(window).on('load', function() {
            $('#myModal').modal('toggle');
        })
    @endif 
  @endif
</script>
@endsection
