@extends('layouts.user.app')

@section('content')
    {{--How it works--}}
    <div class="main-wrapper">
        <div class="container">
            <div class="main-container">
                <h3 class="mg-top mg-bottom bd-recent">{{ $productFeature->title }}</h3>
                <div class="row">
                    <div class="main-content main-right col-sm-12">
                        <div class="kt-blogs">
                            <div class="blog-grid row">
                                @foreach($productFeatureDetails as $featureDetail)
                                    <article class="blog-item col-sm-6">
                                        <div class="post-format">
                                            <figure><img alt="" src="{{ $featureDetail->imageUrl() }}"></figure>
                                        </div>
                                        <div class="post-info">
                                            <h3 class="title-post"><a href="{{ url('product-feature-detail', $featureDetail->slug) }}">{{ $featureDetail->title }}</a></h3>
                                            {{--<ul class="meta-post">--}}
                                                {{--<li class="author-post"><i class="icon-pe pe-7s-users"></i>{{ $featureDetail->author->full_name }}</li>--}}
                                                {{--<li class="date-post"><i class="icon-pe pe-7s-clock"></i>{{ Carbon\Carbon::instance(new DateTime($featureDetail->created_at))->diffForHumans() }}</li>--}}
                                            {{--</ul>--}}
                                            <div class="excerpt-post">{{ (new \App\Services\CommonService)->limitStrlen($featureDetail->content, 350, true, true, false) }}<a class="readmore" href="{{ url('product-feature-detail', $featureDetail->slug) }}">READ MORE</a></div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                            {{ $productFeatureDetails->links('pagination.default') }}
                        </div>
                    </div>
                    {{--<div class="sidebar col-md-3 col-sm-4">--}}
                        {{--<div class="widget widget-search blog-search">--}}
                            {{--<h3 class="widget-title">Search product features</h3>--}}
                            {{--<form class="form-search" action="#">--}}
                                {{--<input type="text" placeholder="Search" value="">--}}
                                {{--<span>--}}
		                    		{{--<button type="submit" name="submit_search" class="button-search"><i class="fa fa-search"></i></button>--}}
								{{--</span>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="widget widget-recentpost">--}}
                            {{--<h3 class="widget-title">Recent posts</h3>--}}
                            {{--<ul class="list-post widget-list">--}}
                                {{--@foreach($productFeatureDetails as $featureDetail)--}}
                                {{--<li>--}}
                                    {{--<div class="post-thumb"><img src="{{ $featureDetail->imageUrl() }}" alt="{{ $featureDetail->title }}"></div>--}}
                                    {{--<div class="info-post">--}}
                                        {{--<h4 class="title-post"><a href="{{ url('product-feature-detail', $featureDetail->slug) }}">{{ $featureDetail->title }}</a></h4>--}}
                                        {{--<div class="meta-post">--}}
                                            {{--<span class="date-post">{{ Carbon\Carbon::instance(new DateTime($featureDetail->created_at))->diffForHumans() }}</span>--}}
                                            {{--<span class="author-post">by {{ $featureDetail->author->full_name }}</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    {{--End How it works--}}
@endsection
