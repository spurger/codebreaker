<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="min-h-screen bg-slate-800 px-10 py-12 text-white">
        <h1 class="text-4xl font-bold tracking-wide text-sky-300">
            {{ config('app.name') }}
        </h1>
    </div>
</body>

</html>
