<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', '') {{ config('app.name', 'Gkiokan.NET') }}</title>

<!-- Styles -->
<link href="{{ elixir('/css/app.css') }}" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = @php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); @endphp

    @yield('head.script')
</script>
<style>
    @yield('head.style')
</style>
