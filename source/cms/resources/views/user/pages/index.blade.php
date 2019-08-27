@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="ss-ourblog">
                <div class="container">
                    <h2 class="bd-recent mg-t70 text-center ">{{ str_replace('_', ' ', $page->page_name) }}</h2>
                    <div class="mgt40 mg-b40 description-content">
                        {!! $details->value !!}
                    </div>
            </div>
        </div>
    </div>

@endsection
