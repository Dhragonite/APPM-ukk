<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        
        
        <link rel="stylesheet" href="{{asset('assets')}}/vendor/datatables/dataTables.bootstrap4.min.css">
        <!-- Argon CSS -->

        
        @yield('style')

    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        
        <div class="main-content">
            @yield('content')
        </div>

            
        @stack('js')

        @yield('script')
    </body>
       
</html>