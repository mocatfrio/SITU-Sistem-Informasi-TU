<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/formvalidation.css">
    @yield('style')
</head>
<body class="body">
    <div class="row">
        <div class="content col-md-4" style="text-align: left; background-color: white;">
            <div class="cont" style="">
                <a href="/viewadmin">
                    <div class="pilih">
                        <h4>Lihat Permohonan Surat Masuk</h4>
                    </div>
                </a>
            </div>
        </div>
        <div id="container" class="col-md-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
