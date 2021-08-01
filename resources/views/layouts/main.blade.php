<!DOCTYPE html>

<html lang="pt">
    <head>
        <title>Agenda | @yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Agenda utilizando Lararvel."/>
        <meta charset="utf-8"/>

        <link rel="stylesheet" href="/css/styles.css"/>
    </head>

    <main>
        @if(session('msg'))
            <div class="msg msg-green">{{ session('msg') }}</div>
        @endif
        @yield('content')
    </main>
</html>