<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Media Market</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <style>
        body {
            padding: 0!important;
            margin: 0!important;
        }
    </style>
</head>
<body>
    @include('partials.admin.navbar')
    @include('partials.admin.sideBar')
    <div class="p-4 sm:ml-64">
        <div class="mt-20">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/gg1e9n4g1buqmn8sl1h7l4l1q35tdtxjb9lv09mqfxwb7i7v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</body>
</html>
