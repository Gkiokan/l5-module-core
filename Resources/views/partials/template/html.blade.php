<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::partials.template.header')
</head>
<body class='default'>

    <div id="app">
        @section('content.header')
            @include('core::partials.navigation.full')
        @show

        @section('content.main')
            @yield('content')
        @show
    </div>

    @include('core::partials.template.footer')
</body>
</html>
