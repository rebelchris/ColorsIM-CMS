<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <title>ColorsIM</title>
</head>

<body>
    <div class="flex-center full-height">

        <div class="content">
            <div class="title m-b-md">
                Gebruikers:
            </div>

            <ol class="user-list">
                @foreach ($users as $user)
                <li>
                    <a href="{{ URL::route('user-detail', $user->id) }}"><span class='bg-{{$user->color}}'></span></a>
                </li>
                @endforeach
            </ol>

        </div>
    </div>
</body>

</html>