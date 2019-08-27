<div class="white-box">
    @php
        $indiegogo = $settings['INDIEGOGO'];
        $eCommerce = $settings['E-COMMERCE'];
        $campaignMenuStatus  = isset($settings['CAMPAIGN_MENU_STATUS'])?$settings['CAMPAIGN_MENU_STATUS']:'';
        $campaignButtonStatus  = isset($settings['CAMPAIGN_BUTTON_STATUS'])?$settings['CAMPAIGN_BUTTON_STATUS']:'';
        $campaignButtonValue  = isset($settings['CAMPAIGN_BUTTON_VALUE'])?$settings['CAMPAIGN_BUTTON_VALUE']:'';
    @endphp
    
    <h4>Setting</h4>
    <hr/>
    <!--<div class="form-group row {{ $errors->has('is_overwrite') ? 'has-error' : ''}}">
        <label for="is_overwrite" class="col-md-3 col-sm-5 col-form-label">Models URL <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                        <input id="is_overwrite_true" @if($indiegogo != null and $indiegogo->is_published) checked="checked" @endif name="is_overwrite" type="radio" value="1">
                        <label for="is_overwrite_true">Overwrite</label>
                    </div>
                </label>
                <label class="radio-inline p-0">
                    <div class="radio radio-danger">
                        <input id="is_overwrite_false" @if($indiegogo != null and !$indiegogo->is_published) checked="checked" @endif name="is_overwrite" type="radio" value="0">
                        <label for="is_overwrite_false">Don't overwrite</label>
                    </div>
                </label>
            </div>
            {!! $errors->first('is_overwrite', '<p class="help-block">:message</p>') !!}
        </div>
    </div>-->
    <div class="form-group row {{ $errors->has('e_commerce_status') ? 'has-error' : ''}}">
        <label for="e_commerce_status" class="col-md-3 col-sm-5 col-form-label">E-Commerce <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                        <input id="e_commerce_status_on" @if($eCommerce != null and $eCommerce->config_value)
                        checked="checked" @endif name="e_commerce_status" type="radio" value="1">
                        <label for="e_commerce_status_on">On</label>
                    </div>
                </label>
                <label class="radio-inline p-0">
                    <div class="radio radio-danger">
                        <input id="e_commerce_status_off" @if($eCommerce != null and !$eCommerce->config_value)
                        checked="checked" @endif name="e_commerce_status" type="radio" value="0">
                        <label for="e_commerce_status_off">Off</label>
                    </div>
                </label>
            </div>
            {!! $errors->first('e_commerce_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <h4>Campaign Menu Setting</h4>
    <hr/>
    <div class="form-group row {{ $errors->has('e_commerce_status') ? 'has-error' : ''}}">
        <label for="e_commerce_status" class="col-md-3 col-sm-5 col-form-label">Campaign Menu<span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                        <input id="e_commerce_status_on" @if($campaignMenuStatus != null and $campaignMenuStatus->config_value)
                        checked="checked" @endif name="campaign_menu_status" type="radio" value="1">
                        <label for="e_commerce_status_on">On</label>
                    </div>
                </label>
                <label class="radio-inline p-0">
                    <div class="radio radio-danger">
                        <input id="e_commerce_status_off" @if($campaignMenuStatus != null and !$campaignMenuStatus->config_value)
                             checked="checked" @endif name="campaign_menu_status" type="radio" value="0">
                        <label for="e_commerce_status_off">Off</label>
                    </div>
                </label>
            </div>
            {!! $errors->first('e_commerce_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('campaign_menu_name_en') ? 'has-error' : ''}}">
        <label for="campaign_menu_name_en" class="col-md-3 col-sm-5 col-form-label">Campaign Name English<span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="campaign_menu_name_en" id="campaign_menu_name_en" class="form-control" value="@if($indiegogo != null) {{ $indiegogo->title_en }} @endif">
            {!! $errors->first('campaign_menu_name_en', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group row {{ $errors->has('campaign_menu_name_vi') ? 'has-error' : ''}}">
        <label for="campaign_menu_name_vi" class="col-md-3 col-sm-5 col-form-label">Campaign Name Vietnames <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="campaign_menu_name_vi" id="campaign_menu_name_vi" class="form-control" value="@if($indiegogo != null) {{ $indiegogo->title_vi }} @endif">
            {!! $errors->first('campaign_menu_name_vi', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group row {{ $errors->has('indiegogo') ? 'has-error' : ''}}">
        <label for="indiegogo" class="col-md-3 col-sm-5 col-form-label">Campaign URL <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="indiegogo" id="indiegogo" class="form-control" value="@if($indiegogo != null) {{ $indiegogo->config_value }} @endif">
            {!! $errors->first('indiegogo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    
    <h4>Campaign Button Setting</h4>
    <hr/>
    <div class="form-group row {{ $errors->has('campaign_button_status') ? 'has-error' : ''}}">
        <label for="campaign_button_status" class="col-md-3 col-sm-5 col-form-label">Campaign Button<span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                        <input id="campaign_button_status_on" @if($campaignButtonStatus != null and $campaignButtonStatus->config_value)
                        checked="checked" @endif name="campaign_button_status" type="radio" value="1">
                        <label for="campaign_button_status_on">On</label>
                    </div>
                </label>
                <label class="radio-inline p-0">
                    <div class="radio radio-danger">
                        <input id="campaign_button_status_off" @if($campaignButtonStatus != null and !$campaignButtonStatus->config_value)
                             checked="checked" @endif name="campaign_button_status" type="radio" value="0">
                        <label for="campaign_button_status_off">Off</label>
                    </div>
                </label>
            </div>
            {!! $errors->first('campaign_button_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('campaign_button_name_en') ? 'has-error' : ''}}">
        <label for="campaign_button_name_en" class="col-md-3 col-sm-5 col-form-label">Campaign Button Name English<span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="campaign_button_name_en" id="campaign_button_name_en" class="form-control" value="@if($campaignButtonValue != null) {{ $campaignButtonValue->title_en }} @endif">
            {!! $errors->first('campaign_button_name_en', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group row {{ $errors->has('campaign_button_name_vi') ? 'has-error' : ''}}">
        <label for="campaign_button_name_vi" class="col-md-3 col-sm-5 col-form-label">Campaign Button Name Vietnames <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="campaign_button_name_vi" id="campaign_button_name_vi" class="form-control" value="@if($campaignButtonValue != null) {{ $campaignButtonValue->title_vi }} @endif">
            {!! $errors->first('campaign_button_name_vi', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group row {{ $errors->has('campaign_button_value') ? 'has-error' : ''}}">
        <label for="campaign_button_value" class="col-md-3 col-sm-5 col-form-label">Campaign Button URL <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">            
            <input name="campaign_button_value" id="campaign_button_value" class="form-control" value="@if($campaignButtonValue != null) {{ $campaignButtonValue->config_value }} @endif">
            {!! $errors->first('campaign_button_value', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>
