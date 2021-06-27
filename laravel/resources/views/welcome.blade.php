<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rizart Dokollari">
    <title>Aurora for Serverless Laravel</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
</head>
<body class="main-content">
<header>
    <h1>Aurora for Serverless Laravel</h1>
</header>

<div style="border: 1px solid #555; width: 100%; padding: 1em 0 1em 0">
    <b>Aurora DB Showcase</b>
    Website visits: {{ $websiteViewsCounter }}
</div>

<hr>
<a href="https://github.com/rdok/aurora-for-serverless-laravel/blob/a839d86fd362944c679718c3b4249094b07b4393/laravel/resources/views/welcome.blade.php#L22">
    <img
        style="border: 1px solid #555; width: 100%"
        src="{{ asset('img/infrastructure.jpg') }}"
        alt="Infrastructure Design for AWS SAM Laravel & Showcase getting static assets"
    />
</a>

<hr>

<a href="https://github.com/rdok/aurora-for-serverless-laravel/blob/a839d86fd362944c679718c3b4249094b07b4393/laravel/resources/views/welcome.blade.php#L32">
    <img
        style="width: 100%"
        src="data:image/jpg;base64,{!!  base64_encode(Storage::get('showcase-storage-retrieval.jpg')) !!}"
        alt="Showcase getting file from storage."/>
</a>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
