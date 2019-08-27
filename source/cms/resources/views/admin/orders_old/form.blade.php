@if(!empty($order))
    <div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
        {!! Form::label('status', 'Status', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
        <div class="col-md-5 col-sm-5">
            {!! Form::select('status', \App\Models\Order::createStatusMap(), null, ['class' => 'form-control simple-dropdown', 'id' => 'status']) !!}
            {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group row {{ $errors->has('feedback_message') ? 'has-error' : ''}} " id="feedback_group">
    {!! Form::label('feedback_message', 'Feedback Message', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-9 col-sm-7">
        {!! Form::text('feedback_message', null, ['class' => 'form-control', 'id' => 'feedback']) !!}
        {!! $errors->first('feedback_message', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('package_id') ? 'has-error' : ''}}">
    {!! Form::label('package_id', 'Product Package', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-5 col-sm-5">
        {!! Form::select('package_id', \App\Models\ProductPackage::pluck('name', 'id'), null, ['class' => 'form-control simple-dropdown', !empty($order) ? 'disabled' : '', 'id' => 'package_id']) !!}
        {!! $errors->first('package_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('package_id', 'Package Details', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-9 col-sm-7">
        Name: <b><span id='name' style="padding-right: 30px"></span></b>
        Price: <b><span id='price' style="padding-right: 30px"></span></b>
        Category: <b><span id='category' style="padding-right: 30px"></span></b>
    </div>
</div>

@if(empty($order))
    <div class="form-group row {{ $errors->has('indiegogo_order_code') ? 'has-error' : ''}}">
        <label for="indiegogo_order_code" class="col-md-3 col-sm-5 col-form-label">Indiegogo Order Code <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('indiegogo_order_code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('indiegogo_order_code', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="col-md-3 col-sm-5 col-form-label">Email <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('full_name') ? 'has-error' : ''}}">
        <label for="full_name" class="col-md-3 col-sm-5 col-form-label">Full Name <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('shipping_address') ? 'has-error' : ''}}">
        <label for="shipping_address" class="col-md-3 col-sm-5 col-form-label">Shipping Address <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('shipping_address', null, ['class' => 'form-control']) !!}
            {!! $errors->first('shipping_address', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@else
    <div class="form-group row">
        <label for="indiegogo_order_code" class="col-md-3 col-sm-5 col-form-label">Indiegogo Order Code </label>
        <div class="col-md-9 col-sm-7">
          <b>{{$order->indiegogo_order_code}}</b>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-3 col-sm-5 col-form-label">Email </label>
        <div class="col-md-9 col-sm-7">
            {{$order->email}}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('full_name') ? 'has-error' : ''}}">
        <label for="full_name" class="col-md-3 col-sm-5 col-form-label">Full Name </label>
        <div class="col-md-9 col-sm-7">
            {{$order->full_name}}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('shipping_address') ? 'has-error' : ''}}">
        <label for="shipping_address" class="col-md-3 col-sm-5 col-form-label">Shipping Address </label>
        <div class="col-md-9 col-sm-7">
            {{$order->shipping_address}}
        </div>
    </div>

@endif

@if((!empty($order)) && $order->package->category->name !='Flagship')
    <h3 class="text-center">SHOES DETAILS</h3>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 text-center">MODEL<br>
            @if(!empty($order->type ))
                <img height="150px" src="{{$order->type->imageUrl()}}"><br>
                <span class="text-info">{{$order->type->name}}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-2 text-center">SHOES STYLE<br>
            @if(!empty($order->style ))
                <img height="150px" src="{{$order->style->imageUrl()}}"><br>
                <span class="text-info">{{$order->style->main_name}}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-2 text-center">TOE SHAPE<br>
            @if(!empty($order->toeShape ))
                <img height="150px" src="{{$order->toeShape->imageUrl() }}"><br>
                <span class="text-info">{{$order->toeShape->name }}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-2 text-center">LEATHER<br>
            @if(!empty($order->toeShape ))
                <img height="150px" src="{{$order->leather->imageUrl()}}"><br>
                <span class="text-info">{{$order->leather->name }}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-2 text-center">OUTSOLE<br>
            @if(!empty($order->outsole ))
                <img height="150px" src="{{ $order->outsole->imageUrl()}}"><br>
                <span class="text-info">{{ $order->outsole->name}}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-1"></div>
    </div>
@elseif((!empty($order)) && $order->package->category->name =='Flagship')
    <h3 class="text-center">SHOES DETAILS</h3>
    <div class="row" style="padding-bottom: 20px">
        <div class="col-sm-2 text-center">FLAGSHIP STYLE<br>
            @if(!empty($order->flagshipStyle ))
                <img height="150px" src="{{$order->flagshipStyle->imageUrl() }}"><br>
                <span class="text-info">{{$order->flagshipStyle->name }}</span>
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 text-center">FLAGSHIP IMAGE<br>
            @if(!empty($order->flagshipImageUrl()))
                <img height="150px"
                     src="{{$order->flagshipImageUrl()}}">
            @else
                <div class="text-danger">None selected</div>
            @endif
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6 well" style="height: 170px">
            <h4 class="text-center" style="margin-top: -10px; margin-bottom: -10px">DESCRIPTION</h4><br>
            <p>{{$order->description}}</p>
        </div>

    </div>
@endif


<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
@section('extra_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            ShowHideFeedbackMessage();
            ShowPackageDetails();

            $('#status').on('change', function () {
                ShowHideFeedbackMessage();
            });
            $('#package_id').on('change', function () {
                ShowPackageDetails();
            });
        });

        function ShowHideFeedbackMessage() {
            if ($('#status :selected').text() == 'Feedback') {
                $('#feedback').val('');
                $('#feedback_group').show()
            } else {
                $('#feedback_group').hide();
            }
        }

        function ShowPackageDetails() {
            var id = $('#package_id :selected').val();

            $.ajax({
                type: "GET",
                url: '{{url('/admin/package-details')}}' + '/' + id,
                success: function (msg) {
                    $('#name').text(msg.name);
                    $('#price').text(msg.price + '$');
                    $('#category').text(msg.category);
                }
            });
        }


    </script>
@endsection