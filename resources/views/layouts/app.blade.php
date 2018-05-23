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
    Hi, {{ $user }}!
    <div class="row">
        <div class="content col-md-4" style="text-align: left; background-color: white;">
            <div class="cont" style="">
                <a href="/lihatpermohonan">
                    <div class="pilih">
                        <h4>Lihat Permohonan Surat</h4>
                    </div>
                </a>
                <a href="/keperluansurat">
                    <div class="pilih">
                        <h4>Buat Permohonan Surat</h4>
                    </div>
                </a>
            </div>
        </div>
        <div id="container" class="col-md-8">
            @yield('content')
        </div>
    </div>
    <a href="/logout">LOG OUT</a>
</body>
</html>
