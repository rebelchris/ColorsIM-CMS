<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <title>ColorsIM</title>
</head>

<body>
    <div class="grid full-height">
        <a class="btn-mega bg-green" href="{{ URL::route('user-update', ['green', $id]) }}"></a>
        <a class="btn-mega bg-red" href="{{ URL::route('user-update', ['red', $id]) }}"></a>
        <a class="btn-mega bg-yellow" href="{{ URL::route('user-update', ['yellow', $id]) }}"></a>
        <a class="btn-mega bg-blue" href="{{ URL::route('user-update', ['blue', $id]) }}"></a>
    </div>
</body>

</html>