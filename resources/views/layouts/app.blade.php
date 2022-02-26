<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <header>
        <div class="headerDiv">
            <img src="{{ asset("storage/shkolo-logo.png") }}" alt="Shkolo Logo">
        </div>
    </header>

    @yield('content')

    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
