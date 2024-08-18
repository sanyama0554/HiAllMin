<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Webサービス')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    @include('components.navbar')

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
