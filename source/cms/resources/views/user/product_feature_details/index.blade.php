@extends('layouts.user.app')

@section('content')
    {{-- Product Feature Details --}}
    <div class="main-wrapper">
        <div class="container">
            <div class="main-container">
                <div class="single-blog">
                    <article class="blog-item">
                        {{--<div class="mg-top post-format">--}}
                            {{--<figure><img alt="" src="{{ $featureDetail->imageUrl() }}"></figure>--}}
                        {{--</div>--}}
                        <div class="post-info">
                            <h3 class="title-post mg-t70 text-center"><a href="{{ url('product-feature-detail', $featureDetail->slug) }}">{{ $featureDetail->title }}</a></h3>
                            {{--<ul class="meta-post">--}}
                                {{--<li class="author-post"><i class="icon-pe pe-7s-users"></i>{{ $featureDetail->author->full_name }}</li>--}}
                                {{--<li class="date-post"><i class="icon-pe pe-7s-clock"></i>{{ Carbon\Carbon::instance(new DateTime($featureDetail->created_at))->diffForHumans() }}</li>--}}
                            {{--</ul>--}}
                            <div class="excerpt-post">
                                {!! $featureDetail->content !!}
                            </div>
                            {{--<div class="group-share blog-share">--}}
                                {{--<span>Share this:</span>--}}
                                {{--<ul class="social">--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-vk"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {{--End Product Feature Details--}}
@endsection