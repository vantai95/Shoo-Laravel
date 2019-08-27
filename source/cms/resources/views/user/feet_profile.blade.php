@extends('layouts.user.app')

@section('content')

<div class="main-wrapper check-out feet-profile">
    <div class="container">
        <div class="content">
            <h2 class='title'>{{@trans("pages.user.feet_profile.feet_profile")}}</h2>
            <form action="\user\change-feet-profile" id="feet-profile-form" method="POST">
                {{ csrf_field() }}
                
                <div class="col-xs-12 col-sm-12 col-lg-12" style="background-color:#F3F3F3;margin-bottom: 50px;letter-spacing: 4px; "><h4 style="text-align: center;">{{@trans("pages.user.feet_profile.feet_photos")}}</h4></div>
                <div class="col-xs-12 col-sm-12 col-lg-6">                  
                    <!-- begin feet photo-->                  
                    
                        <?php $html = ''; ?>                   
                        @foreach ($arrImages as $key => $img)
                            <?php
                            $selected = '';
                            if($key==0){
                                $selected = 'selected';
                            }
                            if($key==0 || $key==3){
                                $html .= '<div class="imgs rows"> ';
                            }
                            $html .='<div class="col-xs-4 col-lg-4">
                                        <div class="thumb-img"><img class="img row '.$selected.'" src="'.$img.'" /></div>
                                    </div>';
                            
                            if($key==2 || $key==5){
                                $html .= '</div> ';
                            }
                            ?>                        
                        @endforeach
                        <?php echo $html; ?> 
                    
                    <!-- end feet photo-->
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">                  
                    <!-- begin feet photo-->   
                    <div class="lg-img "><img src="{{$arrImages[0] or ''}}  " style="float: right;" /></div>
                    <!-- end feet photo-->
                </div>
                
               
                
                <div class="col-xs-12 col-sm-12 col-lg-12 feet_profile ">
                    <div class="content-box" style="padding: 0px;">
                      <div class="row" style="margin-top: -10px" >
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding "  >
                            <div class="col-xs-12 col-sm-12 col-lg-12 feet-photos "><h4>{{@trans("pages.user.feet_profile.feet_measurement")}}</h4></div>
                               <div class="rows feet-info-table" style="padding-left: 0px">                                
                                                                      

                                <table class="table" style="height: 400px; width: 96%;margin-left: 2px;">
                                   <?php if(!empty($measurement)){?>
                                    <tr class="tr" style="border: none;">
                                        <th ></th>
                                        <th><div id="left-foot"></div></th>
                                        <th><div id="right-foot"></div></th>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <th style="width: 40%;">{{@trans("pages.user.feet_profile.details")}}</th>
                                        <th>{{@trans("pages.user.feet_profile.left_foot")}}</th>
                                        <th>{{@trans("pages.user.feet_profile.right_foot")}}</th>
                                    </tr>
                                    <tr>
                                        <td >{{@trans("pages.user.feet_profile.foot_length")}}</td>
                                        <td>{{ $measurement->left_foot_length or '' }}</td>
                                        <td>{{ $measurement->right_foot_length or '' }}</td>
                                    </tr>
                                    <tr>
                                        <td >{{@trans("pages.user.feet_profile.toes_girth")}}</td>                                
                                        <td>{{ $measurement->left_toes_girth or '' }}</td>
                                        <td>{{ $measurement->right_toes_girth or '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{@trans("pages.user.feet_profile.ball_girth")}}</td>
                                        <td>{{ $measurement->left_ball_girth or '' }}</td>
                                        <td>{{ $measurement->right_ball_girth or '' }}</td>
                                    </tr>
                                    <tr>
                                        <td >{{@trans("pages.user.feet_profile.ball_width")}}</td>
                                        <td>{{ $measurement->left_ball_width or '' }}</td>
                                        <td>{{ $measurement->right_ball_width  or ''}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{@trans("pages.user.feet_profile.instep_height")}}</td>
                                        <td>{{ $measurement->left_instep_height or '' }}</td>
                                        <td>{{ $measurement->right_instep_height or '' }}</td>
                                    </tr>
                                </table>
                           
                        </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  " >
                               <div class="col-sm-12 col-lg-12 no-padding" style="background-color: #F3F3F3;margin-bottom: 25px;letter-spacing: 4px;    width: 93%;
    float: right;"><h4 style="text-align: center;">{{@trans("pages.user.feet_profile.additional_information")}}</h4>  </div>
                <div class="col-sm-12 col-lg-12" style="width: 90%;
    margin-left: 27px;">
                    <div class="content-box" style="margin-top: 15px">
                        <div class="row info-input {{ $errors->has('user_country') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb "><label>{{@trans("pages.user.feet_profile.nationality")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <input type="hidden" id='measurement_id' name='measurement_id' value="{{$measurement->id or ''}}" />
                                <select class="col-xs-12 col-sm-12 col-lg-8" id="user_country" name="user_country">
                                    @foreach ($countries as $key => $country)
                                        @php
                                            $selected = '';
                                            if(isset($userAddition->country_id)){
                                                if($userAddition->country_id == $country->id){
                                                    $selected = 'selected';
                                                }
                                            }
                                        @endphp
                                        <option {{$selected}} value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('user_country'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                        </div>
                        <div class="row info-input {{ $errors->has('user_gender') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb"><label>{{@trans("pages.user.feet_profile.gender")}} <span
                                            class="special-digit"></span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <select class="col-sm-12 col-lg-8" id="user_gender" name="user_gender">
                                        @php
                                            $gender = '';
                                            if(!empty($measurement)){
                                                $gender = $measurement->gender;     
                                            } 
                                        @endphp
                                        <option <?php if(empty($gender)){ ?>selected <?php } ?> value="">{{@trans("pages.user.feet_profile.please_chosen_brief")}}</option>
                                        <option <?php if($gender=="Male"){ ?>selected <?php } ?> value="Male">{{@trans("pages.user.feet_profile.male")}}</option>
                                        <option <?php if($gender=="Female"){ ?>selected <?php } ?>value="Female">{{@trans("pages.user.feet_profile.female")}}</option>
                                </select>
                                @if ($errors->has('user_gender'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_gender') }}</strong>
                                </span>
                                @endif
                            </div>
                           
                        </div>

                    <div class="row info-input {{ $errors->has('user_weight') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb"><label>{{@trans("pages.user.feet_profile.weight")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <input class="col-xs-12 col-sm-12 col-lg-8 input-check-out feet-profile" name="user_weight" id="user_weight" value="{{ $measurement->weight or ''}}">
                                @if ($errors->has('user_weight'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_weight') }}</strong>
                                </span>
                                @endif
                            </div>
                           
                        </div>

                        <div class="row info-input {{ $errors->has('user_height') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb"><label>{{@trans("pages.user.feet_profile.height")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <input class="col-xs-12 col-sm-12 col-lg-8 input-check-out feet-profile" name="user_height" id="user_height" value="{{ $measurement->height or ''}}">
                                @if ($errors->has('user_height'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_height') }}</strong>
                                </span>
                                @endif
                            </div>
                           
                        </div>

                        
                        <div class="row info-input {{ $errors->has('user_shoe_size') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb"><label>{{@trans("pages.user.feet_profile.shoe_size")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <select class="col-sm-12 col-lg-8" id="user_shoe_size" name="user_shoe_size">   
                                 
                                    @foreach ($fnShoeSizes as $key => $shoeSize)
                                        @php
                                            $selected = '';
                                            if(isset($userAddition->country_id)){
                                                if($userAddition->size_id == $shoeSize->id){
                                                    $selected = 'selected';
                                                }
                                            }
                                        @endphp
                                        <option {{$selected}} value="{{$shoeSize->id}}">{{$shoeSize->value or ''}}</option>
                                    @endforeach  
                                </select>
                                @if ($errors->has('user_shoe_size'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_shoe_size') }}</strong>
                                </span>
                                @endif
                            </div>                            
                        </div>
                        
                        <div class="row info-input {{ $errors->has('user_shoe_width') ? ' has-error' : '' }}">
                            <div class="col-xs-12 col-sm-12 col-lg-4 title-lb"><label>{{@trans("pages.user.feet_profile.shoe_width")}} <span
                                            class="special-digit">*</span></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                <select class="col-sm-12 col-lg-8" id="user_shoe_width" name="user_shoe_width">   
                                        @php
                                            $selected_narrow = '';
                                            $selected_standard = '';
                                            $selected_wide = '';
                                            $selected_extra_wide = '';
                                            if(isset($userAddition->shoe_width)){
                                                if($userAddition->shoe_width == @trans("pages.user.feet_profile.narrow")){
                                                    $selected_narrow = 'selected';
                                                }
                                                if($userAddition->shoe_width == @trans("pages.user.feet_profile.standard")){
                                                    $selected_standard = 'selected';
                                                }
                                                if($userAddition->shoe_width == @trans("pages.user.feet_profile.wide")){
                                                    $selected_wide = 'selected';
                                                }
                                                if($userAddition->shoe_width == @trans("pages.user.feet_profile.extra_wide")){
                                                    $selected_extra_wide = 'selected';
                                                }
                                            }
                                        @endphp                                 
                                        <option {{$selected_narrow}} value="{{@trans("pages.user.feet_profile.narrow")}}">{{@trans("pages.user.feet_profile.narrow")}}</option>
                                        <option {{$selected_standard}} value="{{@trans("pages.user.feet_profile.standard")}}">{{@trans("pages.user.feet_profile.standard")}}</option>
                                        <option {{$selected_wide}} value="{{@trans("pages.user.feet_profile.wide")}}">{{@trans("pages.user.feet_profile.wide")}}</option>
                                        <option {{$selected_extra_wide}} value="{{@trans("pages.user.feet_profile.extra_wide")}}">{{@trans("pages.user.feet_profile.extra_wide")}}</option>
                                </select>
                                @if ($errors->has('user_shoe_width'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_shoe_width') }}</strong>
                                </span>
                                @endif
                            </div>
                           
                        </div>

                        
                        <div class="row info-input {{ $errors->has('user_note') ? ' has-error' : '' }}" style="margin-left: 3px;" >
                            <div class="col-xs-12 col-sm-12 col-lg-12 title-lb"><label>{{@trans("pages.user.feet_profile.note")}}<span class="special-digit">&nbsp;</span></label></div>
                            
                                <div class="col-sm-12 col-lg-4 title-lb"><label><span class="special-digit"></span></label></div>
                                        
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                            <textarea class="col-sm-12 col-lg-12 input-check-out" type="text" id="user_note"
                                        name="user_note">{{$userAddition->note or ''}} </textarea>

                                        @if ($errors->has('user_note'))
                                    <span class="help-block" style="text-align: left">
                                        <strong>{{ $errors->first('user_note') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                                 
                           
                            
                         
                        </div>   

                    </div>

                </div>
                
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-12" style=" margin-bottom: 50px;">
                       
                                
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input class=" pull-right btn btn-default kt-button" style="background-color: #ddbe86;border-color: #ddbe86;" id="btn-cancel" type="button" onClick="window.location.reload()" value='{{@trans("pages.user.cancel")}}' />
                                </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                            <input class="btn btn-default kt-button " id="btn-save" type="submit" value='{{@trans("pages.user.save")}}'>
                        </div>

                          </div>
                       
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection

@section('extra_scripts')
    <script>
        $(document).ready(function () {            
            var url =$(".selected").attr( "src" );
            $(".lg-img").find('img').attr( "src", url);
            var measurementCode = "{{ isset($measurement->code) ? $measurement->code : ""}}";
            var leftFootImage = "{{ isset($measurement->code) ? url(config('constants.MEASUREMENT_FOLDER') . $measurement->code . '/' . 'model_l.stl') : "" }}";
            var rightFootImage = "{{ isset($measurement->code) ? url(config('constants.MEASUREMENT_FOLDER') . $measurement->code . '/' . 'model_r.stl') : "" }}";
            var leftFootViewer = new StlViewer
            (
                document.getElementById("left-foot"),
                {
                    models: [ {filename: leftFootImage } ],
                    load_three_files: "/theme/user/js/"
                }
            );
            var rightFootViewer = new StlViewer
            (
                document.getElementById("right-foot"),
                {
                    models: [ {filename: rightFootImage } ],
                    load_three_files: "/theme/user/js/"
                }
            );
        });
        $(".img").on("click", function (e) {
            $(".img").removeClass('selected');
            $(this).addClass('selected');
            var url =$(this).attr( "src" );
            $(".lg-img").find('img').attr( "src", url);            
        });

        $("#user_weight").change(function(event) {
            var value = $('#user_weight').val();            
            if(value>0){
                value = round(value, 1); 
            }
            $('#user_weight').val(value);
        });

        $("#user_height").keydown(function(event) {
            if ( event.keyCode == 46 || event.keyCode == 8 ) { }
            else {
                if (event.keyCode < 48 || (event.keyCode > 57 && event.keyCode < 96) || event.keyCode >105) {
                    event.preventDefault(); 
                }   
            }
        });

        function round(value, decimals) {
            return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
        }


    </script>
@endsection