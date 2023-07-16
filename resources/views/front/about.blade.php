@extends('front.layout.app')

@section('main_content')

<div class="page-top">
    <div class="bg" style="background-image: url({{ asset('uploads/breathing.png') }})"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">{{ $about_data->about_heading }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    {!! nl2br($about_data->about_content) !!}
                </p>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 text-center">
    <div class="video text-center">
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/{{ $about_data->about_video_id }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    @if ($about_data->about_video_caption != '')
        <div class="video-caption">
            {!! nl2br($about_data->about_video_caption) !!}
        </div>
    @endif

</div>

@endsection