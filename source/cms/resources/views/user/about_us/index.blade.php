@extends('layouts.user.app')

@section('content')
    {{--About Us Image--}}
    <div class="main-wrapper">
        <div class="container">
            <div class="ss-ourblog">
                <div class="container">
                    <h2 class="bd-recent mg-t70 text-center">{{ @trans("pages.about_us.about_us")}}</h2>

                    @if(empty($aboutUsBanner))
                        <img class="full-width" src="{{ asset("images/banner.png") }}" alt="banner" />
                    @else
                        <img class="full-width" src="{{ asset($aboutUsBanner->imageUrl()) }}" alt="banner" />
                    @endif

                    <p class="mgt40 mg-b40 description-content text-center">
                        {!! $aboutUsDescription->description !!}
                    </p>
                    <div class="ss-blog-post kt-blog-post">
                        @for($i = 0; $i <= (integer)(count($aboutUsImages) / 2); $i++)
                            <div class="row">
                                @foreach($aboutUsImages as $key => $aboutUsImage)
                                    @if( (integer)($key / 2) == $i)
                                        <div class="col-sm-6">
                                            <article class="blog-item">
                                                <div class="img-container img-responsive">
                                                    <div class="item img-wrapper">
                                                        <img width="600px" src="{{ asset($aboutUsImage->imageUrl()) }}">
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endfor
                        {{--<p class="mg-b40 description-content text-center">--}}
                            {{--{!! $aboutUsDescription->sub_description !!}--}}
                        {{--</p>--}}
                    </div>
            </div>
        </div>
    </div>

    {{-- End About Us Image--}}


@endsection
