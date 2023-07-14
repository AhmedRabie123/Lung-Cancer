<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title> Doctor Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('doctor.layout.styles')


    @include('doctor.layout.scripts')


</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            @include('doctor.layout.nav')



            @include('doctor.layout.sidebar')

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('heading')</h1>
                        <div class="ml-auto">
                            {{-- <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a> --}}
                        </div>
                    </div>

                    @yield('main_content')

                </section>
            </div>

        </div>
    </div>

    @include('doctor.layout.scripts_footer')

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
