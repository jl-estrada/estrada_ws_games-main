<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS Games - {{ $subtitle ?? 'Neoh Del Prado' }}</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>

<body>
    <header>
        <div>
            <h1><a href={{url('admin')}}>WS Games</a></h1>
            <nav>
                <ul>
                    <li><a href={{url('admin')}}>Admin Users</a></li>
                    <li><a href={{url('admin/users')}}>Platform Users</a></li>
                    <li><a href={{url('admin/games')}}>Games</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div>
            <p>&copy;Neoh Del Prado | COMTEQ Computer and Business College, 2025</p>
        </div>
    </footer>
</body>

</html>