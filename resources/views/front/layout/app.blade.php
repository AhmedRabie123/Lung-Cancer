<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNG CANCER</title>

    @include('front.layout.styles')

</head>

<body>



    @include('front.layout.nav')


    @if ($global_page_data->heading_status == 1)
        <h2 class="h2_home">{{ $global_page_data->short_heading }}</h2>
        <div>
            <p class="para_home">{!! $global_page_data->heading !!}</p>
        </div>
    @endif


    @yield('main_content')


    @include('front.layout.scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>
