<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('uploads/lung.jpg') }}">
    <title>LUNG CANCER</title>

    @include('front.layout.styles')

</head>

<body>



    @include('front.layout.nav')


    @if ($global_page_data->heading_status == 1 && Route::is('home') || Route::is('health'))
        <h2 class="h2_home">{{ $global_page_data->short_heading }}</h2>
        <div>
            <p class="para_home">{!! $global_page_data->heading !!}</p>
        </div>
    @endif


    @yield('main_content')


    @include('front.layout.scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
        </script>
    @endif

    @if (session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('success') }}',
            });
        </script>
    @endif




</body>

</html>
